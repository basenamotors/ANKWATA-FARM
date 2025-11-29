<div class="tab-pane fade" id="livestock" role="tabpanel" aria-labelledby="livestock-tab">
    <!-- Livestock Management Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-heart-pulse text-success me-2"></i> Livestock Management</h4>
        <div class="btn-group">
            <button class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Add New Goat
            </button>
            <button class="btn btn-outline-primary btn-sm">
                <i class="bi bi-qr-code me-1"></i> Generate QR Tags
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-file-earmark-spreadsheet me-1"></i> Export Data
            </button>
        </div>
    </div>

    <!-- Livestock Sub-tabs -->
    <ul class="nav nav-tabs" id="livestockTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="profiles-tab" data-bs-toggle="tab" data-bs-target="#profiles" type="button" role="tab">
                <i class="bi bi-person-badge me-1"></i> Goat Profiles
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health" type="button" role="tab">
                <i class="bi bi-heart-pulse me-1"></i> Health Suite
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="breeding-tab" data-bs-toggle="tab" data-bs-target="#breeding" type="button" role="tab">
                <i class="bi bi-gender-ambiguous me-1"></i> Breeding Calendar
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="lifecycle-tab" data-bs-toggle="tab" data-bs-target="#lifecycle" type="button" role="tab">
                <i class="bi bi-diagram-3 me-1"></i> Lifecycle Tracking
            </button>
        </li>
    </ul>

    <!-- Livestock Tab Content -->
    <div class="tab-content mt-3" id="livestockTabContent">
        
        <!-- Goat Profiles Tab -->
        <div class="tab-pane fade show active" id="profiles" role="tabpanel" aria-labelledby="profiles-tab">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0"><i class="bi bi-search me-1"></i> Quick Search & Filters</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Search by name, tag, or ID...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>All Goats</option>
                                    <option>Active</option>
                                    <option>Sold</option>
                                    <option>Deceased</option>
                                    <option>Breeding</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Breed</label>
                                <select class="form-select">
                                    <option>All Breeds</option>
                                    <option>Boer</option>
                                    <option>Local Breed</option>
                                    <option>Mixed</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-funnel me-1"></i> Apply Filters
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0"><i class="bi bi-list-ul me-1"></i> Goat Registry (312 Animals)</h6>
                            <div class=" d-flex justify-content-between align-items-center">
                                <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary"><i class="bi bi-grid-3x3-gap"></i></button>
                                    <button class="btn btn-primary"><i class="bi bi-list-task"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tag ID</th>
                                            <th>Name</th>
                                            <th>Breed</th>
                                            <th>Age</th>
                                            <th>Status</th>
                                            <th>Owner</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="badge bg-dark">GT-001</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/blink2.png" class="rounded me-2" width="30" height="30" alt="Thunder">
                                                    <strong>Thunder</strong>
                                                </div>
                                            </td>
                                            <td>Boer</td>
                                            <td>2 years</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>Farm</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary" title="View Profile">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge bg-dark">GT-002</span></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/blink2.png" class="rounded me-2" width="30" height="30" alt="Bella">
                                                    <strong>Bella</strong>
                                                </div>
                                            </td>
                                            <td>Local Breed</td>
                                            <td>3 years</td>
                                            <td><span class="badge bg-info">Pregnant</span></td>
                                            <td>John Smith</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary" title="View Profile">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
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

        <!-- Health Suite Tab -->
        <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0"><i class="bi bi-clipboard-pulse me-1"></i> Vaccination Schedule</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-1"></i>
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
                        <div class="card-header bg-danger text-white">
                            <h6 class="mb-0"><i class="bi bi-exclamation-triangle me-1"></i> Medical Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="bi bi-thermometer-high me-1"></i>
                                <strong>2 Goats Need Attention</strong>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>GT-015 - Rocky</strong>
                                        <span class="badge bg-warning">Fever</span>
                                    </div>
                                    <small class="text-muted">Temperature: 40.2°C • Not eating well</small>
                                </div>
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between">
                                        <strong>GT-089 - Daisy</strong>
                                        <span class="badge bg-danger">Injury</span>
                                    </div>
                                    <small class="text-muted">Leg wound • Needs dressing</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Breeding Calendar Tab -->
        <div class="tab-pane fade" id="breeding" role="tabpanel" aria-labelledby="breeding-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0"><i class="bi bi-calendar-event me-1"></i> Breeding Calendar</h6>
                        </div>
                        <div class="card-body">
                            <div id="breedingCalendar" style="height: 400px;">
                                <!-- Calendar would be implemented here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-calendar3 display-4 d-block mb-3"></i>
                                    <h5>Breeding Calendar View</h5>
                                    <p>Visual timeline showing mating dates, expected kidding dates, and breeding cycles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0"><i class="bi bi-graph-up me-1"></i> Breeding Stats</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <div class="display-6 text-success">64%</div>
                                <small class="text-muted">Success Rate</small>
                            </div>
                            <div class="mb-3">
                                <strong>Currently Pregnant:</strong> 8 goats
                            </div>
                            <div class="mb-3">
                                <strong>Expected This Month:</strong> 12 kids
                            </div>
                            <div class="mb-3">
                                <strong>Average Litter Size:</strong> 2.1 kids
                            </div>
                            <button class="btn btn-success w-100 mt-3">
                                <i class="bi bi-plus-circle me-1"></i> Record Mating
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lifecycle Tracking Tab -->
        <div class="tab-pane fade" id="lifecycle" role="tabpanel" aria-labelledby="lifecycle-tab">
            <div class="card">
                <div class="card-header bg-purple text-white">
                    <h6 class="mb-0"><i class="bi bi-diagram-3 me-1"></i> Goat Lifecycle Journey</h6>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col">
                            <div class="lifecycle-stage active">
                                <i class="bi bi-heart-fill text-danger display-6"></i>
                                <h6>Birth</h6>
                                <small>48 this year</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="lifecycle-stage">
                                <i class="bi bi-shield-check text-success display-6"></i>
                                <h6>Weaning</h6>
                                <small>36 completed</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="lifecycle-stage">
                                <i class="bi bi-graph-up text-warning display-6"></i>
                                <h6>Growth</h6>
                                <small>312 active</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="lifecycle-stage">
                                <i class="bi bi-cash-coin text-primary display-6"></i>
                                <h6>Sale</h6>
                                <small>84 this year</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h6>Recent Lifecycle Events</h6>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>GT-201 - New Kid Born</strong>
                                    <span class="badge bg-success">Birth</span>
                                </div>
                                <small class="text-muted">Born to Bella • Weight: 3.2kg • Today</small>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <strong>GT-156 - Sold to Market</strong>
                                    <span class="badge bg-primary">Sale</span>
                                </div>
                                <small class="text-muted">Price: ₵2,400 • Weight: 45kg • 2 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>