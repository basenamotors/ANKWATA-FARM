export function setupTabPersistence() {
    const mainNavLinks = document.querySelectorAll('.side-menu .nav-link');
    const allNestedLinks = document.querySelectorAll('.nav-tabs .nav-link');

    // Restore from localStorage
    const lastMain = localStorage.getItem('lastMainTab');
    const lastNested = localStorage.getItem('lastNestedTab');

    // Function to manually show tabs
    function showTabManually(tabTrigger) {
        if (!tabTrigger) return;
        
        const targetId = tabTrigger.getAttribute('data-bs-target');
        const targetPane = document.querySelector(targetId);
        
        if (!targetPane) return;
        
        // Remove active classes from all tabs in the same group
        const tabGroup = tabTrigger.closest('.nav') || tabTrigger.closest('[role="tablist"]');
        if (tabGroup) {
            tabGroup.querySelectorAll('.nav-link').forEach(tab => tab.classList.remove('active'));
        }
        
        // Remove active classes from all panes in the same group
        const paneGroup = targetPane.parentElement;
        if (paneGroup) {
            paneGroup.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active', 'show'));
        }
        
        // Add active classes to selected tab and pane
        tabTrigger.classList.add('active');
        targetPane.classList.add('active', 'show');
        
        return targetId;
    }

    // Initialize tabs on page load
    if (lastMain) {
        const mainTrigger = document.querySelector(`.side-menu .nav-link[data-bs-target="${lastMain}"]`);
        if (mainTrigger) {
            showTabManually(mainTrigger);
            
            // Small delay to ensure main tab is visible
            setTimeout(() => {
                if (lastNested) {
                    const nestedTrigger = document.querySelector(`${lastMain} .nav-tabs .nav-link[data-bs-target="${lastNested}"]`);
                    if (nestedTrigger) {
                        showTabManually(nestedTrigger);
                    } else {
                        // Activate first nested tab as fallback but don't save it
                        const firstNested = document.querySelector(`${lastMain} .nav-tabs .nav-link`);
                        if (firstNested) showTabManually(firstNested);
                    }
                } else {
                    // Activate first nested tab if none saved, but don't save it
                    const firstNested = document.querySelector(`${lastMain} .nav-tabs .nav-link`);
                    if (firstNested) showTabManually(firstNested);
                }
            }, 100);
        }
    }

    // Handle Main Tab Clicks
    mainNavLinks.forEach(mainLink => {
        mainLink.addEventListener('click', function () {
            const targetId = this.getAttribute('data-bs-target');
            
            // Save main tab state
            localStorage.setItem('lastMainTab', targetId);
            
            // Show the main tab
            showTabManually(this);
            
            // Check if we have a saved nested tab for this main tab
            const lastNested = localStorage.getItem('lastNestedTab');
            if (lastNested) {
                const nestedTrigger = document.querySelector(`${targetId} .nav-tabs .nav-link[data-bs-target="${lastNested}"]`);
                if (nestedTrigger) {
                    // Small delay to ensure main tab is visible
                    setTimeout(() => {
                        showTabManually(nestedTrigger);
                    }, 50);
                    return; // Exit if we found and activated a saved nested tab
                }
            }
            
            // If no saved nested tab or it doesn't exist, activate first nested tab but DON'T save it
            setTimeout(() => {
                const firstNested = document.querySelector(`${targetId} .nav-tabs .nav-link`);
                if (firstNested) {
                    showTabManually(firstNested);
                    // Don't save the first nested tab automatically
                }
            }, 50);
        });
    });

    // Handle Nested Tab Clicks
    allNestedLinks.forEach(link => {
        link.addEventListener('click', function () {
            const targetId = this.getAttribute('data-bs-target');
            
            // Save nested state
            localStorage.setItem('lastNestedTab', targetId);
            
            // Show the nested tab
            showTabManually(this);
        });
    });
}

