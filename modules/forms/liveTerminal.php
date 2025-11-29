<div class="card p-3 mb-3">
    <div id="controls" class="mb-2">
        <button type="button" class="btn btn-light me-2 btn-outline-primary" id="connectBtn">Disconnect</button>
        <button type="button" class="btn btn-light me-2 btn-outline-primary" id="clearBtn">Clear</button>
        <button type="button" id="exportBtn" class="btn btn-light me-2 btn-outline-primary">Export</button>
        <span>Status: <span class="text-danger" id="logStreamingStatus"></span></span>
    </div>
    <!-- Stats Cards -->
    <div class="row g-3">
      <div class="col-6 col-sm-4 col-md-3">
        <div class="card stats-card text-white bg-primary">
          <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="card-title mb-0 small">Total Logs:</h6>
                <span id="totalLogs" class="h6 mb-0 fw-bold">0</span>
              </div>
              <i class="bi bi-list fs-5"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3">
        <div class="card text-white bg-info">
          <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="card-title mb-0 small">Info:</h6>
                <span id="infoCount" class="h6 mb-0 fw-bold">0</span>
              </div>
              <i class="bi bi-info-circle fs-5"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3">
        <div class="card text-dark bg-warning">
          <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="card-title mb-0 small">Warnings:</h6>
                <span id="warnCount" class="h6 mb-0 fw-bold">0</span>
              </div>
              <i class="bi bi-exclamation-triangle fs-5"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-sm-4 col-md-3">
        <div class="card text-white bg-danger">
          <div class="card-body py-2">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="card-title mb-0 small">Errors:</h6>
                <span id="errorCount" class="h6 mb-0 fw-bold">0</span>
              </div>
              <i class="bi bi-exclamation-circle fs-5"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-1 mb-1">
        <div class="col-12">
            <div class="card">
                <div class="card-body py-2">
                    <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" id="remoteTerminal" name="remoteTerminal">
                        <label class="form-check-label" for="remoteTerminal">Remote terminal</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="logPanel" class="border rounded p-2 bg-dark text-light"></div>
</div>