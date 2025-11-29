//front_end_functions/js/tokenization/modules/keyboardShortcuts.js

export class KeyboardShortcutsManager {
  constructor(actions) {
    this.actions = actions;
  }

  setup() {
    document.addEventListener("keydown", (e) => {
      if (e.ctrlKey || e.metaKey) {
        switch (e.key) {
          case "k":
            e.preventDefault();
            this.actions.clearLogs();
            break;
          case "l":
            e.preventDefault();
            this.actions.toggleConnection();
            break;
          case "e":
            e.preventDefault();
            this.actions.exportLogs();
            break;
          case "r":
            e.preventDefault();
            this.actions.manualReconnect();
            break;
        }
      }
    });
  }
}