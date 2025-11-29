<div class="tab-pane fade" id="breeding" role="tabpanel" aria-labelledby="breeding-tab">
    <!-- Breeding & Kidding Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-gender-ambiguous text-info me-2"></i> Breeding & Kidding Management</h4>
        <div class="btn-group">
            <button class="btn btn-info btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Record Mating
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-heart me-1"></i> Record Birth
            </button>
            <button class="btn btn-outline-warning btn-sm">
                <i class="bi bi-graph-up me-1"></i> Breeding Analytics
            </button>
        </div>
    </div>

    <!-- Breeding Overview Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <i class="bi bi-heart-pulse display-4 d-block mb-2"></i>
                    <h4>8</h4>
                    <p class="mb-0">Currently Pregnant</p>
                    <small>Active pregnancies</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-event display-4 d-block mb-2"></i>
                    <h4>12</h4>
                    <p class="mb-0">Kids Expected</p>
                    <small>This month</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up display-4 d-block mb-2"></i>
                    <h4>64%</h4>
                    <p class="mb-0">Success Rate</p>
                    <small>Breeding efficiency</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <i class="bi bi-heart-fill display-4 d-block mb-2"></i>
                    <h4>48</h4>
                    <p class="mb-0">Kids This Year</p>
                    <small>Total births</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Breeding & Kidding Sub-tabs -->
    <ul class="nav nav-tabs" id="breedingMainTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="breeding-center-tab" data-bs-toggle="tab" data-bs-target="#breeding-center" type="button" role="tab">
                <i class="bi bi-house-heart me-1"></i> Breeding Center
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pregnancy-management-tab" data-bs-toggle="tab" data-bs-target="#pregnancy-management" type="button" role="tab">
                <i class="bi bi-heart-pulse me-1"></i> Pregnancy Management
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="kidding-management-tab" data-bs-toggle="tab" data-bs-target="#kidding-management" type="button" role="tab">
                <i class="bi bi-heart-fill me-1"></i> Kidding Management
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="breeding-analytics-tab" data-bs-toggle="tab" data-bs-target="#breeding-analytics" type="button" role="tab">
                <i class="bi bi-graph-up me-1"></i> Breeding Analytics
            </button>
        </li>
    </ul>

    <!-- Breeding & Kidding Main Tab Content -->
    <div class="tab-content mt-3" id="breedingMainTabContent">
        
        <!-- Breeding Center Tab -->
        <div class="tab-pane fade show active" id="breeding-center" role="tabpanel" aria-labelledby="breeding-center-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Record New Mating</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Female Goat</label>
                                <select class="form-select">
                                    <option>Select female goat...</option>
                                    <option>GT-002 - Bella (Local Breed, 3 years)</option>
                                    <option>GT-089 - Daisy (Boer, 2 years)</option>
                                    <option>GT-134 - Ruby (Mixed, 4 years)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Male Goat</label>
                                <select class="form-select">
                                    <option>Select male goat...</option>
                                    <option>GT-001 - Thunder (Boer, 2 years)</option>
                                    <option>GT-015 - Rocky (Boer, 3 years)</option>
                                    <option>GT-045 - Max (Local Breed, 4 years)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mating Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expected Kidding Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d', strtotime('+150 days')); ?>" readonly>
                                <small class="text-muted">Automatically calculated (150 days gestation)</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Any observations about the mating..."></textarea>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-save me-1"></i> Record Mating
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Recent Mating Records</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Female</th>
                                            <th>Male</th>
                                            <th>Expected</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jun 20, 2024</td>
                                            <td><strong>Bella</strong></td>
                                            <td><strong>Thunder</strong></td>
                                            <td>Nov 18, 2024</td>
                                            <td><span class="badge bg-success">Pregnant</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jun 25, 2024</td>
                                            <td><strong>Daisy</strong></td>
                                            <td><strong>Rocky</strong></td>
                                            <td>Nov 22, 2024</td>
                                            <td><span class="badge bg-success">Pregnant</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jul 5, 2024</td>
                                            <td><strong>Ruby</strong></td>
                                            <td><strong>Max</strong></td>
                                            <td>Dec 2, 2024</td>
                                            <td><span class="badge bg-warning">Testing</span></td>
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
                    
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Breeding Stock Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="border rounded p-3">
                                        <div class="text-primary display-6">12</div>
                                        <small class="text-muted">Breeding Females</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="border rounded p-3">
                                        <div class="text-warning display-6">4</div>
                                        <small class="text-muted">Breeding Males</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pregnancy Management Tab -->
        <div class="tab-pane fade" id="pregnancy-management" role="tabpanel" aria-labelledby="pregnancy-management-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Active Pregnancies</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Goat</th>
                                            <th>Mating Date</th>
                                            <th>Due Date</th>
                                            <th>Days Pregnant</th>
                                            <th>Progress</th>
                                            <th>Expected Kids</th>
                                            <th>Health Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Bella (GT-002)</strong></td>
                                            <td>Jun 20, 2024</td>
                                            <td>Nov 18, 2024</td>
                                            <td>145</td>
                                            <td>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-success" style="width: 96%"></div>
                                                </div>
                                            </td>
                                            <td>2-3</td>
                                            <td><span class="badge bg-success">Excellent</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-clipboard-pulse"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Daisy (GT-089)</strong></td>
                                            <td>Jun 25, 2024</td>
                                            <td>Nov 22, 2024</td>
                                            <td>140</td>
                                            <td>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-info" style="width: 93%"></div>
                                                </div>
                                            </td>
                                            <td>1-2</td>
                                            <td><span class="badge bg-success">Good</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-clipboard-pulse"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ruby (GT-134)</strong></td>
                                            <td>Jul 5, 2024</td>
                                            <td>Dec 2, 2024</td>
                                            <td>130</td>
                                            <td>
                                                <div class="progress" style="height: 8px;">
                                                    <div class="progress-bar bg-warning" style="width: 86%"></div>
                                                </div>
                                            </td>
                                            <td>2-3</td>
                                            <td><span class="badge bg-warning">Monitor</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-clipboard-pulse"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Pregnancy Health Monitoring</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Pregnant Goat</label>
                                <select class="form-select">
                                    <option>Bella (GT-002) - Due Nov 18</option>
                                    <option>Daisy (GT-089) - Due Nov 22</option>
                                    <option>Ruby (GT-134) - Due Dec 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Weight (kg)</label>
                                <input type="number" class="form-control" value="42.5" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Body Condition</label>
                                <select class="form-select">
                                    <option>1 - Very Thin</option>
                                    <option>2 - Thin</option>
                                    <option selected>3 - Ideal</option>
                                    <option>4 - Fat</option>
                                    <option>5 - Obese</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Appetite Level</label>
                                <select class="form-select">
                                    <option>Normal</option>
                                    <option selected>Increased</option>
                                    <option>Decreased</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Health Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Observations...">Eating well, good energy levels</textarea>
                            </div>
                            <button class="btn btn-warning w-100">
                                <i class="bi bi-save me-1"></i> Update Health Record
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kidding Management Tab -->
        <div class="tab-pane fade" id="kidding-management" role="tabpanel" aria-labelledby="kidding-management-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Record New Birth</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Mother</label>
                                <select class="form-select">
                                    <option>Select mother goat...</option>
                                    <option>Bella (GT-002)</option>
                                    <option>Daisy (GT-089)</option>
                                    <option>Ruby (GT-134)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Birth Date & Time</label>
                                <input type="datetime-local" class="form-control" value="<?php echo date('Y-m-d\TH:i'); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number of Kids Born</label>
                                <input type="number" class="form-control" value="2" min="1" max="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Number Survived</label>
                                <input type="number" class="form-control" value="2" min="0" max="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Birth Weight (kg)</label>
                                <input type="number" class="form-control" value="3.2" step="0.1" placeholder="Average weight per kid">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Birth Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Complications, observations...">Normal delivery, both kids healthy</textarea>
                            </div>
                            <button class="btn btn-info w-100">
                                <i class="bi bi-save me-1"></i> Record Birth
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Recent Births</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Mother</th>
                                            <th>Kids Born</th>
                                            <th>Kids Survived</th>
                                            <th>Avg Weight</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024</td>
                                            <td><strong>Ruby</strong></td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3.2kg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
                                        </tr>
                                        <tr>
                                            <td>Nov 5, 2024</td>
                                            <td><strong>Luna</strong></td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>2.8kg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
                                        </tr>
                                        <tr>
                                            <td>Oct 28, 2024</td>
                                            <td><strong>Molly</strong></td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3.5kg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-3">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Kidding Statistics</h6>
                        </div>
                        <div class="card-body">
                            <div class="kidding-stats">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Total Births This Year:</span>
                                    <strong>48</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Average Litter Size:</span>
                                    <strong>2.1</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Survival Rate:</span>
                                    <strong>94%</strong>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Stillbirth Rate:</span>
                                    <strong>2.1%</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breeding Analytics Tab -->
        <div class="tab-pane fade" id="breeding-analytics" role="tabpanel" aria-labelledby="breeding-analytics-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Breeding Performance Analytics</h6>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-success display-6">64%</div>
                                        <small class="text-muted">Conception Rate</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-info display-6">2.1</div>
                                        <small class="text-muted">Avg. Litter Size</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-warning display-6">94%</div>
                                        <small class="text-muted">Kid Survival Rate</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-danger display-6">150</div>
                                        <small class="text-muted">Avg. Gestation (Days)</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="chart-container" style="height: 300px;">
                                <!-- Breeding analytics chart would go here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-graph-up display-1 d-block mb-3"></i>
                                    <h5>Breeding Performance Trends</h5>
                                    <p>Monthly conception rates, litter sizes, and survival rates analysis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>