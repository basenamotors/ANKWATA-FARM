<div class="tab-pane fade" id="healths" role="tabpanel" aria-labelledby="healths-tab">
    <!-- Health & Medical Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-clipboard2-pulse text-danger me-2"></i> Health & Medical Center</h4>
        <div class="btn-group">
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-plus-circle me-1"></i> New Treatment
            </button>
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-calendar-plus me-1"></i> Schedule Checkup
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-file-medical me-1"></i> Health Reports
            </button>
        </div>
    </div>

    <!-- Health Overview Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse display-4 d-block mb-2"></i>
                    <h4>287</h4>
                    <p class="mb-0">Healthy Goats</p>
                    <small>92% of herd</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <i class="bi bi-eye display-4 d-block mb-2"></i>
                    <h4>18</h4>
                    <p class="mb-0">Under Observation</p>
                    <small>Needs monitoring</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body text-center">
                    <i class="bi bi-exclamation-triangle display-4 d-block mb-2"></i>
                    <h4>7</h4>
                    <p class="mb-0">Needing Treatment</p>
                    <small>Urgent care required</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <i class="bi bi-clipboard-check display-4 d-block mb-2"></i>
                    <h4>24</h4>
                    <p class="mb-0">Recent Treatments</p>
                    <small>This month</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Health & Medical Sub-tabs -->
    <ul class="nav nav-tabs" id="healthMainTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="medical-overview-tab" data-bs-toggle="tab" data-bs-target="#medical-overview" type="button" role="tab">
                <i class="bi bi-speedometer2 me-1"></i> Health Overview
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="treatment-records-tab" data-bs-toggle="tab" data-bs-target="#treatment-records" type="button" role="tab">
                <i class="bi bi-file-medical me-1"></i> Treatment Records
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vaccination-main-tab" data-bs-toggle="tab" data-bs-target="#vaccination-main" type="button" role="tab">
                <i class="bi bi-shield-plus me-1"></i> Vaccination Management
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="disease-control-tab" data-bs-toggle="tab" data-bs-target="#disease-control" type="button" role="tab">
                <i class="bi bi-bug me-1"></i> Disease Control
            </button>
        </li>
    </ul>

    <!-- Health & Medical Main Tab Content -->
    <div class="tab-content mt-3" id="healthMainTabContent">
        
        <!-- Health Overview Tab -->
        <div class="tab-pane fade show active" id="medical-overview" role="tabpanel" aria-labelledby="medical-overview-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Health Status Dashboard</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="height: 300px;">
                                <!-- Health status chart would go here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-heart-pulse display-1 d-block mb-3"></i>
                                    <h5>Herd Health Analytics</h5>
                                    <p>Real-time health monitoring and trend analysis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Urgent Health Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>Critical Alerts</strong>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item list-group-item-danger">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>GT-015 - Rocky</strong>
                                            <div class="text-muted">High fever - 40.2°C</div>
                                            <small>Not eating, needs immediate attention</small>
                                        </div>
                                        <span class="badge bg-danger">URGENT</span>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-warning">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>GT-089 - Daisy</strong>
                                            <div class="text-muted">Leg injury infection</div>
                                            <small>Wound needs redressing</small>
                                        </div>
                                        <span class="badge bg-warning">HIGH</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-3">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Quick Health Actions</h6>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success w-100 mb-2">
                                <i class="bi bi-clipboard-pulse me-1"></i> Routine Checkup
                            </button>
                            <button class="btn btn-info w-100 mb-2">
                                <i class="bi bi-shield-plus me-1"></i> Record Vaccination
                            </button>
                            <button class="btn btn-warning w-100 mb-2">
                                <i class="bi bi-capsule me-1"></i> Medication Log
                            </button>
                            <button class="btn btn-danger w-100">
                                <i class="bi bi-thermometer-high me-1"></i> Emergency Treatment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Treatment Records Tab -->
        <div class="tab-pane fade" id="treatment-records" role="tabpanel" aria-labelledby="treatment-records-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Medical Treatment History</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Goat</th>
                                            <th>Treatment Type</th>
                                            <th>Diagnosis</th>
                                            <th>Medication</th>
                                            <th>Veterinarian</th>
                                            <th>Cost</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024</td>
                                            <td><strong>GT-015 - Rocky</strong></td>
                                            <td><span class="badge bg-danger">Emergency</span></td>
                                            <td>High Fever</td>
                                            <td>Antibiotics, Fever Reducer</td>
                                            <td>Dr. Kwame</td>
                                            <td>₵120</td>
                                            <td><span class="badge bg-warning">Recovering</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 9, 2024</td>
                                            <td><strong>GT-089 - Daisy</strong></td>
                                            <td><span class="badge bg-warning">Injury Care</span></td>
                                            <td>Leg Wound</td>
                                            <td>Antiseptic, Bandage</td>
                                            <td>Dr. Ama</td>
                                            <td>₵80</td>
                                            <td><span class="badge bg-success">Healed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 8, 2024</td>
                                            <td><strong>GT-134 - Ruby</strong></td>
                                            <td><span class="badge bg-success">Routine</span></td>
                                            <td>Post-birth Check</td>
                                            <td>Vitamins, Calcium</td>
                                            <td>Dr. Ama</td>
                                            <td>₵60</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vaccination Management Tab -->
        <div class="tab-pane fade" id="vaccination-main" role="tabpanel" aria-labelledby="vaccination-main-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Vaccination Schedule</h6>
                        </div>
                        <div class="card-body">
                            <div class="vaccination-timeline">
                                <div class="timeline-item mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">CD&T Vaccine</h6>
                                        <span class="badge bg-warning">Due in 3 days</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-warning" style="width: 90%"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <small class="text-muted">Due Date:</small>
                                            <div class="fw-bold">Nov 15, 2024</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">Goats:</small>
                                            <div class="fw-bold">12</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="timeline-item mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Deworming</h6>
                                        <span class="badge bg-info">Due in 8 days</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 8px;">
                                        <div class="progress-bar bg-info" style="width: 80%"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <small class="text-muted">Due Date:</small>
                                            <div class="fw-bold">Nov 20, 2024</div>
                                        </div>
                                        <div class="col-6">
                                            <small class="text-muted">Goats:</small>
                                            <div class="fw-bold">All Adults</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Record Vaccination</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Vaccine Type</label>
                                <select class="form-select">
                                    <option>CD&T (Clostridium)</option>
                                    <option>Rabies Vaccine</option>
                                    <option>Pneumonia Vaccine</option>
                                    <option>Foot Rot Vaccine</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Goats</label>
                                <select multiple class="form-select" size="4">
                                    <option>GT-001 - Thunder</option>
                                    <option>GT-002 - Bella</option>
                                    <option>GT-015 - Rocky</option>
                                    <option>GT-089 - Daisy</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vaccination Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Next Due Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d', strtotime('+6 months')); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="2" placeholder="Any observations..."></textarea>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-save me-1"></i> Save Vaccination Record
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disease Control Tab -->
        <div class="tab-pane fade" id="disease-control" role="tabpanel" aria-labelledby="disease-control-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Disease Outbreak Monitoring</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-2"></i>
                                <strong>No active outbreaks detected</strong>
                            </div>
                            
                            <div class="disease-stats">
                                <h6>Common Diseases in Region</h6>
                                <div class="list-group">
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        Peste des Petits Ruminants (PPR)
                                        <span class="badge bg-success">No Cases</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        Foot and Mouth Disease
                                        <span class="badge bg-success">No Cases</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        Contagious Caprine Pleuropneumonia
                                        <span class="badge bg-success">No Cases</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        Orf (Sore Mouth)
                                        <span class="badge bg-warning">1 Case</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            <h6 class="mb-0">Quarantine Management</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Quarantine Status</label>
                                <select class="form-select">
                                    <option>No Active Quarantine</option>
                                    <option>Partial Quarantine</option>
                                    <option>Full Farm Quarantine</option>
                                </select>
                            </div>
                            
                            <div class="quarantine-list">
                                <h6>Currently Quarantined</h6>
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong>GT-015 - Rocky</strong>
                                            <span class="badge bg-warning">Day 3</span>
                                        </div>
                                        <small class="text-muted">Fever treatment - isolation until Nov 15</small>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong>GT-089 - Daisy</strong>
                                            <span class="badge bg-success">Day 7</span>
                                        </div>
                                        <small class="text-muted">Injury recovery - clear on Nov 14</small>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-danger w-100 mt-3">
                                <i class="bi bi-shield-exclamation me-1"></i> Initiate Quarantine Protocol
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>