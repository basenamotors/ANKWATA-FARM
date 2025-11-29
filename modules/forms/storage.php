<div class="card p-3">
  <div class="card-header">
    <i class="bi bi-hdd me-2"></i> Storage Configuration
  </div>
  <div class="card-body">
    <form id="storageConfigForm">
      <div class="accordion" id="storageAccordion">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#storageBasic" aria-expanded="true">
              <i class="bi bi-exclamation-circle-fill text-primary me-2"></i> Basic Configuration
            </button>
          </h2>
          <div id="storageBasic" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="root_dir" class="form-label required-field">Root Directory</label>
                  <input type="text" class="form-control" id="root_dir" name="root_dir" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="log_dir" class="form-label required-field">Log Directory</label>
                  <input type="text" class="form-control" id="log_dir" name="log_dir" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="tokenizer_dir" class="form-label required-field">Tokenizer Directory</label>
                  <input type="text" class="form-control" id="tokenizer_dir" name="tokenizer_dir" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="plot_dir" class="form-label required-field">Plot Directory</label>
                  <input type="text" class="form-control" id="plot_dir" name="plot_dir" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="data_source_path" class="form-label required-field">Data Source Path</label>
                  <input type="text" class="form-control" id="data_source_path" name="data_source_path" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="data_output_path" class="form-label required-field">Data Output Path</label>
                  <input type="text" class="form-control" id="data_output_path" name="data_output_path" required>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#storageAdvanced">
              <i class="bi bi-gear-fill text-secondary me-2"></i> Advanced Configuration
            </button>
          </h2>
          <div id="storageAdvanced" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="runtime_config_path" class="form-label required-field">Runtime Config Path</label>
                  <input type="text" class="form-control" id="runtime_config_path" name="runtime_config_path" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="special_tokens_path" class="form-label required-field">Special Tokens Path</label>
                  <input type="text" class="form-control" id="special_tokens_path" name="special_tokens_path" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="progress_file_path" class="form-label required-field">Progress File Path</label>
                  <input type="text" class="form-control" id="progress_file_path" name="progress_file_path" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="metrics_file_path" class="form-label required-field">Metrics File Path</label>
                  <input type="text" class="form-control" id="metrics_file_path" name="metrics_file_path" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="vocab_file_name" class="form-label required-field">Vocabulary File Name</label>
                  <input type="text" class="form-control" id="vocab_file_name" name="vocab_file_name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="log_file_name" class="form-label required-field">Log File Name</label>
                  <input type="text" class="form-control" id="log_file_name" name="log_file_name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="progress_file_name" class="form-label required-field">Progress File Name</label>
                  <input type="text" class="form-control" id="progress_file_name" name="progress_file_name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="metrics_file_name" class="form-label required-field">Metrics File Name</label>
                  <input type="text" class="form-control" id="metrics_file_name" name="metrics_file_name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="executable_python_file" class="form-label required-field">Executable Python File</label>
                  <input type="text" class="form-control" id="executable_python_file" name="executable_python_file" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="port_file_name" class="form-label required-field">Logs Streaming Port File Name</label>
                  <input type="text" class="form-control" id="port_file_name" name="port_file_name" required>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#storageMeta">
              <i class="bi bi-info-circle-fill text-info me-2"></i> Metadata
            </button>
          </h2>
          <div id="storageMeta" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="mb-3">
                <label for="storageMeta" class="form-label">Storage Metadata (JSON)</label>
                <textarea class="form-control json-field" id="storageMeta" name="storageMeta" rows="4" placeholder='{"description": "Storage configuration for AetherLM"}'></textarea>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Timestamp -->
      <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
      </div>

      <div class="d-flex justify-content-end mt-4">
        <button type="reset" class="btn btn-outline-secondary" id="resetStorageConfigBtn">Reset</button>
        <button type="submit" class="btn btn-outline-primary" id="updateStorageConfigBtn">
          <span id="storageConfigSpinner">🚀 Save config</span>
        </button>
      </div>
    </form>
  </div>
</div>
