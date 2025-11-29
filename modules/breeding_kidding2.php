<div class="tab-pane fade" id="breeding" role="tabpanel" aria-labelledby="breeding-tab">
    <!-- Breeding & Kidding Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-gender-ambiguous text-info me-2"></i> Breeding & Kidding</h4>
        <div class="btn-group">
            <button class="btn btn-info btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Record Mating
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-heart me-1"></i> Record Birth
            </button>
            <button class="btn btn-outline-warning btn-sm">
                <i class="bi bi-calendar me-1"></i> Breeding Calendar
            </button>
        </div>
    </div>

    <!-- Breeding & Kidding Sub-tabs -->
    <ul class="nav nav-tabs" id="breedingTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="breeding-calendar-tab" data-bs-toggle="tab" data-bs-target="#breeding-calendar" type="button" role="tab">
                <i class="bi bi-calendar-event me-1"></i> Breeding Calendar
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="mating-history-tab" data-bs-toggle="tab" data-bs-target="#mating-history" type="button" role="tab">
                <i class="bi bi-clock-history me-1"></i> Mating History
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pregnancy-tracker-tab" data-bs-toggle="tab" data-bs-target="#pregnancy-tracker" type="button" role="tab">
                <i class="bi bi-heart-pulse me-1"></i> Pregnancy Tracker
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="birth-records-tab" data-bs-toggle="tab" data-bs-target="#birth-records" type="button" role="tab">
                <i class="bi bi-heart-fill me-1"></i> Birth Records
            </button>
        </li>
    </ul>

    <!-- Breeding & Kidding Tab Content -->
    <div class="tab-content mt-3" id="breedingTabContent">
        
        <!-- Breeding Calendar Tab -->
        <div class="tab-pane fade show active" id="breeding-calendar" role="tabpanel" aria-labelledby="breeding-calendar-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Breeding Calendar</h6>
                        </div>
                        <div class="card-body">
                            <div id="breedingCalendar" style="height: 400px;">
                                <!-- Calendar would be implemented here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-calendar3 display-1 d-block mb-3"></i>
                                    <h5>Breeding Calendar View</h5>
                                    <p>Visual timeline showing mating dates, expected kidding dates, and breeding cycles</p>
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="border rounded p-3">
                                                <div class="text-success display-6">8</div>
                                                <small class="text-muted">Currently Pregnant</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="border rounded p-3">
                                                <div class="text-warning display-6">12</div>
                                                <small class="text-muted">Kids Expected</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="border rounded p-3">
                                                <div class="text-primary display-6">3</div>
                                                <small class="text-muted">Due This Week</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Upcoming Kidding</h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>Bella (GT-002)</strong>
                                            <div class="text-muted">Due: Nov 18, 2024</div>
                                            <small>Expected: 2-3 kids</small>
                                        </div>
                                        <span class="badge bg-warning">3 days</span>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>Daisy (GT-089)</strong>
                                            <div class="text-muted">Due: Nov 22, 2024</div>
                                            <small>Expected: 1-2 kids</small>
                                        </div>
                                        <span class="badge bg-info">7 days</span>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <strong>Ruby (GT-134)</strong>
                                            <div class="text-muted">Due: Nov 25, 2024</div>
                                            <small>Expected: 2-3 kids</small>
                                        </div>
                                        <span class="badge bg-info">10 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-3">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Breeding Statistics</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="display-6 text-success">64%</div>
                                <small class="text-muted">Success Rate</small>
                            </div>
                            <div class="breeding-stats">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Average Gestation:</span>
                                    <strong>150 days</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Average Litter Size:</span>
                                    <strong>2.1 kids</strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Kids This Year:</span>
                                    <strong>48</strong>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Survival Rate:</span>
                                    <strong>94%</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mating History Tab -->
        <div class="tab-pane fade" id="mating-history" role="tabpanel" aria-labelledby="mating-history-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Mating History</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Female</th>
                                            <th>Male</th>
                                            <th>Expected Kidding</th>
                                            <th>Status</th>
                                            <th>Result</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jun 20, 2024</td>
                                            <td><strong>Bella (GT-002)</strong></td>
                                            <td><strong>Thunder (GT-001)</strong></td>
                                            <td>Nov 18, 2024</td>
                                            <td><span class="badge bg-success">Pregnant</span></td>
                                            <td>Expected: 2-3 kids</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jun 25, 2024</td>
                                            <td><strong>Daisy (GT-089)</strong></td>
                                            <td><strong>Rocky (GT-015)</strong></td>
                                            <td>Nov 22, 2024</td>
                                            <td><span class="badge bg-success">Pregnant</span></td>
                                            <td>Expected: 1-2 kids</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>May 15, 2024</td>
                                            <td><strong>Ruby (GT-134)</strong></td>
                                            <td><strong>Max (GT-045)</strong></td>
                                            <td>Oct 12, 2024</td>
                                            <td><span class="badge bg-info">Completed</span></td>
                                            <td>3 kids born</td>
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

        <!-- Pregnancy Tracker Tab -->
        <div class="tab-pane fade" id="pregnancy-tracker" role="tabpanel" aria-labelledby="pregnancy-tracker-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Active Pregnancies</h6>
                        </div>
                        <div class="card-body">
                            <div class="pregnancy-list">
                                <div class="pregnancy-item mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Bella (GT-002)</h6>
                                        <span class="badge bg-warning">85%</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 85%"></div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Days Pregnant</small>
                                            <div class="fw-bold">145</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Due Date</small>
                                            <div class="fw-bold">Nov 18</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Days Left</small>
                                            <div class="fw-bold text-warning">5</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pregnancy-item mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Daisy (GT-089)</h6>
                                        <span class="badge bg-info">78%</span>
                                    </div>
                                    <div class="progress mb-2" style="height: 10px;">
                                        <div class="progress-bar bg-info" style="width: 78%"></div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Days Pregnant</small>
                                            <div class="fw-bold">140</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Due Date</small>
                                            <div class="fw-bold">Nov 22</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Days Left</small>
                                            <div class="fw-bold text-info">9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Pregnancy Health Monitoring</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Pregnant Goat</label>
                                <select class="form-select">
                                    <option>Bella (GT-002) - Due Nov 18</option>
                                    <option>Daisy (GT-089) - Due Nov 22</option>
                                    <option>Ruby (GT-134) - Due Nov 25</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Weight (kg)</label>
                                <input type="number" class="form-control" value="42.5" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Body Condition Score</label>
                                <select class="form-select">
                                    <option>1 - Very Thin</option>
                                    <option>2 - Thin</option>
                                    <option>3 - Ideal</option>
                                    <option selected>4 - Fat</option>
                                    <option>5 - Obese</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Appetite</label>
                                <select class="form-select">
                                    <option>Normal</option>
                                    <option>Increased</option>
                                    <option>Decreased</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Health observations..."></textarea>
                            </div>
                            <button class="btn btn-info w-100">
                                <i class="bi bi-save me-1"></i> Save Health Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Birth Records Tab -->
        <div class="tab-pane fade" id="birth-records" role="tabpanel" aria-labelledby="birth-records-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Recent Birth Records</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Birth Date</th>
                                            <th>Mother</th>
                                            <th>Father</th>
                                            <th>Kids Born</th>
                                            <th>Kids Survived</th>
                                            <th>Birth Weight</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024</td>
                                            <td><strong>Ruby (GT-134)</strong></td>
                                            <td><strong>Max (GT-045)</strong></td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3.2kg avg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nov 5, 2024</td>
                                            <td><strong>Luna (GT-067)</strong></td>
                                            <td><strong>Thor (GT-012)</strong></td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>2.8kg avg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 28, 2024</td>
                                            <td><strong>Molly (GT-098)</strong></td>
                                            <td><strong>Zeus (GT-023)</strong></td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3.5kg</td>
                                            <td><span class="badge bg-success">Healthy</span></td>
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
    </div>
</div>