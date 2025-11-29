//front_end_functions/js/tokenization/modules/statusManager.js

import { attachSpinner, removeSpinner } from './spinner.js';
export class StatusManager {
  constructor(statusElement) {
    this.statusElement = statusElement;
  }

  update(text, cssClass = "", withSpinner = false) {
    this.clear();
    if (withSpinner) attachSpinner(this.statusElement, text);
    else this.statusElement.textContent = text;
    if (cssClass) this.statusElement.classList.add(cssClass);
  }

  clear() {
    removeSpinner(this.statusElement);
    this.statusElement.textContent = "";
    this.statusElement.className = "";
  }
}