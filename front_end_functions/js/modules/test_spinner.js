// spinner.js - Keep as ES6 module
export function attachSpinner(element, text = '', small = false) {
    if (!element) return;
    
    const spinnerClass = small ? 'spinner-border-sm' : '';
    element.innerHTML = `
        <span class="spinner-border ${spinnerClass} me-2" role="status"></span>
        ${text}
    `;
}

export function removeSpinner(element) {
    if (!element) return;
    element.innerHTML = element.innerHTML.replace(/<span class="spinner-border[^>]*><\/span>\s*/, '');
}

export function createSpinner(text = '', small = false) {
    const container = document.createElement('span');
    attachSpinner(container, text, small);
    return container;
}