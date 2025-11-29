<div class="card p-3">
  <h6 class="search-find mb-3">Tokenizer Configuration</h6>
  <form id="tokenizerConfigForm">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="tokenizer_logger_id" class="form-label required-field">Logger ID</label>
        <input type="number" class="form-control" id="tokenizer_logger_id" name="logger_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="tokenizer_storage_config_id" class="form-label required-field">Storage Config ID</label>
        <input type="number" class="form-control" id="tokenizer_storage_config_id" name="storage_config_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="tokenizer_runtime_config_id" class="form-label required-field">Runtime Config ID</label>
        <input type="number" class="form-control" id="tokenizer_runtime_config_id" name="runtime_config_id" required disabled>
      </div>
      <div class="col-md-6 mb-3">
        <label for="vocab_size" class="form-label required-field">Vocabulary Size</label>
        <input type="number" class="form-control" id="vocab_size" name="vocab_size" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="min_frequency" class="form-label required-field">Minimum Frequency</label>
        <input type="number" class="form-control" id="min_frequency" name="min_frequency" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="prune_threshold" class="form-label">Prune Threshold</label>
        <input type="number" class="form-control" id="prune_threshold" name="prune_threshold" value="0">
      </div>
      <div class="col-md-6 mb-3">
        <label for="tokenizer_patterns" class="form-label">Tokenizer Patterns</label>
        <input type="text" class="form-control" id="tokenizer_patterns" name="tokenizer_patterns" placeholder="\w+|\S">
      </div>
    </div>

    <div class="col-md-6 mb-3" id="tokenizer-language"></div>

    <div class="mb-3">
      <label for="custom_special_tokens" class="form-label">Custom Special Tokens (JSON)</label>
      <textarea class="form-control json-field" id="custom_special_tokens" name="custom_special_tokens" rows="4" placeholder='{"pad": "<pad>", "unk": "<unk>"}'></textarea>
    </div>

    <h6 class="mt-4 mb-3">Tokenizer Settings</h6>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="rare_word_fallback" name="rare_word_fallback">
          <label class="form-check-label" for="rare_word_fallback">Rare Word Fallback</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="subword_tokenization" name="subword_tokenization">
          <label class="form-check-label" for="subword_tokenization">Subword Tokenization</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="plot_merge_history" name="plot_merge_history">
          <label class="form-check-label" for="plot_merge_history">Plot Merge History</label>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="tokenizer_status" name="tokenizer_status" checked>
          <label class="form-check-label" for="tokenizer_status">Tokenizer Status (Active)</label>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="tokenizerMeta" class="form-label">Tokenizer Metadata (JSON)</label>
      <textarea class="form-control json-field" id="tokenizerMeta" name="tokenizerMeta" rows="4" placeholder='{"description": "Tokenizer configuration"}'></textarea>
    </div>

    <!-- Timestamp -->
    <div class="mt-3 text-muted small">
        Last updated: <span id="modified_at">Never</span>
        By: <span id="modified_by">Unknown</span>
    </div>

    <div class="d-flex justify-content-end">
      <button type="reset" class="btn btn-outline-secondary" id="resetTokenizerConfigBtn">Reset</button>
      <button type="submit" class="btn btn-outline-primary" id="updateTokenizerConfigBtn">
        <span id="tokenizerConfigSpinner">🚀 Save config</span>
      </button>
    </div>
  </form>
</div>