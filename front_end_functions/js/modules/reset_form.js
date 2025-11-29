/**
 * Resets form fields with multiple modes and plugin support
 * @param {string} containerId - ID of the form container
 * @param {object} options - Configuration options
 * @param {string[]} options.validationClasses - Additional validation classes to remove
 * @param {'blank'|'defaults'|'initial'} options.mode - Reset mode (default: 'blank')
 * @param {boolean} options.skipValidationReset - Skip validation state cleanup
 * @param {boolean} options.triggerEvents - Whether to dispatch reset events
 */
export function resetForm(containerId, {
  validationClasses = [],
  mode = 'blank',
  skipValidationReset = false,
  triggerEvents = true
} = {}) {
  const container = document.getElementById(containerId);
  if (!container) return;

  // Dispatch pre-reset event
  if (triggerEvents) {
    container.dispatchEvent(new CustomEvent('form:reset:before', {
      bubbles: true,
      detail: { mode }
    }));
  }

  // Get all resettable fields
  const fields = Array.from(container.querySelectorAll('input, textarea, select'))
    .filter(field => !field.hasAttribute('data-no-reset'));

  // Process each field
  fields.forEach(field => {
    if (triggerEvents) {
      field.dispatchEvent(new CustomEvent('form:reset:field:before', {
        bubbles: true,
        detail: { field, mode }
      }));
    }

    // Handle different reset modes
    switch (mode) {
      case 'defaults':
        resetToDefaults(field);
        break;
      
      case 'initial':
        resetToInitial(field, container);
        break;
      
      case 'blank':
      default:
        resetToBlank(field);
    }

    // Clean up validation state unless skipped
    if (!skipValidationReset) {
      resetValidation(field, validationClasses);
    }

    // Dispatch field reset complete event
    if (triggerEvents) {
      field.dispatchEvent(new CustomEvent('form:reset:field:after', {
        bubbles: true,
        detail: { field, mode }
      }));
    }
  });

  // Handle special plugin cases
  resetPlugins(container, mode);

  // Remove Bootstrap validation marker
  if (!skipValidationReset) {
    container.classList.remove('was-validated');
  }

  // Dispatch completion event
  if (triggerEvents) {
    container.dispatchEvent(new CustomEvent('form:reset:after', {
      bubbles: true,
      detail: { mode }
    }));
  }
}

// Helper functions
function resetToBlank(field) {
  switch (true) {
    case field.type === 'checkbox':
    case field.type === 'radio':
      field.checked = false;
      break;
    
    case field.tagName === 'SELECT' && field.multiple:
      Array.from(field.options).forEach(option => {
        option.selected = false;
      });
      break;
    
    case field.type === 'file':
      field.value = '';
      if (field.value = '') break; // Special handling for IE
      field.type = ''; field.type = 'file'; // Force reset
      break;
    
    default:
      field.value = '';
  }
}

function resetToDefaults(field) {
  const defaultValue = field.dataset.default;
  
  if (defaultValue !== undefined) {
    switch (true) {
      case field.type === 'checkbox':
        field.checked = defaultValue === 'true';
        break;
      
      case field.type === 'radio':
        if (field.value === defaultValue) {
          field.checked = true;
        }
        break;
      
      case field.tagName === 'SELECT' && field.multiple:
        const defaultValues = JSON.parse(defaultValue);
        Array.from(field.options).forEach(option => {
          option.selected = defaultValues.includes(option.value);
        });
        break;
      
      default:
        field.value = defaultValue;
    }
  } else {
    resetToBlank(field);
  }
}

function resetToInitial(field, container) {
  if (!container._initialValues) return resetToBlank(field);
  
  const initialValue = container._initialValues[field.id];
  if (initialValue === undefined) return;

  switch (true) {
    case field.type === 'checkbox':
    case field.type === 'radio':
      field.checked = initialValue;
      break;
    
    case field.tagName === 'SELECT' && field.multiple:
      Array.from(field.options).forEach(option => {
        option.selected = initialValue.includes(option.value);
      });
      break;
    
    default:
      field.value = initialValue;
  }
}

function resetValidation(field, extraClasses) {
  // Remove standard validation classes
  field.classList.remove('is-valid', 'is-invalid');
  
  // Remove ARIA attributes
  field.removeAttribute('aria-invalid');
  field.removeAttribute('aria-describedby');
  
  // Remove custom validation classes
  extraClasses.forEach(cls => {
    if (field.classList.contains(cls)) {
      field.classList.remove(cls);
    }
  });
  
  // Clear validation messages
  const feedbackId = field.getAttribute('aria-describedby');
  if (feedbackId) {
    const feedbackElement = document.getElementById(feedbackId);
    if (feedbackElement) feedbackElement.textContent = '';
  }
}

function resetPlugins(container, mode) {
  // Handle Select2
  container.querySelectorAll('[data-select2-id]').forEach(field => {
    if (field._select2) {
      $(field).val(mode === 'initial' && container._initialValues?.[field.id] 
        ? container._initialValues[field.id] 
        : null
      ).trigger('change');
    }
  });
  
  // Handle Flatpickr
  container.querySelectorAll('[data-fp]').forEach(field => {
    if (field._flatpickr) {
      field._flatpickr.clear();
    }
  });
  
  // Add other plugin resets as needed
}

/**
 * Captures initial form state for 'initial' mode resets
 * @param {string} containerId - ID of the form container
 */
export function captureInitialState(containerId) {
  const container = document.getElementById(containerId);
  if (!container) return;

  container._initialValues = {};
  
  container.querySelectorAll('input, textarea, select').forEach(field => {
    container._initialValues[field.id] = 
      field.type === 'checkbox' || field.type === 'radio' 
        ? field.checked 
        : field.multiple 
          ? Array.from(field.selectedOptions).map(opt => opt.value)
          : field.value;
  });
}