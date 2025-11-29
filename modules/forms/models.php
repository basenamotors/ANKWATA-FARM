<div class="card p-3">
  <h6 class="search-find mb-3">Model Configuration</h6>
  <form id="modelConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="model_logger_id" class="form-label required-field">Logger ID</label>
        <input type="number" class="form-control" id="model_logger_id" name="logger_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="model_name" class="form-label required-field">Model Name</label>
        <input type="text" class="form-control" id="model_name" name="model_name" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="model_version" class="form-label required-field">Model Version</label>
        <input type="text" class="form-control" id="model_version" name="model_version" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="data_cleaner_id_model" class="form-label">Data Cleaner ID</label>
        <input type="number" class="form-control" id="data_cleaner_id_model" name="data_cleaner_id">
      </div>
    </div>

    <div class="mb-3">
      <label for="model_config" class="form-label required-field">Model Config (JSON)</label>
      <textarea class="form-control json-field" id="model_config" name="model_config" rows="8" required placeholder='{"hyperparameters": {"learning_rate": 0.001, "batch_size": 32}, "architecture": "transformer"}'></textarea>
    </div>

    <div class="mb-3 form-check form-switch">
      <input class="form-check-input" type="checkbox" id="model_status" name="model_status" checked>
      <label class="form-check-label" for="model_status">Model Status (Active)</label>
    </div>

    <div class="mb-3">
      <label for="modelMeta" class="form-label">Model Metadata (JSON)</label>
      <textarea class="form-control json-field" id="modelMeta" name="modelMeta" rows="4" placeholder='{"description": "Model configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetModelConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateModelConfigBtn">
        <span id="modelConfigSpinner">🚀 Save Model Config</span>
      </button>
    </div>
  </form>
</div>
