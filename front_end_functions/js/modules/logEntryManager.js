//front_end_functions/js/tokenization/modules/logEntryManager.js

export class LogEntryManager {
  constructor(logPanel, config) {
    this.logPanel = logPanel;
    this.config = config;
    this.logCount = 0;
    this.levelCounts = { debug: 0, info: 0, warn: 0, error: 0 };
    this.autoScroll = true;
  }

  escapeHtml(str) {
    return typeof str === "string"
      ? str
          .replace(/&/g, "&amp;")
          .replace(/</g, "&lt;")
          .replace(/>/g, "&gt;")
          .replace(/"/g, "&quot;")
          .replace(/'/g, "&#039;")
      : "";
  }

  addLogEntry({ timestamp = new Date().toISOString(), level = "info", message = "" }) {
    let safeMessage = this.escapeHtml(message);
    if (safeMessage.length > this.config.maxMessageLength) {
      safeMessage = safeMessage.substring(0, this.config.maxMessageLength) + "… [truncated]";
    }
    if (!safeMessage.trim()) return;

    const entry = document.createElement("div");
    entry.className = "log-entry";
    entry.dataset.level = level;

    const time = new Date(timestamp).toLocaleTimeString();
    entry.innerHTML = `
      <span class="timestamp">[${time}]</span>
      <span class="${level.toLowerCase()}">${level.toUpperCase()}</span>
      <span>${safeMessage}</span>
    `;

    this._maintainMaxLogSize();
    this.logPanel.appendChild(entry);
    this.logCount++;
    this.levelCounts[level] = (this.levelCounts[level] || 0) + 1;

    if (this.autoScroll) this.logPanel.scrollTop = this.logPanel.scrollHeight;
    
    return this.getStatistics();
  }

  _maintainMaxLogSize() {
    if (this.logPanel.children.length >= this.config.maxLogs) {
      const removed = this.logPanel.firstChild;
      if (removed?.dataset.level) this.levelCounts[removed.dataset.level]--;
      logPanel.removeChild(removed);
      this.logCount--;
    }
  }

  clearLogs() {
    this.logPanel.innerHTML = "";
    this.logCount = 0;
    this.levelCounts = { debug: 0, info: 0, warn: 0, error: 0 };
    return this.getStatistics();
  }

  getStatistics() {
    return {
      total: this.logCount,
      levels: { ...this.levelCounts }
    };
  }

  exportLogs() {
    const logs = Array.from(this.logPanel.children).map((e) => e.textContent).join("\n");
    const blob = new Blob([logs], { type: "text/plain" });
    const url = URL.createObjectURL(blob);
    const a = document.createElement("a");
    a.href = url;
    a.download = `logs-${new Date().toISOString().split("T")[0]}.txt`;
    a.click();
    URL.revokeObjectURL(url);
    return this.logCount;
  }

  setAutoScroll(enabled) {
    this.autoScroll = enabled;
  }
}