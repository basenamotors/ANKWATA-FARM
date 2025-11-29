<div class="tab-pane fade" id="investor-payouts" role="tabpanel" aria-labelledby="investor-payouts-tab">
    <!-- Investor Payouts Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-graph-up text-success me-2"></i> Investor Payouts</h4>
        <div class="btn-group">
            <button class="btn btn-success btn-sm">
                <i class="bi bi-cash-coin me-1"></i> Process Payouts
            </button>
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-clock-history me-1"></i> Payout History
            </button>
            <button class="btn btn-outline-warning btn-sm">
                <i class="bi bi-gear me-1"></i> Payout Settings
            </button>
        </div>
    </div>

    <!-- Investor Payouts Sub-tabs -->
    <ul class="nav nav-tabs" id="payoutsTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pending-payouts-tab" data-bs-toggle="tab" data-bs-target="#pending-payouts" type="button" role="tab">
                <i class="bi bi-clock me-1"></i> Pending Payouts
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="payout-history-tab" data-bs-toggle="tab" data-bs-target="#payout-history" type="button" role="tab">
                <i class="bi bi-list-check me-1"></i> Payout History
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="payout-settings-tab" data-bs-toggle="tab" data-bs-target="#payout-settings" type="button" role="tab">
                <i class="bi bi-gear me-1"></i> Payout Settings
            </button>
        </li>
    </ul>

    <!-- Investor Payouts Tab Content -->
    <div class="tab-content mt-3" id="payoutsTabContent">
        
        <!-- Pending Payouts Tab -->
        <div class="tab-pane fade show active" id="pending-payouts" role="tabpanel" aria-labelledby="pending-payouts-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Pending Payouts - ₵12,400 Total</h6>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Partner</th>
                                            <th>Goats Sold</th>
                                            <th>Sale Amount</th>
                                            <th>Expenses</th>
                                            <th>Farm Commission</th>
                                            <th>Partner Share</th>
                                            <th>Sale Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <strong>John Smith</strong>
                                                </div>
                                            </td>
                                            <td>2 goats</td>
                                            <td>₵4,800</td>
                                            <td>₵800</td>
                                            <td>₵600</td>
                                            <td class="text-success"><strong>₵3,400</strong></td>
                                            <td>Nov 10, 2024</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="bi bi-cash-coin me-1"></i> Pay Now
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <strong>Sarah Johnson</strong>
                                                </div>
                                            </td>
                                            <td>1 goat</td>
                                            <td>₵2,400</td>
                                            <td>₵400</td>
                                            <td>₵300</td>
                                            <td class="text-success"><strong>₵1,700</strong></td>
                                            <td>Nov 9, 2024</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="bi bi-cash-coin me-1"></i> Pay Now
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="mt-3 p-3 bg-light rounded">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <strong>Total Pending:</strong>
                                        <div class="text-warning display-6">₵12,400</div>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Partners Due:</strong>
                                        <div class="text-primary display-6">8</div>
                                    </div>
                                    <div class="col-md-4">
                                        <strong>Avg. Payout:</strong>
                                        <div class="text-info display-6">₵1,550</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payout History Tab -->
        <div class="tab-pane fade" id="payout-history" role="tabpanel" aria-labelledby="payout-history-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Payout History</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Paid</th>
                                            <th>Partner</th>
                                            <th>Amount</th>
                                            <th>Method</th>
                                            <th>Reference</th>
                                            <th>Goats Sold</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nov 5, 2024</td>
                                            <td>John Smith</td>
                                            <td class="text-success">₵2,800</td>
                                            <td>Bank Transfer</td>
                                            <td><small>REF-7845</small></td>
                                            <td>1 goat</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-receipt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oct 28, 2024</td>
                                            <td>Sarah Johnson</td>
                                            <td class="text-success">₵1,900</td>
                                            <td>Mobile Money</td>
                                            <td><small>REF-7821</small></td>
                                            <td>1 goat</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-receipt"></i>
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

        <!-- Payout Settings Tab -->
        <div class="tab-pane fade" id="payout-settings" role="tabpanel" aria-labelledby="payout-settings-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Payout Configuration</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Farm Commission Rate</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" value="15" min="0" max="50">
                                    <span class="input-group-text">%</span>
                                </div>
                                <small class="text-muted">Percentage of profit kept by the farm</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payout Frequency</label>
                                <select class="form-select">
                                    <option>Immediately after sale</option>
                                    <option>Weekly</option>
                                    <option>Bi-weekly</option>
                                    <option>Monthly</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Minimum Payout Amount</label>
                                <input type="number" class="form-control" value="500">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Default Payment Method</label>
                                <select class="form-select">
                                    <option>Bank Transfer</option>
                                    <option>Mobile Money</option>
                                    <option>Cash</option>
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
                            <h6 class="mb-0">Automated Payout Rules</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="autoPayout" checked>
                                    <label class="form-check-label" for="autoPayout">
                                        Enable Auto Payouts
                                    </label>
                                </div>
                                <small class="text-muted">Automatically process payouts when criteria are met</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                                    <label class="form-check-label" for="emailNotifications">
                                        Send Payout Notifications
                                    </label>
                                </div>
                                <small class="text-muted">Notify partners when payouts are processed</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="taxDeduction">
                                    <label class="form-check-label" for="taxDeduction">
                                        Automatic Tax Deduction
                                    </label>
                                </div>
                                <small class="text-muted">Deduct applicable taxes from payouts</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="payoutReports" checked>
                                    <label class="form-check-label" for="payoutReports">
                                        Generate Monthly Reports
                                    </label>
                                </div>
                                <small class="text-muted">Auto-generate payout reports for accounting</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>