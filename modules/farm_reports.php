<div class="tab-pane fade" id="reports" role="tabpanel" aria-labelledby="reports-tab">
    <!-- Farm Reports Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-bar-chart text-primary me-2"></i> Farm Reports</h4>
        <div class="btn-group">
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-file-earmark-pdf me-1"></i> Generate Report
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-download me-1"></i> Export Data
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-gear me-1"></i> Report Settings
            </button>
        </div>
    </div>

    <!-- Farm Reports Sub-tabs -->
    <ul class="nav nav-tabs" id="reportsTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="performance-tab" data-bs-toggle="tab" data-bs-target="#performance" type="button" role="tab">
                <i class="bi bi-speedometer2 me-1"></i> Performance Dashboards
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="partner-reports-tab" data-bs-toggle="tab" data-bs-target="#partner-reports" type="button" role="tab">
                <i class="bi bi-people me-1"></i> Partner Reports
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="compliance-tab" data-bs-toggle="tab" data-bs-target="#compliance" type="button" role="tab">
                <i class="bi bi-shield-check me-1"></i> Compliance & Veterinary
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="audit-tab" data-bs-toggle="tab" data-bs-target="#audit" type="button" role="tab">
                <i class="bi bi-clipboard-data me-1"></i> Audit Trails
            </button>
        </li>
    </ul>

    <!-- Farm Reports Tab Content -->
    <div class="tab-content mt-3" id="reportsTabContent">
        
        <!-- Performance Dashboards Tab -->
        <div class="tab-pane fade show active" id="performance" role="tabpanel" aria-labelledby="performance-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Farm Performance Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-success display-6">18.5%</div>
                                        <small class="text-muted">Average ROI</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-info display-6">64%</div>
                                        <small class="text-muted">Breeding Success</small>
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
                                        <div class="text-danger display-6">2.1%</div>
                                        <small class="text-muted">Mortality Rate</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-success text-white">
                                            <h6 class="mb-0">Herd Growth Trends</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container" style="height: 250px;">
                                                <!-- Herd growth chart would go here -->
                                                <div class="text-center text-muted p-4">
                                                    <i class="bi bi-graph-up display-1 d-block mb-3"></i>
                                                    <h6>Herd Growth Chart</h6>
                                                    <p>Monthly growth trends and projections</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-info text-white">
                                            <h6 class="mb-0">Financial Performance</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="chart-container" style="height: 250px;">
                                                <!-- Financial performance chart would go here -->
                                                <div class="text-center text-muted p-4">
                                                    <i class="bi bi-cash-stack display-1 d-block mb-3"></i>
                                                    <h6>Revenue vs Expenses</h6>
                                                    <p>Monthly financial performance analysis</p>
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

        <!-- Partner Reports Tab -->
        <div class="tab-pane fade" id="partner-reports" role="tabpanel" aria-labelledby="partner-reports-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Partner Summary Reports</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6>Generate Partner Report</h6>
                                            <div class="mb-3">
                                                <label class="form-label">Select Partner</label>
                                                <select class="form-select">
                                                    <option>All Partners</option>
                                                    <option>John Smith</option>
                                                    <option>Sarah Johnson</option>
                                                    <option>Active Partners Only</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Report Period</label>
                                                <select class="form-select">
                                                    <option>Last 30 Days</option>
                                                    <option>Last Quarter</option>
                                                    <option>Last 6 Months</option>
                                                    <option>Year to Date</option>
                                                    <option>Custom Range</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Report Type</label>
                                                <select class="form-select">
                                                    <option>Investment Summary</option>
                                                    <option>ROI Analysis</option>
                                                    <option>Portfolio Performance</option>
                                                    <option>Comprehensive Report</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-success w-100">
                                                <i class="bi bi-file-earmark-pdf me-1"></i> Generate PDF Report
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6>Recent Generated Reports</h6>
                                            <div class="list-group">
                                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>Q3 Partner Summary</strong>
                                                        <div class="text-muted">Generated: Nov 1, 2024</div>
                                                    </div>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>John Smith - Portfolio</strong>
                                                        <div class="text-muted">Generated: Oct 28, 2024</div>
                                                    </div>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-download"></i>
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

        <!-- Compliance & Veterinary Tab -->
        <div class="tab-pane fade" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Compliance Reports</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select">
                                    <option>Vaccination Records</option>
                                    <option>Health Inspection</option>
                                    <option>Medication Logs</option>
                                    <option>Animal Welfare</option>
                                    <option>Export Compliance</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time Period</label>
                                <select class="form-select">
                                    <option>Last 30 Days</option>
                                    <option>Last 90 Days</option>
                                    <option>This Year</option>
                                    <option>Custom Range</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Format</label>
                                <select class="form-select">
                                    <option>PDF Document</option>
                                    <option>Excel Spreadsheet</option>
                                    <option>CSV Data</option>
                                </select>
                            </div>
                            <button class="btn btn-warning w-100">
                                <i class="bi bi-file-earmark-text me-1"></i> Generate Compliance Report
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Veterinary Reports</h6>
                        </div>
                        <div class="card-body">
                            <div class="veterinary-stats">
                                <div class="row text-center mb-4">
                                    <div class="col-6">
                                        <div class="border rounded p-3">
                                            <div class="text-success display-6">92%</div>
                                            <small class="text-muted">Herd Health</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="border rounded p-3">
                                            <div class="text-primary display-6">24</div>
                                            <small class="text-muted">Treatments This Month</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="treatment-breakdown">
                                    <h6>Treatment Types</h6>
                                    <div class="mb-2">
                                        <span>Vaccinations:</span>
                                        <span class="float-end fw-bold">12</span>
                                    </div>
                                    <div class="mb-2">
                                        <span>Deworming:</span>
                                        <span class="float-end fw-bold">8</span>
                                    </div>
                                    <div class="mb-2">
                                        <span>Injury Treatment:</span>
                                        <span class="float-end fw-bold">3</span>
                                    </div>
                                    <div>
                                        <span>Illness Treatment:</span>
                                        <span class="float-end fw-bold">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Audit Trails Tab -->
        <div class="tab-pane fade" id="audit" role="tabpanel" aria-labelledby="audit-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">System Audit Trail</h6>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Timestamp</th>
                                            <th>User</th>
                                            <th>Action</th>
                                            <th>Module</th>
                                            <th>Details</th>
                                            <th>IP Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024 14:23</td>
                                            <td>Mikey Admin</td>
                                            <td>Added Goat</td>
                                            <td>Livestock</td>
                                            <td>Added GT-201 - New Kid</td>
                                            <td>192.168.1.45</td>
                                        </tr>
                                        <tr>
                                            <td>Nov 10, 2024 11:15</td>
                                            <td>Kwame Staff</td>
                                            <td>Recorded Sale</td>
                                            <td>Sales</td>
                                            <td>Sold GT-156 for ₵2,400</td>
                                            <td>192.168.1.67</td>
                                        </tr>
                                        <tr>
                                            <td>Nov 10, 2024 09:42</td>
                                            <td>Ama Vet</td>
                                            <td>Updated Health</td>
                                            <td>Health</td>
                                            <td>Treatment for GT-015</td>
                                            <td>192.168.1.89</td>
                                        </tr>
                                        <tr>
                                            <td>Nov 9, 2024 16:30</td>
                                            <td>Mikey Admin</td>
                                            <td>Added Partner</td>
                                            <td>Partners</td>
                                            <td>Registered new investor</td>
                                            <td>192.168.1.45</td>
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