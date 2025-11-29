<div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
    <!-- Sales & Finance Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-cash-stack text-success me-2"></i> Sales & Finance</h4>
        <div class="btn-group">
            <button class="btn btn-success btn-sm">
                <i class="bi bi-cart-plus me-1"></i> Record Sale
            </button>
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-graph-up me-1"></i> Financial Reports
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-calculator me-1"></i> Profit Calculator
            </button>
        </div>
    </div>

    <!-- Sales & Finance Sub-tabs -->
    <ul class="nav nav-tabs" id="salesTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="smart-pricing-tab" data-bs-toggle="tab" data-bs-target="#smart-pricing" type="button" role="tab">
                <i class="bi bi-tags me-1"></i> Smart Pricing
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profit-calculator-tab" data-bs-toggle="tab" data-bs-target="#profit-calculator" type="button" role="tab">
                <i class="bi bi-calculator me-1"></i> Profit Calculator
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="expense-allocation-tab" data-bs-toggle="tab" data-bs-target="#expense-allocation" type="button" role="tab">
                <i class="bi bi-pie-chart me-1"></i> Expense Allocation
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="financial-reports-tab" data-bs-toggle="tab" data-bs-target="#financial-reports" type="button" role="tab">
                <i class="bi bi-file-earmark-bar-graph me-1"></i> Financial Reports
            </button>
        </li>
    </ul>

    <!-- Sales & Finance Tab Content -->
    <div class="tab-content mt-3" id="salesTabContent">
        
        <!-- Smart Pricing Tab -->
        <div class="tab-pane fade show active" id="smart-pricing" role="tabpanel" aria-labelledby="smart-pricing-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Market-Based Pricing</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Goat</label>
                                <select class="form-select">
                                    <option>GT-001 - Thunder (Boer, 45kg)</option>
                                    <option>GT-002 - Bella (Local, 38kg)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Current Weight (kg)</label>
                                <input type="number" class="form-control" value="45">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Breed</label>
                                <select class="form-select">
                                    <option>Boer</option>
                                    <option>Local Breed</option>
                                    <option>Mixed</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Market Rate (per kg)</label>
                                <input type="number" class="form-control" value="55">
                            </div>
                            <div class="alert alert-info">
                                <strong>Suggested Price: ₵2,475</strong><br>
                                <small>Based on current market rates and goat characteristics</small>
                            </div>
                            <button class="btn btn-primary w-100">Apply Pricing</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Recent Market Prices</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Breed</th>
                                            <th>Avg. Price/kg</th>
                                            <th>Trend</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Boer</td>
                                            <td>₵55</td>
                                            <td><span class="badge bg-success">↑ 5%</span></td>
                                            <td>Today</td>
                                        </tr>
                                        <tr>
                                            <td>Local Breed</td>
                                            <td>₵48</td>
                                            <td><span class="badge bg-warning">→ Stable</span></td>
                                            <td>Today</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profit Calculator Tab -->
        <div class="tab-pane fade" id="profit-calculator" role="tabpanel" aria-labelledby="profit-calculator-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Partner Profit Calculator</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Sale Price</label>
                                        <input type="number" class="form-control" value="2400">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Direct Expenses</label>
                                        <input type="number" class="form-control" value="400">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Farm Commission (%)</label>
                                        <input type="number" class="form-control" value="15" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Partner Share (%)</label>
                                        <input type="number" class="form-control" value="85" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="calculation-results mt-4 p-3 bg-light rounded">
                                <h5 class="text-center">Profit Distribution</h5>
                                <div class="row text-center">
                                    <div class="col-6">
                                        <div class="text-success">
                                            <strong>Partner Receives</strong>
                                            <div class="display-6">₵1,700</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-primary">
                                            <strong>Farm Commission</strong>
                                            <div class="display-6">₵300</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Quick Calculations</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <strong>Total Sales This Month:</strong> ₵45,800
                            </div>
                            <div class="mb-3">
                                <strong>Total Partner Payouts:</strong> ₵32,300
                            </div>
                            <div class="mb-3">
                                <strong>Farm Revenue:</strong> ₵13,500
                            </div>
                            <div class="mb-3">
                                <strong>Average ROI per Partner:</strong> 18.5%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expense Allocation Tab -->
        <div class="tab-pane fade" id="expense-allocation" role="tabpanel" aria-labelledby="expense-allocation-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Expense Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Feed & Nutrition
                                    <span class="badge bg-primary rounded-pill">₵8,200</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Veterinary Care
                                    <span class="badge bg-info rounded-pill">₵3,500</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Labor & Staff
                                    <span class="badge bg-warning rounded-pill">₵4,800</span>
                                </div>
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    Equipment & Maintenance
                                    <span class="badge bg-secondary rounded-pill">₵1,700</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Allocate Expenses to Partners</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Expense</label>
                                <select class="form-select">
                                    <option>Vaccination - CD&T (12 goats)</option>
                                    <option>Feed Purchase (November)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control" value="1200">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Allocate to Partners</label>
                                <select multiple class="form-select">
                                    <option selected>John Smith (8 goats)</option>
                                    <option selected>Sarah Johnson (4 goats)</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">Allocate Expense</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Reports Tab -->
        <div class="tab-pane fade" id="financial-reports" role="tabpanel" aria-labelledby="financial-reports-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Financial Reports</h6>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary">This Month</button>
                                <button class="btn btn-primary">This Quarter</button>
                                <button class="btn btn-outline-primary">This Year</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-success display-6">₵45,800</div>
                                        <small class="text-muted">Total Revenue</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-danger display-6">₵18,200</div>
                                        <small class="text-muted">Total Expenses</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-primary display-6">₵27,600</div>
                                        <small class="text-muted">Net Profit</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="border rounded p-3">
                                        <div class="text-info display-6">18.5%</div>
                                        <small class="text-muted">Average ROI</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Amount</th>
                                            <th>Partner</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 10, 2024</td>
                                            <td>Goat Sale - Thunder</td>
                                            <td>Revenue</td>
                                            <td class="text-success">+₵2,400</td>
                                            <td>John Smith</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Nov 8, 2024</td>
                                            <td>Feed Purchase</td>
                                            <td>Expense</td>
                                            <td class="text-danger">-₵1,200</td>
                                            <td>Multiple</td>
                                            <td><span class="badge bg-success">Paid</span></td>
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