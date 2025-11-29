<div class="card p-3">
  <h6 class="search-find mb-3">Access Control List</h6>
  <form id="accessControlConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="storage_config_id" class="form-label required-field">Storage Config ID</label>
        <input type="number" disabled required class="form-control" id="storage_config_id" name="storage_config_id" required>
      </div>
    </div>

    <div class="mb-3">
      <label for="allowed_origins" class="form-label required-field">Allowed Origins (JSON)</label>
      <textarea class="form-control json-field" id="allowed_origins" name="allowed_origins" rows="8" required placeholder='["http://localhost", "http://localhost/AetherLM"]'></textarea>
    </div>

    <div class="mb-3">
      <label for="blocked_origins" class="form-label">Blocked Origins (JSON)</label>
      <textarea class="form-control json-field" id="blocked_origins" name="blocked_origins" rows="8" placeholder='["http://localhost", "http://localhost/AetherLM"]'></textarea>
    </div>

    <div class="mb-3">
      <label for="accessControlMeta" class="form-label">Access Control Metadata (JSON)</label>
      <textarea class="form-control json-field" id="accessControlMeta" name="accessControlMeta" rows="4" placeholder='{"description": "Access Control configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetAccessControlConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateAccessControlConfigBtn">
        <span id="accessControlConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>
