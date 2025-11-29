<div class="card p-3">
  <h6 class="search-find mb-3">Data Cleaner Configuration</h6>
  <form id="cleanerConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="cleaner_logger_id" class="form-label required-field">Logger ID</label>
        <input type="number" class="form-control" id="cleaner_logger_id" name="logger_id" required disabled>
      </div>
    </div>

    <div class="mb-3">
      <label for="data_cleaner_config" class="form-label required-field">Data Cleaner Config (JSON)</label>
      <textarea class="form-control json-field" id="data_cleaner_config" name="data_cleaner_config" rows="8" required placeholder='{"clean_html": true, "normalize_whitespace": true}'></textarea>
    </div>

    <div class="mb-3">
      <label for="cleanerMeta" class="form-label">Cleaner Metadata (JSON)</label>
      <textarea class="form-control json-field" id="cleanerMeta" name="cleanerMeta" rows="4" placeholder='{"description": "Data cleaner configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetCleanerConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateCleanerConfigBtn">
        <span id="cleanerConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>
