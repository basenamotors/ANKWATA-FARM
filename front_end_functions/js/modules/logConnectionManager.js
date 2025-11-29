//front_end_functions/js/tokenization/modules/logConnectionManager.js

export class LogConnectionManager {
  constructor(config, logManager, statusUpdater) {
    this.config = config;
    this.logManager = logManager;
    this.statusUpdater = statusUpdater;
    
    this.eventSource = null;
    this.isConnected = false;
    this.isManuallyDisconnected = false;
    this.serverShutdownDetected = false;
    
    this.reconnectDelay = config.reconnect.initialDelay;
    this.reconnectAttempts = 0;
    this.lastMessageTime = Date.now();
    this.healthCheckInterval = null;
  }

  connect() {
    if (this.serverShutdownDetected && this.reconnectAttempts >= this.config.reconnect.maxAttempts) {
      this.statusUpdater("🟠 Server Offline", "text-primary");
      return;
    }

    this.isManuallyDisconnected = false;
    this.statusUpdater("Connecting...", "text-primary", true);

    this._closeExistingConnection();

    this.eventSource = new EventSource(this.config.endpoints.logStream);
    this.isConnected = true;

    let receivedValidData = false;
    let connectionEstablishedTime = null;

    this.eventSource.onopen = () => {
      connectionEstablishedTime = Date.now();
      this.statusUpdater("🔵 Establishing connection...", "text-info", true);
    };

    this.eventSource.onmessage = (event) => {
      this.lastMessageTime = Date.now();
      this._handleMessage(event, receivedValidData, (valid) => {
        receivedValidData = valid;
        if (valid) this._startHealthMonitoring();
      });
    };

    this.eventSource.onerror = () => {
      this._handleConnectionError(receivedValidData, connectionEstablishedTime);
    };
  }

  _closeExistingConnection() {
    if (this.eventSource) {
      this.eventSource.close();
      this.eventSource = null;
    }
  }

  _handleMessage(event, receivedValidData, onValidData) {
    try {
      const logData = JSON.parse(event.data);

      if (this._handleBackendError(logData)) {
        this._closeAndReconnect("❌ Backend connection failed");
        return;
      }

      if (!receivedValidData) {
        onValidData(true);
        this.statusUpdater("🟢 Connected", "text-success");
        this.logManager.addLogEntry({ level: "info", message: "🟢 Connected to log server" });
      }

      this.logManager.addLogEntry(logData);

      if (this._detectServerShutdown(logData.message)) {
        this.serverShutdownDetected = true;
        this.logManager.addLogEntry({ level: "warn", message: "Server shutdown detected. Stopping auto-reconnect." });
        setTimeout(() => {
          this.disconnect("🔵 Server Finished", "text-info");
        }, 1000);
      }
    } catch (e) {
      if (this._handleBackendError(event.data)) {
        this._closeAndReconnect("❌ Backend connection failed");
        return;
      }
      this.logManager.addLogEntry({ level: "error", message: "Raw: " + event.data.substring(0, 200) });
    }
  }

  _handleConnectionError(receivedValidData, connectionEstablishedTime) {
    if (this.isManuallyDisconnected) return;
    this._stopHealthMonitoring();

    if (!receivedValidData && connectionEstablishedTime) {
      const connTime = Date.now() - connectionEstablishedTime;
      if (connTime < 2000) this.reconnectAttempts = Math.max(0, this.reconnectAttempts - 0.5);
    }

    this.reconnectAttempts++;
    if (this.reconnectAttempts >= this.config.reconnect.maxAttempts) {
      this._handleMaxReconnectAttempts();
      return;
    }

    this._scheduleReconnect("Connection lost");
  }

  _handleMaxReconnectAttempts() {
    this.statusUpdater("🟠 Server Offline", "text-primary");
    this.logManager.addLogEntry({
      level: "error",
      message: `Maximum reconnection attempts (${this.config.reconnect.maxAttempts}) reached. Server appears to be offline.`
    });
    this.isConnected = false;
  }

  _scheduleReconnect(reason) {
    this.statusUpdater(
      `Reconnecting in ${this.reconnectDelay / 1000}s... (${this.reconnectAttempts}/${this.config.reconnect.maxAttempts})`,
      "text-danger",
      true
    );
    
    this.logManager.addLogEntry({
      level: "error",
      message: `${reason}. Reconnecting in ${this.reconnectDelay / 1000}s... (attempt ${this.reconnectAttempts}/${this.config.reconnect.maxAttempts})`
    });

    setTimeout(() => {
      if (!this.isManuallyDisconnected && this.reconnectAttempts < this.config.reconnect.maxAttempts) {
        this.connect();
        this.reconnectDelay = Math.min(this.reconnectDelay * 2, this.config.reconnect.maxDelay);
      }
    }, this.reconnectDelay);
  }

  _closeAndReconnect(reason) {
    this._closeExistingConnection();
    this._stopHealthMonitoring();
    this.reconnectAttempts++;
    
    if (this.reconnectAttempts >= this.config.reconnect.maxAttempts) {
      this._handleMaxReconnectAttempts();
      return;
    }

    this._scheduleReconnect(reason);
  }

  _detectServerShutdown(message) {
    return this.config.shutdownIndicators.some((x) =>
      message.toLowerCase().includes(x.toLowerCase())
    );
  }

  _handleBackendError(data) {
    try {
      const obj = typeof data === "string" ? JSON.parse(data) : data;
      if (obj.error) {
        this.logManager.addLogEntry({ level: "error", message: `${obj.error}` });
        return true;
      }
    } catch {
      /* ignore */
    }
    return false;
  }

  _startHealthMonitoring() {
    this.healthCheckInterval = setInterval(() => {
      if (Date.now() - this.lastMessageTime > this.config.healthCheck) {
        this.logManager.addLogEntry({ level: "warn", message: "No messages received recently, connection may be stale" });
        this.statusUpdater("⚠️ Connection Idle", "text-warning");
      }
    }, this.config.healthCheck);
  }

  _stopHealthMonitoring() {
    if (this.healthCheckInterval) {
      clearInterval(this.healthCheckInterval);
      this.healthCheckInterval = null;
    }
  }

  disconnect(statusText = "🔵 Disconnected", cssClass = "text-primary") {
    this.isManuallyDisconnected = true;
    this._closeExistingConnection();
    this._stopHealthMonitoring();
    this.isConnected = false;
    this.statusUpdater(statusText, cssClass);
    this.logManager.addLogEntry({ level: "info", message: statusText });
  }

  manualReconnect() {
    this.serverShutdownDetected = false;
    this.reconnectAttempts = 0;
    this.reconnectDelay = this.config.reconnect.initialDelay;
    this.isManuallyDisconnected = false;
    
    this.logManager.addLogEntry({ level: "info", message: "Manual reconnection initiated..." });
    this.connect();
  }

  getConnectionState() {
    return {
      isConnected: this.isConnected,
      reconnectAttempts: this.reconnectAttempts,
      maxAttempts: this.config.reconnect.maxAttempts
    };
  }
}