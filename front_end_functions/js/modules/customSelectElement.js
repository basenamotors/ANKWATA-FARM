export function loadLanguages(config = {}) {
  return fetch(config.url || './modules/languages.php')
    .then(res => {
      if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
      return res.text();
    })
    .then(html => {
      if (!config.container) {
        throw new Error("Container element not provided");
      }

      config.container.innerHTML = html;

      // Initialize dynamic inputs if elements exist
      const selectEl = document.querySelector(config.selectSelector || '#language');
      if (selectEl) {
        initDynamicTagInput({
          selectSelector: config.selectSelector || '#language',
          inputSelector: config.inputSelector || '#customLanguage',
          buttonSelector: config.buttonSelector || '#addLanguageBtn',
          placeholder: config.placeholder || "Select or add languages"
        });
      }
      return html; // Return the loaded HTML for potential further processing
    })
    .catch(err => {
      console.error("Error loading languages:", err);
      if (config.container) {
        config.container.innerHTML = `
          <div class="alert alert-danger">
            Failed to load languages: ${err.message}
            <button class="btn btn-sm btn-warning mt-2" onclick="window.location.reload()">
              Try Again
            </button>
          </div>`;
      }
      throw err; // Re-throw to allow calling code to handle the error
    });
}

export function initDynamicTagInput({ selectSelector, inputSelector, buttonSelector, placeholder = "Select or add", autoInit = true }) {
  const $select = $(selectSelector);
  const $input = $(inputSelector);
  const $button = $(buttonSelector);

  if (autoInit) {
    $select.select2({
      tags: true,
      placeholder: placeholder,
      width: '100%'
    });
  }

  // Enable/disable Add button based on input
  $input.on('input', function () {
    $button.prop('disabled', !$(this).val().trim());
  }).trigger('input');

  // Add custom entry when button is clicked
  $button.on('click', function () {
    const newVal = $.trim($input.val());
    if (!newVal) return;

    const exists = $select.find('option').filter(function () {
      return $(this).val().toLowerCase() === newVal.toLowerCase();
    }).length > 0;

    if (!exists) {
      const newOption = new Option(newVal, newVal, true, true);
      $select.append(newOption).trigger('change');
    } else {
      $select.val(newVal).trigger('change');
    }

    $input.val('').trigger('input');
  });
}
