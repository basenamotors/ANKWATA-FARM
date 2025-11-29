// front_end_functions/js/modules/form_utils.js

/**
 * Resolve form or div container.
 */
export function resolveFormElement(selector) {
  if (!selector) return null;
  const element = typeof selector === 'string' ? document.querySelector(selector) : selector;

  if (!element) {
    console.warn(`Form element not found: ${selector}`);
    return null;
  }

  if (!['FORM', 'DIV'].includes(element.tagName)) {
    console.warn(`Form container must be a FORM or DIV, got: ${element.tagName}`);
    return null;
  }

  return element;
}

/**
 * Extracts inputs from a form or div container.
 */
export function getFormInputs(formSelector) {
  const formElement = resolveFormElement(formSelector);
  return formElement ? Array.from(formElement.querySelectorAll('input, select, textarea')) : [];
}

/**
 * Builds a payload object from form inputs.
 */
export function buildPayload(inputs = []) {
  const payload = {};
  inputs.forEach(input => {
    const name = input.name?.trim();
    if (!name) return;
    payload[name] = input.type === 'checkbox'
      ? input.checked
      : input.multiple
        ? Array.from(input.selectedOptions).map(opt => opt.value)
        : input.value || null;
  });
  return payload;
}
