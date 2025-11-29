<div class="card p-3">
  <h6 class="search-find mb-3">File Handler Configuration</h6>
  <form id="fileHandlerConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="fh_logger_id" class="form-label required-field">Logger ID</label>
        <input type="number" class="form-control" id="fh_logger_id" name="logger_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="storage_config_id_fh" class="form-label required-field">Storage Config ID</label>
        <input type="number" class="form-control" id="storage_config_id_fh" name="storage_config_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="runtime_config_id" class="form-label required-field">Runtime Config ID</label>
        <input type="number" class="form-control" id="runtime_config_id" name="runtime_config_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="chunk_size" class="form-label required-field">Chunk Size</label>
        <input type="number" class="form-control" id="chunk_size" name="chunk_size" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="min_chunk_size" class="form-label required-field">Min Chunk Size</label>
        <input type="number" class="form-control" id="min_chunk_size" name="min_chunk_size" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="max_chunk_size" class="form-label required-field">Max Chunk Size</label>
        <input type="number" class="form-control" id="max_chunk_size" name="max_chunk_size" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="file_size_limit" class="form-label required-field">File Size Limit</label>
        <input type="number" class="form-control" id="file_size_limit" name="file_size_limit" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="size_unit" class="form-label required-field">Size Unit</label>
        <select class="form-select" id="size_unit" name="size_unit" required>
          <option value="KB">KB</option>
          <option value="MB">MB</option>
          <option value="GB">GB</option>
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label for="file_extension" class="form-label required-field">File Extensions (JSON)</label>
      <textarea class="form-control json-field" id="file_extension" name="file_extension" rows="4" required placeholder='[".txt", ".json"]'></textarea>
    </div>

    <div class="mb-3">
      <label for="filehandlerMeta" class="form-label">File Handler Metadata (JSON)</label>
      <textarea class="form-control json-field" id="filehandlerMeta" name="filehandlerMeta" rows="4" placeholder='{"description": "File handler configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetFileHandlerConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateFileHandlerConfigBtn">
        <span id="fileHandlerConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>
