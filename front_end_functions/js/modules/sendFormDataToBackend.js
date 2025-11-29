// front_end_functions/js/tokenization/sendFormDataToBackend.js
import {
  validateForm,
  handleAjaxError,
  showToastMessage,
  getErrorMessageFromStatus
} from '../modules.js';
import { resetForm, captureInitialState } from './reset_form.js';
import { createFormSubmitHandler } from './submit_form_backend.js';
import { attachSpinner, removeSpinner } from './spinner.js';
import { getFormInputs, buildPayload } from './form_utils.js';

export function sendFormDataToBackend(config = {}) {
  createFormSubmitHandler({
    ...config,

    beforeSubmit: (_, form, btn) => {
      btn.disabled = true;
      if (config.spinner) attachSpinner(config.spinnerTarget, config.submitting, { inline: true, size: "md" });

      const inputs = getFormInputs(config.formSelector);
      return validateForm(config.formSelector, inputs);
    },

    transformPayload: (_, form) => {
      const inputs = getFormInputs(config.formSelector);
      return buildPayload(inputs);
    },

    onSuccess: (response, form, btn) => {
      showToastMessage(response.status ? 'success' : 'error', response.message || 'Operation completed');

      if (response.status) {
        captureInitialState(config.formSelector);
        resetForm(config.formSelector, { mode: 'initial', skipValidationReset: true });
      }

      if (config.spinner) removeSpinner(config.spinnerTarget);
      btn.disabled = false;
    },

    onError: (error, form, btn) => {
      const status = error.status || (error.response?.status ?? undefined);
      const message = error.message || 'Unknown error';
      handleAjaxError(error, status, message, showToastMessage);

      if (config.spinner) removeSpinner(config.spinnerTarget);
      btn.disabled = false;
    },

    validateResponse: async (response) => {
      if (!response.ok) {
        const msg = getErrorMessageFromStatus(response.status, response.url) + '\n\nFailed to save configurations!';
        throw new Error(msg);
      }

      const contentType = response.headers.get('content-type') || '';
      if (!contentType.includes('application/json')) {
        const raw = await response.text();
        throw new Error("Unexpected non-JSON response:\n" + raw.slice(0, 120));
      }
      return response;
    }
  });
}
