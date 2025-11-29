<div class="tab-pane fade" id="admin-panel" role="tabpanel" aria-labelledby="admin-panel-tab">
    <!-- Admin Panel Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-shield-check text-danger me-2"></i> Admin Panel</h4>
        <div class="btn-group">
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-gear me-1"></i> System Settings
            </button>
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-database me-1"></i> Backup System
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-graph-up me-1"></i> System Health
            </button>
        </div>
    </div>

    <!-- Admin Panel Sub-tabs -->
    <ul class="nav nav-tabs" id="adminTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="access-control-tab" data-bs-toggle="tab" data-bs-target="#access-control" type="button" role="tab">
                <i class="bi bi-person-lock me-1"></i> Access Control
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="role-management-tab" data-bs-toggle="tab" data-bs-target="#role-management" type="button" role="tab">
                <i class="bi bi-people me-1"></i> Role Management
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="backup-restore-tab" data-bs-toggle="tab" data-bs-target="#backup-restore" type="button" role="tab">
                <i class="bi bi-database me-1"></i> Backup & Restore
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="system-config-tab" data-bs-toggle="tab" data-bs-target="#system-config" type="button" role="tab">
                <i class="bi bi-sliders me-1"></i> System Configuration
            </button>
        </li>
    </ul>

    <!-- Admin Panel Tab Content -->
    <div class="tab-content mt-3" id="adminTabContent">
        
        <!-- Access Control Tab -->
        <div class="tab-pane fade show active" id="access-control" role="tabpanel" aria-labelledby="access-control-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">User Management</h6>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Role</th>
                                            <th>Last Login</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <strong>Mikey Admin</strong>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-danger">Administrator</span></td>
                                            <td>Today, 14:30</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <strong>Kwame Appiah</strong>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-warning">Farm Manager</span></td>
                                            <td>Today, 11:15</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <strong>Ama Serwaa</strong>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Veterinarian</span></td>
                                            <td>Today, 09:42</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary w-100 mt-3">
                                <i class="bi bi-person-plus me-1"></i> Add New User
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Permission Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Role</label>
                                <select class="form-select" id="roleSelect">
                                    <option>Administrator</option>
                                    <option>Farm Manager</option>
                                    <option>Veterinarian</option>
                                    <option>Farm Hand</option>
                                    <option>Partner (Read Only)</option>
                                </select>
                            </div>
                            
                            <div class="permissions-list">
                                <h6>Module Permissions</h6>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permDashboard" checked disabled>
                                    <label class="form-check-label" for="permDashboard">Dashboard Access</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permLivestock" checked>
                                    <label class="form-check-label" for="permLivestock">Livestock Management</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permPartners">
                                    <label class="form-check-label" for="permPartners">Partner Management</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permSales">
                                    <label class="form-check-label" for="permSales">Sales & Finance</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permHealth" checked>
                                    <label class="form-check-label" for="permHealth">Health Records</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permBreeding">
                                    <label class="form-check-label" for="permBreeding">Breeding Management</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permReports">
                                    <label class="form-check-label" for="permReports">Report Generation</label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="permAdmin">
                                    <label class="form-check-label" for="permAdmin">Admin Panel Access</label>
                                </div>
                            </div>
                            
                            <button class="btn btn-success w-100 mt-3">
                                <i class="bi bi-save me-1"></i> Save Permissions
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Role Management Tab -->
        <div class="tab-pane fade" id="role-management" role="tabpanel" aria-labelledby="role-management-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Role Definitions</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-header bg-danger text-white">
                                            <h6 class="mb-0">Administrator</h6>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Full system access with all permissions.</p>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check text-success me-2"></i> All Modules</li>
                                                <li><i class="bi bi-check text-success me-2"></i> User Management</li>
                                                <li><i class="bi bi-check text-success me-2"></i> System Settings</li>
                                                <li><i class="bi bi-check text-success me-2"></i> Backup/Restore</li>
                                            </ul>
                                            <small class="text-muted">Users: 1</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-header bg-warning text-dark">
                                            <h6 class="mb-0">Farm Manager</h6>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Operational management with limited admin access.</p>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check text-success me-2"></i> Livestock Management</li>
                                                <li><i class="bi bi-check text-success me-2"></i> Health Records</li>
                                                <li><i class="bi bi-check text-success me-2"></i> Breeding Management</li>
                                                <li><i class="bi bi-x text-danger me-2"></i> User Management</li>
                                            </ul>
                                            <small class="text-muted">Users: 2</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-header bg-info text-white">
                                            <h6 class="mb-0">Veterinarian</h6>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Health and medical records management.</p>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-check text-success me-2"></i> Health Records</li>
                                                <li><i class="bi bi-check text-success me-2"></i> Medical Treatments</li>
                                                <li><i class="bi bi-x text-danger me-2"></i> Financial Data</li>
                                                <li><i class="bi bi-x text-danger me-2"></i> Partner Management</li>
                                            </ul>
                                            <small class="text-muted">Users: 1</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Backup & Restore Tab -->
        <div class="tab-pane fade" id="backup-restore" role="tabpanel" aria-labelledby="backup-restore-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">System Backup</h6>
                        </div>
                        <div class="card-body">
                            <div class="backup-status mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Last Backup</span>
                                    <span class="badge bg-success">Nov 10, 2024 02:00</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Backup Size</span>
                                    <span class="badge bg-info">245 MB</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Auto Backup</span>
                                    <span class="badge bg-success">Enabled</span>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Backup Type</label>
                                <select class="form-select">
                                    <option>Full System Backup</option>
                                    <option>Database Only</option>
                                    <option>Documents Only</option>
                                    <option>Custom Selection</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Backup Location</label>
                                <select class="form-select">
                                    <option>Local Server</option>
                                    <option>Cloud Storage</option>
                                    <option>External Drive</option>
                                </select>
                            </div>
                            <button class="btn btn-success w-100">
                                <i class="bi bi-database me-1"></i> Create Backup Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Restore & Recovery</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>Warning:</strong> Restoring will overwrite current data
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Select Backup File</label>
                                <select class="form-select">
                                    <option>backup_2024-11-10_0200.zip</option>
                                    <option>backup_2024-11-09_0200.zip</option>
                                    <option>backup_2024-11-08_0200.zip</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Restore Options</label>
                                <select class="form-select">
                                    <option>Full System Restore</option>
                                    <option>Database Only</option>
                                    <option>Specific Modules</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="verifyBackup">
                                    <label class="form-check-label" for="verifyBackup">
                                        Verify backup integrity before restore
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-warning w-100">
                                <i class="bi bi-arrow-clockwise me-1"></i> Restore System
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Configuration Tab -->
        <div class="tab-pane fade" id="system-config" role="tabpanel" aria-labelledby="system-config-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">General Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Farm Name</label>
                                <input type="text" class="form-control" value="ANKWATA FARM">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Currency</label>
                                <select class="form-select">
                                    <option selected>Ghana Cedi (₵)</option>
                                    <option>US Dollar ($)</option>
                                    <option>Euro (€)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time Zone</label>
                                <select class="form-select">
                                    <option selected>Africa/Accra (GMT)</option>
                                    <option>UTC</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Format</label>
                                <select class="form-select">
                                    <option selected>DD/MM/YYYY</option>
                                    <option>MM/DD/YYYY</option>
                                    <option>YYYY-MM-DD</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-save me-1"></i> Save Settings
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">System Health</h6>
                        </div>
                        <div class="card-body">
                            <div class="system-health">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Database Usage</span>
                                        <small>65%</small>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 65%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Server CPU</span>
                                        <small>42%</small>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-info" style="width: 42%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Memory Usage</span>
                                        <small>78%</small>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" style="width: 78%"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Storage Space</span>
                                        <small>35%</small>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="system-info mt-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>System Version:</span>
                                    <strong>v2.1.0</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Last Update:</span>
                                    <strong>Nov 1, 2024</strong>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Uptime:</span>
                                    <strong>15 days, 7 hours</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>