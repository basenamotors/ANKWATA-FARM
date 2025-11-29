<div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
    <!-- Mobile Experience Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-phone text-purple me-2"></i> Mobile Experience</h4>
        <div class="btn-group">
            <button class="btn btn-purple btn-sm">
                <i class="bi bi-download me-1"></i> Download App
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-qr-code me-1"></i> Share QR Code
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-gear me-1"></i> App Settings
            </button>
        </div>
    </div>

    <!-- Mobile Experience Sub-tabs -->
    <ul class="nav nav-tabs" id="mobileTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="partner-app-tab" data-bs-toggle="tab" data-bs-target="#partner-app" type="button" role="tab">
                <i class="bi bi-phone me-1"></i> Partner App
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="staff-app-tab" data-bs-toggle="tab" data-bs-target="#staff-app" type="button" role="tab">
                <i class="bi bi-tablet me-1"></i> Staff Field App
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications" type="button" role="tab">
                <i class="bi bi-bell me-1"></i> Push Notifications
            </button>
        </li>
    </ul>

    <!-- Mobile Experience Tab Content -->
    <div class="tab-content mt-3" id="mobileTabContent">
        
        <!-- Partner App Tab -->
        <div class="tab-pane fade show active" id="partner-app" role="tabpanel" aria-labelledby="partner-app-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-purple text-white">
                            <h6 class="mb-0">Partner Mobile App Features</h6>
                        </div>
                        <div class="card-body">
                            <div class="feature-list">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-success rounded-circle p-2 me-3">
                                        <i class="bi bi-graph-up text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Real-time Portfolio Tracking</strong>
                                        <div class="text-muted">Live updates on goat growth and investment performance</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-info rounded-circle p-2 me-3">
                                        <i class="bi bi-camera text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Photo & Video Updates</strong>
                                        <div class="text-muted">Regular visual updates of your goats</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-warning rounded-circle p-2 me-3">
                                        <i class="bi bi-cash-coin text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Financial Dashboard</strong>
                                        <div class="text-muted">ROI tracking and payout history</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-danger rounded-circle p-2 me-3">
                                        <i class="bi bi-chat-dots text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Direct Messaging</strong>
                                        <div class="text-muted">Communicate directly with farm management</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">App Download & Distribution</h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <div class="phone-mockup bg-dark rounded p-4 mx-auto" style="max-width: 200px;">
                                    <div class="screen bg-light rounded p-3 text-dark">
                                        <div class="app-icon bg-purple rounded-circle mx-auto mb-2" style="width: 50px; height: 50px;"></div>
                                        <h6 class="mb-0">ANKWATA FARM</h6>
                                        <small class="text-muted">Partner App</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <i class="bi bi-apple display-6 d-block"></i>
                                    <small>App Store</small>
                                </div>
                                <div class="col-6">
                                    <i class="bi bi-google-play display-6 d-block text-success"></i>
                                    <small>Play Store</small>
                                </div>
                            </div>
                            <button class="btn btn-purple w-100 mt-3">
                                <i class="bi bi-qr-code me-1"></i> Generate Download QR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Staff Field App Tab -->
        <div class="tab-pane fade" id="staff-app" role="tabpanel" aria-labelledby="staff-app-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Staff Field App Features</h6>
                        </div>
                        <div class="card-body">
                            <div class="feature-list">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-success rounded-circle p-2 me-3">
                                        <i class="bi bi-wifi-off text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Offline Data Entry</strong>
                                        <div class="text-muted">Work without internet connection</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-info rounded-circle p-2 me-3">
                                        <i class="bi bi-upc-scan text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Barcode Scanning</strong>
                                        <div class="text-muted">Quick goat identification with QR codes</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-primary rounded-circle p-2 me-3">
                                        <i class="bi bi-camera text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Photo Documentation</strong>
                                        <div class="text-muted">Capture health issues and progress</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="feature-icon bg-danger rounded-circle p-2 me-3">
                                        <i class="bi bi-clipboard-check text-white"></i>
                                    </div>
                                    <div>
                                        <strong>Task Management</strong>
                                        <div class="text-muted">Daily checklists and assignments</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Field Data Collection</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Goat</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Scan QR code or enter ID">
                                    <button class="btn btn-outline-secondary">
                                        <i class="bi bi-upc-scan"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Health Observation</label>
                                <select class="form-select">
                                    <option>Normal</option>
                                    <option>Reduced Appetite</option>
                                    <option>Lethargic</option>
                                    <option>Injury Observed</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Weight (kg)</label>
                                <input type="number" class="form-control" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Photo</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="2" placeholder="Additional observations..."></textarea>
                            </div>
                            <button class="btn btn-success w-100">
                                <i class="bi bi-cloud-upload me-1"></i> Submit Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Push Notifications Tab -->
        <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Notification Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="healthNotifications" checked>
                                    <label class="form-check-label" for="healthNotifications">
                                        Health Updates
                                    </label>
                                </div>
                                <small class="text-muted">Receive alerts about your goats' health</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="growthNotifications" checked>
                                    <label class="form-check-label" for="growthNotifications">
                                        Growth Milestones
                                    </label>
                                </div>
                                <small class="text-muted">Weight gains and development updates</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="financialNotifications" checked>
                                    <label class="form-check-label" for="financialNotifications">
                                        Financial Updates
                                    </label>
                                </div>
                                <small class="text-muted">ROI reports and payout notifications</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="farmUpdates">
                                    <label class="form-check-label" for="farmUpdates">
                                        General Farm News
                                    </label>
                                </div>
                                <small class="text-muted">Farm events and announcements</small>
                            </div>
                            <button class="btn btn-primary w-100">Save Settings</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Send Test Notification</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Notification Type</label>
                                <select class="form-select">
                                    <option>Health Update</option>
                                    <option>Growth Milestone</option>
                                    <option>Financial Report</option>
                                    <option>Farm News</option>
                                    <option>Urgent Alert</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" value="Great news! Your goat gained 2kg this week">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="3">Thunder is growing well and has reached 47kg. Your investment is performing excellently!</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Target Audience</label>
                                <select class="form-select">
                                    <option>All Partners</option>
                                    <option>Specific Partner</option>
                                    <option>Partners with Active Investments</option>
                                </select>
                            </div>
                            <button class="btn btn-success w-100">
                                <i class="bi bi-send me-1"></i> Send Test Notification
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-purple {
    background-color: #6f42c1 !important;
}
.btn-purple {
    background-color: #6f42c1;
    border-color: #6f42c1;
    color: white;
}
.btn-purple:hover {
    background-color: #5a32a3;
    border-color: #5a32a3;
    color: white;
}
</style>