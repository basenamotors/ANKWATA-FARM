<div class="card p-3">
  <h6 class="search-find mb-3">Logger Configuration</h6>
  <form id="loggerConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="storage_config_id" class="form-label required-field">Storage Config ID</label>
        <input type="number" disabled class="form-control" id="storage_config_id" name="storage_config_id" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="log_level" class="form-label required-field">Log Level</label>
        <select class="form-select" id="log_level" name="log_level" required>
          <option value="DEBUG">DEBUG</option>
          <option value="INFO">INFO</option>
          <option value="WARNING">WARNING</option>
          <option value="ERROR">ERROR</option>
          <option value="CRITICAL">CRITICAL</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="streaming_queue_size" class="form-label required-field">Streaming queue size</label>
        <input type="number" class="form-control" id="streaming_queue_size" name="streaming_queue_size" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="max_log_size_mb" class="form-label required-field">Max Log Size (MB)</label>
        <input type="number" class="form-control" id="max_log_size_mb" name="max_log_size_mb" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="backup_count" class="form-label required-field">Backup Count</label>
        <input type="number" class="form-control" id="backup_count" name="backup_count" required>
      </div>
    </div>

    <h6 class="mt-4 mb-3">Log Level Settings</h6>
    <div class="row">
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="use_console" name="use_console">
          <label class="form-check-label" for="use_console">Console Logging</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="use_streaming" name="use_streaming">
          <label class="form-check-label" for="use_streaming">Use Streaming</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="use_file" name="use_file">
          <label class="form-check-label" for="use_file">Write logs to File</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="use_rotating" name="use_rotating">
          <label class="form-check-label" for="use_rotating">Use Rotating</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="debug" name="debug">
          <label class="form-check-label" for="debug">Debug</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="info" name="info">
          <label class="form-check-label" for="info">Info</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="warning" name="warning">
          <label class="form-check-label" for="warning">Warning</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="error" name="error">
          <label class="form-check-label" for="error">Error</label>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="critical" name="critical">
          <label class="form-check-label" for="critical">Critical</label>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="loggerMeta" class="form-label">Logger Metadata (JSON)</label>
      <textarea class="form-control json-field" id="loggerMeta" name="loggerMeta" rows="4" placeholder='{"description": "Logger configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetLoggerConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateLoggerConfigBtn">
        <span id="loggerConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>
