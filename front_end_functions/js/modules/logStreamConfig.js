//front_end_functions/js/tokenization/modules/logStreamConfig.js

export const LOG_STREAM_CONFIG = {
  maxLogs: 1000,
  reconnect: { maxAttempts: 10, initialDelay: 1000, maxDelay: 3000 },
  healthCheck: 30000,
  shutdownIndicators: [
    "streaming server stopped",
    "shutting down streaming server...",
  ],
  maxMessageLength: 5000,
  endpoints: {
    logStream: "back_end_functions/auth/log_proxy.php",
    tokenization: "back_end_functions/tokenization/startTokenization.php"
  }
};