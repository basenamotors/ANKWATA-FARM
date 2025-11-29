<div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
    <!-- Health & Medical Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-clipboard2-pulse text-danger me-2"></i> Health & Medical</h4>
        <div class="btn-group">
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Record Treatment
            </button>
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-calendar-plus me-1"></i> Schedule Checkup
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-file-medical me-1"></i> Health Reports
            </button>
        </div>
    </div>

    <!-- Health & Medical Sub-tabs -->
    <ul class="nav nav-tabs" id="healthTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="medical-records-tab" data-bs-toggle="tab" data-bs-target="#medical-records" type="button" role="tab">
                <i class="bi bi-file-medical me-1"></i> Medical Records
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vaccination-tab" data-bs-toggle="tab" data-bs-target="#vaccination" type="button" role="tab">
                <i class="bi bi-shield-plus me-1"></i> Vaccination Schedule
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="symptom-checker-tab" data-bs-toggle="tab" data-bs-target="#symptom-checker" type="button" role="tab">
                <i class="bi bi-clipboard-check me-1"></i> Symptom Checker
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vet-contacts-tab" data-bs-toggle="tab" data-bs-target="#vet-contacts" type="button" role="tab">
                <i class="bi bi-telephone me-1"></i> Vet Contacts
            </button>
        </li>
    </ul>

    <!-- Health & Medical Tab Content -->
    <div class="tab-content mt-3" id="healthTabContent">
        
        <!-- Medical Records Tab -->
        <div class="tab-pane fade show active" id="medical-records" role="tabpanel" aria-labelledby="medical-records-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Health Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <div class="display-6 text-success">92%</div>
                                <small class="text-muted">Herd Health Score</small>
                            </div>
                            <div class="health-stats">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Healthy Goats</span>
                                    <span class="badge bg-success">287</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Under Observation</span>
                                    <span class="badge bg-warning">18</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Needing Treatment</span>
                                    <span class="badge bg-danger">7</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Recent Treatments</span>
                                    <span class="badge bg-info">24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Recent Medical Records</h6>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-plus-circle me-1"></i> New Record
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Goat</th>
                                            <th>Treatment</th>
                                            <th>Date</th>
                                            <th>Veterinarian</th>
                                            <th>Cost</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>GT-015 - Rocky</strong>
                                            </td>
                                            <td>Fever Treatment</td>
                                            <td>Nov 10, 2024</td>
                                            <td>Dr. Kwame</td>
                                            <td>₵120</td>
                                            <td><span class="badge bg-warning">Recovering</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>GT-089 - Daisy</strong>
                                            </td>
                                            <td>Wound Dressing</td>
                                            <td>Nov 9, 2024</td>
                                            <td>Dr. Ama</td>
                                            <td>₵80</td>
                                            <td><span class="badge bg-success">Healed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
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

        <!-- Vaccination Schedule Tab -->
        <div class="tab-pane fade" id="vaccination" role="tabpanel" aria-labelledby="vaccination-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Upcoming Vaccinations</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-2"></i>
                                <strong>Next Vaccination:</strong> 12 goats due in 3 days
                            </div>
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>CD&T Vaccine</strong>
                                        <div class="text-muted">Due: Nov 15, 2024</div>
                                        <small>12 goats pending</small>
                                    </div>
                                    <button class="btn btn-sm btn-success">Mark Done</button>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Deworming</strong>
                                        <div class="text-muted">Due: Nov 20, 2024</div>
                                        <small>All adult goats</small>
                                    </div>
                                    <button class="btn btn-sm btn-outline-secondary">Schedule</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Vaccination History</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Vaccine</th>
                                            <th>Date</th>
                                            <th>Goats</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CD&T Booster</td>
                                            <td>Oct 15, 2024</td>
                                            <td>24</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Rabies Vaccine</td>
                                            <td>Sep 28, 2024</td>
                                            <td>18</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Symptom Checker Tab -->
        <div class="tab-pane fade" id="symptom-checker" role="tabpanel" aria-labelledby="symptom-checker-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Symptom Checker</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Symptoms</label>
                                <select multiple class="form-select" size="8">
                                    <option>Fever</option>
                                    <option>Loss of Appetite</option>
                                    <option>Lethargy</option>
                                    <option>Coughing</option>
                                    <option>Diarrhea</option>
                                    <option>Weight Loss</option>
                                    <option>Lameness</option>
                                    <option>Skin Lesions</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Duration</label>
                                <select class="form-select">
                                    <option>Less than 24 hours</option>
                                    <option>1-3 days</option>
                                    <option>3-7 days</option>
                                    <option>More than 1 week</option>
                                </select>
                            </div>
                            <button class="btn btn-info w-100">
                                <i class="bi bi-search me-1"></i> Check Symptoms
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Possible Conditions</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>Potential Conditions Detected</strong>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <strong>Parasitic Infection</strong>
                                    <div class="text-muted">High probability based on symptoms</div>
                                    <small>Recommended: Deworming treatment</small>
                                </div>
                                <div class="list-group-item">
                                    <strong>Respiratory Infection</strong>
                                    <div class="text-muted">Moderate probability</div>
                                    <small>Recommended: Veterinary consultation</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vet Contacts Tab -->
        <div class="tab-pane fade" id="vet-contacts" role="tabpanel" aria-labelledby="vet-contacts-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Veterinary Contacts</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="vet-avatar bg-info rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                <i class="bi bi-person display-4 text-white"></i>
                                            </div>
                                            <h6>Dr. Kwame Appiah</h6>
                                            <p class="text-muted">Large Animal Specialist</p>
                                            <div class="vet-contact">
                                                <div><i class="bi bi-telephone me-2"></i> +233 24 123 4567</div>
                                                <div><i class="bi bi-envelope me-2"></i> dr.kwame@vetcare.gh</div>
                                                <div><i class="bi bi-geo-alt me-2"></i> Kumasi Central</div>
                                            </div>
                                            <button class="btn btn-sm btn-primary mt-2 w-100">
                                                <i class="bi bi-telephone me-1"></i> Call Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="vet-avatar bg-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                <i class="bi bi-person display-4 text-white"></i>
                                            </div>
                                            <h6>Dr. Ama Serwaa</h6>
                                            <p class="text-muted">Goat Health Expert</p>
                                            <div class="vet-contact">
                                                <div><i class="bi bi-telephone me-2"></i> +233 20 987 6543</div>
                                                <div><i class="bi bi-envelope me-2"></i> ama.serwaa@vet.gh</div>
                                                <div><i class="bi bi-geo-alt me-2"></i> Accra Main</div>
                                            </div>
                                            <button class="btn btn-sm btn-success mt-2 w-100">
                                                <i class="bi bi-telephone me-1"></i> Call Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body text-center">
                                            <div class="vet-avatar bg-warning rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                                <i class="bi bi-plus-circle display-4 text-white"></i>
                                            </div>
                                            <h6>Emergency Contact</h6>
                                            <p class="text-muted">24/7 Emergency Line</p>
                                            <div class="vet-contact">
                                                <div><i class="bi bi-telephone me-2"></i> +233 55 123 4567</div>
                                                <div><i class="bi bi-envelope me-2"></i> emergency@vet.gh</div>
                                                <div><i class="bi bi-geo-alt me-2"></i> Nationwide</div>
                                            </div>
                                            <button class="btn btn-sm btn-warning mt-2 w-100">
                                                <i class="bi bi-telephone me-1"></i> Emergency Call
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>