// front_end_functions/js/modules/detect_dirty_forms.js

/**
 * Checks if any form fields have been modified from their initial values
 * Supports: regular inputs, checkboxes, radios, selects (single/multiple), Select2 fields
 * @returns {boolean} True if any form field has changed
 */
export function isFormDirty() {
  const forms = document.querySelectorAll('form');
  if (!forms || forms.length === 0) return false;

  for (const form of forms) {
    // Initialize form tracking if not already done
    if (!form._initialValues) {
      initializeFormTracking(form);
    }

    // Check all fields for changes
    const fields = form.querySelectorAll('input, textarea, select');
    for (const field of fields) {
      if (hasFieldChanged(field, form._initialValues)) {
        return true;
      }
    }
  }

  return false;
}

/**
 * Initializes tracking of form field initial values
 */
function initializeFormTracking(form) {
  form._initialValues = {};
  const fields = form.querySelectorAll('input, textarea, select');
  
  for (const field of fields) {
    const fieldKey = getFieldKey(field);
    form._initialValues[fieldKey] = getFieldValue(field);
  }
}

/**
 * Generates a unique key for a form field
 */
function getFieldKey(field) {
  return field.id || field.name || `${field.tagName}-${field.type}-${Math.random().toString(36).slice(2, 8)}`;
}

/**
 * Gets the current value of a form field
 */
function getFieldValue(field) {
  // Handle Select2 fields
  if ($(field).hasClass('select2-hidden-accessible')) {
    return $(field).val() || [];
  }

  // Standard field handling
  if (field.type === 'checkbox' || field.type === 'radio') {
    return field.checked;
  }
  if (field.tagName === 'SELECT' && field.multiple) {
    return Array.from(field.selectedOptions).map(opt => opt.value);
  }
  return field.value;
}

/**
 * Checks if a field's value has changed from its initial value
 */
function hasFieldChanged(field, initialValues) {
  const fieldKey = getFieldKey(field);
  const currentValue = getFieldValue(field);
  const initialValue = initialValues[fieldKey];

  // Handle arrays (multi-select, Select2 multi)
  if (Array.isArray(initialValue)) {
    if (!Array.isArray(currentValue)) return true;
    if (initialValue.length !== currentValue.length) return true;
    return !initialValue.every((val, i) => val === currentValue[i]);
  }

  // Handle all other cases
  return currentValue !== initialValue;
}

export function resetFormDirtyTracking() {
  document.querySelectorAll('form').forEach(form => {
    if (form._initialValues) delete form._initialValues;
  });
}