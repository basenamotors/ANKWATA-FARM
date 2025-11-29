// front_end_functions/js/modules/submit_form_backend.js
import { attachSpinner, removeSpinner } from './spinner.js';

/**
 * Generic reusable form submit handler
 */
export function createFormSubmitHandler({
  formSelector,
  submitButtonSelector,
  endpoint,
  messages = {},
  loadingElements = {},
  beforeSubmit = () => true,
  transformPayload = (p, f) => p,
  onSuccess = () => {},
  onError = () => {},
  validateResponse = async (r) => r
}) {
  const form = document.querySelector(formSelector);
  if (!form) return console.warn(`Form not found: ${formSelector}`);

  const btn = form.querySelector(submitButtonSelector);
  if (!btn) return console.warn(`Submit button not found: ${submitButtonSelector}`);

  const { spinner, spinnerTarget } = loadingElements;

  btn.addEventListener('click', async (e) => {
    e.preventDefault();

    const originalHtml = btn.innerHTML;
    const originalDisabled = btn.disabled;

    btn.disabled = true;
    if (spinnerTarget) attachSpinner(spinnerTarget, messages.submitting, { inline: true, size: "md" });

    try {
      if (!beforeSubmit({}, form, btn)) throw new Error('Form validation failed');

      const payload = transformPayload({}, form);

      const response = await fetch(endpoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      });

      const validated = await validateResponse(response);
      const contentType = validated.headers.get('content-type') || '';
      const result = contentType.includes('application/json') ? await validated.json() : await validated.text();

      onSuccess(result, form, btn);
    } catch (err) {
      onError(err, form, btn);
      console.error('Form submit error:', err);
    } finally {
      btn.disabled = originalDisabled;
      if (spinner) removeSpinner(spinnerTarget);
    }
  });
}
