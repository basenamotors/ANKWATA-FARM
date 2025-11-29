// front_end_functions/js/modules/spinner.js

function resolveElement(target) {
  if (!target) return null;
  return (typeof target === "string")
    ? document.querySelector(target)
    : target; // assume it's a DOM node
}

/**
 * Attach a spinner to a target element.
 * - Prevents multiple spinners from stacking.
 * - Saves original content and restores on removal.
 * - Supports inline mode and size variants.
 * - Adds accessibility attributes.
 *
 * @param {string|HTMLElement} target - Selector or DOM element
 * @param {string} [message="Loading..."] - Optional message to show
 * @param {object} [options] - Extra options
 * @param {boolean} [options.inline=true] - Inline vs block spinner
 * @param {string} [options.size="md"] - Size variant: sm | md | lg
 */
export function attachSpinner(target, message = "Loading...", { inline = true, size = "sm" } = {}) {
  const element = resolveElement(target);
  if (!element) return;

  // Prevent duplicate spinners
  if (element.querySelector(".spinner-temp")) return;

  // Save original content once
  if (!element.dataset.originalContent) {
    element.dataset.originalContent = element.innerHTML;
  }

  const spinnerHTML = `
    <div class="spinner-temp spinner-${size} ${inline ? "spinner-inline" : ""}" 
         role="status" aria-live="polite">
      <svg class="spinner-icon" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.5 2.9375V5.5625M9.5 13.4375V16.0625M2.9375 9.5H5.5625M13.4375 9.5H16.0625"
          stroke="currentColor" stroke-width="1.875" stroke-linecap="round"></path>
        <path d="M4.86011 4.85961L6.71627 6.71577M12.2847 12.2842L14.1409 14.1404M4.86011 14.1404L6.71627 12.2842M12.2847 6.71577L14.1409 4.85961"
          stroke="currentColor" stroke-width="1.875" stroke-linecap="round"></path>
      </svg>
      ${message ? `<span class="spinner-text">${message}</span>` : ""}
    </div>
  `;

  element.innerHTML = spinnerHTML;
}

/**
 * Remove spinner from a target element.
 * - Restores original content if saved.
 */
export function removeSpinner(target) {
  const element = resolveElement(target);
  if (!element) return;

  if (element.dataset.originalContent) {
    element.innerHTML = element.dataset.originalContent;
    delete element.dataset.originalContent;
  } else {
    const spinner = element.querySelector(".spinner-temp");
    if (spinner) spinner.remove();
  }
}
