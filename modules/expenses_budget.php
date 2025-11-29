<div class="tab-pane fade" id="expenses" role="tabpanel" aria-labelledby="expenses-tab">
    <!-- Expenses & Budget Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-coin text-warning me-2"></i> Expenses & Budget</h4>
        <div class="btn-group">
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Add Expense
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-spreadsheet me-1"></i> Export Report
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-graph-up me-1"></i> Budget Analysis
            </button>
        </div>
    </div>

    <!-- Expenses & Budget Sub-tabs -->
    <ul class="nav nav-tabs" id="expensesTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="expense-tracking-tab" data-bs-toggle="tab" data-bs-target="#expense-tracking" type="button" role="tab">
                <i class="bi bi-receipt me-1"></i> Expense Tracking
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="budget-management-tab" data-bs-toggle="tab" data-bs-target="#budget-management" type="button" role="tab">
                <i class="bi bi-piggy-bank me-1"></i> Budget Management
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="cost-analysis-tab" data-bs-toggle="tab" data-bs-target="#cost-analysis" type="button" role="tab">
                <i class="bi bi-pie-chart me-1"></i> Cost Analysis
            </button>
        </li>
    </ul>

    <!-- Expenses & Budget Tab Content -->
    <div class="tab-content mt-3" id="expensesTabContent">
        
        <!-- Expense Tracking Tab -->
        <div class="tab-pane fade show active" id="expense-tracking" role="tabpanel" aria-labelledby="expense-tracking-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Quick Expense Entry</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control" placeholder="₵0.00">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select">
                                    <option>Feed & Nutrition</option>
                                    <option>Veterinary Care</option>
                                    <option>Labor & Staff</option>
                                    <option>Equipment</option>
                                    <option>Medications</option>
                                    <option>Utilities</option>
                                    <option>Transport</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" placeholder="What was this expense for?">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Allocate to Partner</label>
                                <select class="form-select">
                                    <option>Farm General</option>
                                    <option>John Smith</option>
                                    <option>Sarah Johnson</option>
                                    <option>Multiple Partners</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-save me-1"></i> Save Expense
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Recent Expenses</h6>
                            <div class="d-flex" style="width: 40%;">
                                <input type="text" class="form-control form-control-sm me-2" placeholder="Search expenses...">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-funnel"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Amount</th>
                                            <th>Allocated To</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024</td>
                                            <td>Goat Feed Purchase</td>
                                            <td><span class="badge bg-info">Feed & Nutrition</span></td>
                                            <td class="text-danger">-₵1,200</td>
                                            <td>Multiple Partners</td>
                                            <td><span class="badge bg-success">Paid</span></td>
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
                                            <td>Vaccination Supplies</td>
                                            <td><span class="badge bg-warning">Veterinary Care</span></td>
                                            <td class="text-danger">-₵450</td>
                                            <td>Farm General</td>
                                            <td><span class="badge bg-success">Paid</span></td>
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

        <!-- Budget Management Tab -->
        <div class="tab-pane fade" id="budget-management" role="tabpanel" aria-labelledby="budget-management-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Monthly Budget Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="budget-summary">
                                <div class="row text-center mb-4">
                                    <div class="col-6">
                                        <div class="border rounded p-3">
                                            <div class="text-primary display-6">₵25,000</div>
                                            <small class="text-muted">Monthly Budget</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="border rounded p-3">
                                            <div class="text-warning display-6">₵18,200</div>
                                            <small class="text-muted">Spent This Month</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="budget-categories">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Feed & Nutrition</span>
                                            <small>₵8,200 / ₵10,000</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" style="width: 82%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Veterinary Care</span>
                                            <small>₵3,500 / ₵5,000</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>Labor & Staff</span>
                                            <small>₵4,800 / ₵6,000</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Set Budget Limits</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Feed & Nutrition</label>
                                <input type="number" class="form-control" value="10000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Veterinary Care</label>
                                <input type="number" class="form-control" value="5000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Labor & Staff</label>
                                <input type="number" class="form-control" value="6000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Equipment & Maintenance</label>
                                <input type="number" class="form-control" value="2000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Medications</label>
                                <input type="number" class="form-control" value="1500">
                            </div>
                            <button class="btn btn-warning w-100">
                                <i class="bi bi-save me-1"></i> Update Budget
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cost Analysis Tab -->
        <div class="tab-pane fade" id="cost-analysis" role="tabpanel" aria-labelledby="cost-analysis-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Cost Per Goat Analysis</h6>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-primary display-6">₵58.33</div>
                                        <small class="text-muted">Avg. Monthly Cost/Goat</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-success display-6">₵700</div>
                                        <small class="text-muted">Avg. Annual Cost/Goat</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-warning display-6">42%</div>
                                        <small class="text-muted">Feed Cost Percentage</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-info display-6">19%</div>
                                        <small class="text-muted">Veterinary Cost Percentage</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="chart-container" style="height: 300px;">
                                <!-- Cost analysis chart would go here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-pie-chart display-1 d-block mb-3"></i>
                                    <h5>Expense Distribution Chart</h5>
                                    <p>Visual breakdown of costs by category and partner allocation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>