export function initializeDataTable(buttonSelector, tableSelector, url, extraData = {}) {
  $(document).on('click', buttonSelector, function() {
    const $btn = $(this).addClass('loading');
    const $table = $(tableSelector);

    // Show loading spinner in the table container
    $table.html('<div class="text-center py-4"><div class="spinner-border text-primary"></div></div>');

    $.ajax({
      url: url,
      type: 'POST',
      data: { buttonId: $(this).attr('id'), ...extraData },
      dataType: 'json',
      success: function(response) {
        if ($.fn.DataTable.isDataTable(tableSelector)) {
          $table.DataTable().destroy();
          $table.empty();
        }

        if (response.columns && response.data) {
          $table.DataTable({
            data: response.data,
            columns: response.columns,
            responsive: true,
            pageLength: 10,
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            order: [[0, 'desc']]
          });
        } else {
          $table.html('<p class="text-muted">No data available</p>');
        }
      },
      error: handleAjaxError || function(xhr, status, error) {
        console.error('AJAX Error:', error);
        $table.html(`<p class="text-danger">Error fetching data: ${error}</p>`);
      },
      complete: function() {
        $btn.removeClass('loading'); // Remove loading class from button
        $table.find('.spinner-border').remove(); // Remove spinner inside table container
      }
    });
  });
}

export async function handleAjaxError(xhrOrResponse, status, error, callback = showToastMessage, url = '') {
  const { message, status: finalStatus } = createErrorMessage(xhrOrResponse, status, error, url);

  if (typeof callback === 'function') {
    callback('error', message);
  } else {
    console.warn("Callback is not a function:", callback);
  }

  console.error('AJAX Error:', {
    status: finalStatus,
    error,
    url,
    source: xhrOrResponse
  });
}

export function createErrorMessage(xhrOrResponse, status, error, url = '') {
  let statusCode, statusText;
  let message = 'An error occurred';

  if (xhrOrResponse instanceof Response) {
    statusCode = xhrOrResponse.status;
    statusText = xhrOrResponse.statusText;
    url = xhrOrResponse.url || '';
    message = getErrorMessageFromStatus(statusCode, url);
  } else if (xhrOrResponse?.responseJSON?.message) {
    message = xhrOrResponse.responseJSON.message;
  } else if (status === 'timeout' || error?.name === 'AbortError') {
    message = '⏱️ Request timed out. Please check your internet connection or try again.';
    statusCode = 408;
  } else if (xhrOrResponse?.status >= 400 && xhrOrResponse?.status < 600) {
    statusCode = xhrOrResponse.status;
    statusText = xhrOrResponse.statusText;
    url = xhrOrResponse.responseURL || '';
    message = getErrorMessageFromStatus(statusCode, url);
  } else if (typeof error === 'string' && error.trim().startsWith('<')) {
    message = '🚫 Unexpected HTML response from the server. You may be accessing the wrong endpoint.';
  } else if (error?.message?.includes('Failed to fetch')) {
    message = '🌐 Network failure or CORS issue. Unable to reach the server.';
    statusCode = 0;
  } else {
    message = error?.message || error || 'Unknown error occurred during request.';
  }

  return {
    message,
    status: statusCode || status || 0,
    url,
  };
}

export function getErrorMessageFromStatus(status, url = '') {
  const messages = {
    400: `400 (Bad Request)\nThe server could not understand the request.`,
    401: `401 (Unauthorized)\nAuthentication is required for ${url}.`,
    403: `403 (Forbidden)\nYou don’t have permission to access ${url}.`,
    404: `404 (Not Found)\nThe requested URL was not found on this server.\nCheck that ${url} exists and is correctly routed.`,
    422: `422 (Unprocessable Entity)\nThe server understands the request but couldn't process it.`,
    429: `429 (Too Many Requests)\nYou're being rate-limited. Please wait and try again.`,
    500: `500 (Internal Server Error)\nThe server encountered an unexpected condition.`,
    503: `503 (Service Unavailable)\nServer is temporarily unavailable. Please try again later.`
  };
  return messages[status] || `${status} (HTTP Error)\nSomething went wrong while accessing ${url}.`;
}

