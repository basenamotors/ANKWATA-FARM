// front_end_functions/js/modules/fetchConfigHandler.js

import {
  handleAjaxError,
  showToastMessage,
  getErrorMessageFromStatus
} from '../modules.js';

import { fetchDbAction } from '../modules/fetch_db_records.js';

/**
 * Fetch configuration data from backend and populate form or fields
 * @param {Object} config - Configuration options
 */
export function fetchConfigHandler(config = {}) {
  if (!config.form) {
    console.error("fetchConfigHandler: Form not provided.");
    return;
  }

  const defaultEndpoint = 'back_end_functions/tokenization/fetchConfig.php';

  // ✅ Default Boolean Fields (can be overridden by config.booleanFields)
  const defaultBooleanFields = [
      // logger_config
      "use_console",
      "use_file",
      "use_streaming",
      "use_rotating",
      "debug",
      "info",
      "warning",
      "error",
      "critical",

      // runtime_config
      "adaptive_batch",
      "clean_batch",
      "train",
      "save_to_file",
      "track_progress",
      "check_memory_usage",
      "cleanup_memory",
      "track_clean_files",
      "log_batch_info",
      "log_metrics",

      // tokenizer
      "rare_word_fallback",
      "subword_tokenization",
      "plot_merge_history",
      "tokenizer_status",

      // models
      "model_status"
    ];

  fetchDbAction({
    endpoint: config.endpoint ?? defaultEndpoint,
    action: config.action ?? 'select',
    table: config.table ?? '',
    data: config.data ?? {},
    whereClause: config.whereClause ?? '',
    whereParams: config.whereParams ?? [],
    selectColumns: config.selectColumns ?? '*',
    options: config.options ?? { limit: 'last' },
    method: config.method ?? 'POST',
    triggerElement: config.triggerElement ?? null,
    loadingElements: config.loadingElements ?? {},

    transformPayload: (payload) => payload,

    validateResponse: async (response) => {
      if (!response.ok) {
        const msg =
          getErrorMessageFromStatus(response.status, response.url) +
          '\n\nFailed to fetch data!';
        throw new Error(msg);
      }
      return response;
    },

    onSuccess: (result) => {
      console.log("Backend result:", result);

      if (!result.status) {
        showToastMessage('error', 'No configurations found.');
        return;
      }

      // Extract numeric keys (rows)
      const dataKeys = Object.keys(result).filter(k => /^\d+$/.test(k));
      if (dataKeys.length === 0) {
        showToastMessage('error', 'No configuration entries found.');
        return;
      }

      const row = result[dataKeys[0]];

      // ✅ Optional Boolean Conversion
      if (config.convertBooleans) {
        const formatBoolean = (val) =>
          val === 1 || val === true || val === "1" || val === "true" ? "✅" : "❌";

        const fieldsToConvert = Array.isArray(config.booleanFields)
          ? config.booleanFields
          : defaultBooleanFields;

        fieldsToConvert.forEach((key) => {
          if (key in row) {
            row[key] = formatBoolean(row[key]);
          }
        });

        console.log(
          "Boolean icons injected:",
          Object.keys(row).filter(k => k.endsWith("_icon"))
        );
      }

      populateFormFields(config.form, row);
    },

    onError: (error) => {
      const status = error.status || (error.response?.status ?? undefined);
      const message = error.message || 'Unknown error';
      handleAjaxError(error, status, message, showToastMessage);
    }
  });
}

/**
 * Assigns DB values to form fields automatically
 * Supports:
 * - Inputs, checkboxes, radios
 * - Native selects / Select2
 * - Textareas
 * - Non-form elements (<span>, <div>, etc.) by id or data-field
 *
 * @param {HTMLFormElement} form - The form element
 * @param {Object} data - Key-value pairs of field names and values
 */
export function populateFormFields(form, data) {
  if (!form || !data) {
    console.warn('populateFormFields: Missing form or data');
    return;
  }

  Object.entries(data).forEach(([key, value]) => {
    try {
      let field = form.querySelector(`[name="${key}"]`)
        || form.querySelector(`#${key}`)
        || document.getElementById(key)
        || form.querySelector(`[data-field="${key}"]`);

      if (!field) {
        console.debug(`populateFormFields: Field not found -> ${key}`);
        return;
      }

      const $field = $(field);
      const isSelect2 = $field.hasClass('select2-hidden-accessible');

      // Normalize null/undefined to empty string
      if (value === null || value === undefined) value = '';

      // Handle form controls
      if ('type' in field || field.tagName === 'SELECT' || field.tagName === 'TEXTAREA') {
        if (field.type === 'checkbox' || field.type === 'radio') {
          field.checked = value === 1 || value === true || value === "1" || value === "true";
          if (isSelect2) $field.trigger('change');
        } else if (field.type === 'number') {
          field.value = value !== '' ? Number(value) : '';
        } else if (field.tagName === 'SELECT') {
          handleSelectField(field, value, isSelect2);
        } else {
          field.value = (typeof value === 'object')
            ? JSON.stringify(value, null, 2)
            : value ?? '';
        }
      } else {
        // Handle non-form elements (span, div, p, etc.)
        field.textContent = value;
      }
    } catch (e) {
      console.error(`Error populating field ${key}:`, e);
    }
  });
}

/**
 * Handles select field population (both native and Select2)
 */
function handleSelectField(field, value, isSelect2) {
  const $field = $(field);
  const isMultiple = field.multiple;

  try {
    // Convert value to array if needed
    let values = [];
    if (isMultiple) {
      values = Array.isArray(value)
        ? value
        : typeof value === 'string'
          ? safeJsonParse(value) || value.split(',').map(v => v.trim())
          : [];
    } else {
      values = [value].filter(v => v !== null && v !== undefined);
    }

    const stringValues = values.map(String);

    // Set native select options
    Array.from(field.options).forEach(option => {
      option.selected = stringValues.includes(String(option.value));
    });

    // Update Select2 if present
    if (isSelect2) {
      $field.val(isMultiple ? stringValues : stringValues[0]).trigger('change');
    }
  } catch (e) {
    console.error(`Error handling select field ${field.name}:`, e);
    showToastMessage('warning', `Could not populate ${field.name}`);
  }
}

/**
 * Safely parse JSON with fallback
 */
function safeJsonParse(str) {
  try {
    return JSON.parse(str);
  } catch {
    return null;
  }
}
