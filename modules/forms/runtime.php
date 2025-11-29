<div class="card p-3">
  <h6 class="search-find mb-3">Runtime Configuration</h6>
  <form id="runtimeConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="logger_id" class="form-label required-field">Logger ID</label>
        <input type="number" class="form-control" id="logger_id" name="logger_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="memory_threshold" class="form-label required-field">Memory Threshold</label>
        <input type="number" step="0.1" class="form-control" id="memory_threshold" name="memory_threshold" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="adaptive_memory_threshold" class="form-label required-field">Adaptive Memory Threshold</label>
        <input type="number" step="0.1" class="form-control" id="adaptive_memory_threshold" name="adaptive_memory_threshold" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="memory_cleanup_interval" class="form-label required-field">Memory Cleanup Interval</label>
        <input type="number" class="form-control" id="memory_cleanup_interval" name="memory_cleanup_interval" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="progress_interval" class="form-label">Progress Interval</label>
        <input type="number" class="form-control" id="progress_interval" name="progress_interval" value="0">
      </div>
    </div>

    <h6 class="mt-4 mb-3">Runtime Settings</h6>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="adaptive_batch" name="adaptive_batch">
          <label class="form-check-label" for="adaptive_batch">Adaptive Batch</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="clean_batch" name="clean_batch">
          <label class="form-check-label" for="clean_batch">Clean Batch</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="train" name="train">
          <label class="form-check-label" for="train">Train</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="save_to_file" name="save_to_file">
          <label class="form-check-label" for="save_to_file">Save to File</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="track_progress" name="track_progress">
          <label class="form-check-label" for="track_progress">Track Progress</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="check_memory_usage" name="check_memory_usage">
          <label class="form-check-label" for="check_memory_usage">Check Memory Usage</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="cleanup_memory" name="cleanup_memory">
          <label class="form-check-label" for="cleanup_memory">Cleanup Memory</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="track_clean_files" name="track_clean_files">
          <label class="form-check-label" for="track_clean_files">Track Clean Files</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="log_batch_info" name="log_batch_info">
          <label class="form-check-label" for="log_batch_info">Log Batch Info</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="log_metrics" name="log_metrics">
          <label class="form-check-label" for="log_metrics">Log Metrics</label>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="runtimeMeta" class="form-label">Runtime Metadata (JSON)</label>
      <textarea class="form-control json-field" id="runtimeMeta" name="runtimeMeta" rows="4" placeholder='{"description": "Runtime configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetRuntimeConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateRuntimeConfigBtn">
        <span id="runtimeConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>