export function showToastMessage(type, message, toastId = 'messageToast') {
    const types = {
        success: { icon: 'check-circle', color: 'success' },
        error: { icon: 'x-circle', color: 'danger' },
        warning: { icon: 'exclamation-circle', color: 'warning' },
        info: { icon: 'info-circle', color: 'info' }
    };

    if (!types[type]) {
      console.error(`Unknown toast type "${type}".`);
      return;
    }

    const config = types[type];
    const $toast = $(`#${toastId}`);

    if (!$toast.length) {
        console.error(`Toast with ID "${toastId}" not found.`);
        return;
    }

    // Remove previous contextual classes
    const contextClasses = ['text-success', 'text-danger', 'text-warning', 'text-info'];
    $toast.find('#toastTitle, #toastBody').removeClass(contextClasses.join(' '));

    // Apply new classes and content
    $toast.find('#toastIcon').html(`<i class="bi bi-${config.icon} text-${config.color}"></i>`);
    $toast.find('#toastTitle')
        .text(type.charAt(0).toUpperCase() + type.slice(1))
        .addClass(`text-${config.color}`);
    $toast.find('#toastBody')
        .html(message)
        .addClass(`text-${config.color}`);

    const toast = new bootstrap.Toast($toast[0]);
    toast.show();
}

/**
 * Validates form fields with support for:
 * - Regular inputs
 * - Select2-enhanced selects
 * - Custom required fields
 * - Better error reporting
 * @param {string|HTMLElement} formSelector - Form selector or element
 * @param {Array} requiredFields - Optional array of required fields
 * @returns {boolean} - True if form is valid
 */
export function validateForm(formSelector = 'form', requiredFields = []) {
  // Get form element
  const form = typeof formSelector === 'string' 
    ? document.querySelector(formSelector) 
    : formSelector;
  
  if (!form) {
    const msg = `Form "${formSelector}" not found.`;
    showToastMessage?.('error', msg);
    console.error(msg);
    return false;
  }

  // Auto-detect required fields if none provided
  if (!requiredFields.length) {
    requiredFields = Array.from(form.querySelectorAll(`
      input[required]:not([type="hidden"]), 
      textarea[required], 
      select[required],
      .required-field
    `));
  }

  form.classList.add('was-validated');
  let isValid = true;
  let firstInvalidField = null;

  requiredFields.forEach(field => {
    const $field = $(field);
    const isSelect2 = $field.hasClass('select2-hidden-accessible');
    const isMultiSelect = field.tagName === 'SELECT' && field.multiple;

    // Special handling for Select2 fields
    if (isSelect2) {
      const select2Container = $field.next('.select2-container');
      if (isMultiSelect && !$field.val()?.length) {
        select2Container.addClass('is-invalid').removeClass('is-valid');
        if (!firstInvalidField) firstInvalidField = select2Container[0];
        isValid = false;
        return;
      } else if (!$field.val()) {
        select2Container.addClass('is-invalid').removeClass('is-valid');
        if (!firstInvalidField) firstInvalidField = select2Container[0];
        isValid = false;
        return;
      }
      select2Container.removeClass('is-invalid').addClass('is-valid');
      return;
    }

    // Standard validation for other fields
    if (!field.checkValidity()) {
      field.classList.add('is-invalid');
      field.classList.remove('is-valid');
      
      if (!firstInvalidField) {
        firstInvalidField = field;
        const fieldName = getFieldLabel(field);
        showToastMessage?.('warning', `Please check: ${fieldName}`);
      }
      
      isValid = false;
    } else {
      field.classList.remove('is-invalid');
      field.classList.add('is-valid');
    }
  });

  if (!isValid) {
    showToastMessage?.('error', 'Please fill all required fields correctly.');
    scrollToField(firstInvalidField);
  }

  return isValid;
}

/**
 * Gets human-readable field label
 */
function getFieldLabel(field) {
  return field.getAttribute('data-label') || 
         field.placeholder || 
         field.name?.replace(/_/g, ' ') || 
         field.id?.replace(/-/g, ' ') || 
         'this field';
}

/**
 * Smooth scroll to invalid field
 */
function scrollToField(field) {
  if (!field) return;
  
  field.focus({ preventScroll: true });
  field.scrollIntoView({ 
    behavior: 'smooth', 
    block: 'center' 
  });
  
  // Special handling for Select2
  if ($(field).hasClass('select2-container')) {
    $(field).find('.select2-selection').focus();
  }
}
