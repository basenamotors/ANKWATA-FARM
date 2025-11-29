<div class="tab-pane fade" id="partners" role="tabpanel" aria-labelledby="partners-tab">
    <!-- Partner Management Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-people text-primary me-2"></i> Partner Management</h4>
        <div class="btn-group">
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-person-plus me-1"></i> Add Partner
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-cash-coin me-1"></i> Process Payouts
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-envelope me-1"></i> Send Update
            </button>
        </div>
    </div>

    <!-- Partner Management Sub-tabs -->
    <ul class="nav nav-tabs" id="partnerTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="investor-portal-tab" data-bs-toggle="tab" data-bs-target="#investor-portal" type="button" role="tab">
                <i class="bi bi-speedometer2 me-1"></i> Investor Portal
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="payouts-tab" data-bs-toggle="tab" data-bs-target="#payouts" type="button" role="tab">
                <i class="bi bi-cash-stack me-1"></i> Automated Payouts
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab">
                <i class="bi bi-folder-check me-1"></i> Document Vault
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="communication-tab" data-bs-toggle="tab" data-bs-target="#communication" type="button" role="tab">
                <i class="bi bi-chat-dots me-1"></i> Communication Hub
            </button>
        </li>
    </ul>

    <!-- Partner Tab Content -->
    <div class="tab-content mt-3" id="partnerTabContent">
        
        <!-- Investor Portal Tab -->
        <div class="tab-pane fade show active" id="investor-portal" role="tabpanel" aria-labelledby="investor-portal-tab">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Partner Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <div class="display-6 text-primary">48</div>
                                <small class="text-muted">Active Partners</small>
                            </div>
                            <div class="mb-3">
                                <strong>Total Investment:</strong> ₵245,800
                            </div>
                            <div class="mb-3">
                                <strong>Average ROI:</strong> 18.5%
                            </div>
                            <div class="mb-3">
                                <strong>Active Goats:</strong> 156
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Partner Portfolio Overview</h6>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Partner</th>
                                            <th>Investment</th>
                                            <th>Goats Owned</th>
                                            <th>Current Value</th>
                                            <th>ROI</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="32" height="32">
                                                    <div>
                                                        <strong>John Smith</strong><br>
                                                        <small class="text-muted">Joined: Jan 2024</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>₵15,000</td>
                                            <td>8</td>
                                            <td>₵18,600</td>
                                            <td><span class="badge bg-success">+24%</span></td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
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

        <!-- Automated Payouts Tab -->
        <div class="tab-pane fade" id="payouts" role="tabpanel" aria-labelledby="payouts-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Pending Payouts</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle me-1"></i>
                                <strong>₵12,400</strong> in pending payouts
                            </div>
                            <div class="list-group">
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>John Smith</strong>
                                        <div class="text-muted">From sale of 2 goats</div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-success">₵3,200</div>
                                        <button class="btn btn-sm btn-success mt-1">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Payout Calculator</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Sale Amount</label>
                                <input type="number" class="form-control" value="2400">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expenses</label>
                                <input type="number" class="form-control" value="400">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Farm Commission (15%)</label>
                                <input type="number" class="form-control" value="300" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Partner Share</label>
                                <input type="number" class="form-control" value="1700" readonly>
                            </div>
                            <button class="btn btn-primary w-100">Calculate Payout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Document Vault Tab -->
        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Document Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i class="bi bi-file-earmark-text me-2"></i> Partnership Agreements
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-person-check me-2"></i> KYC Documents
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-cash-coin me-2"></i> Financial Reports
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="bi bi-shield-check me-2"></i> Compliance Certificates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Document Library</h6>
                            <div class=" d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm btn-primary">
                                <i class="bi bi-upload me-1"></i> Upload Document
                            </button>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Document Name</th>
                                            <th>Partner</th>
                                            <th>Type</th>
                                            <th>Upload Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Partnership_Agreement_JohnSmith.pdf</td>
                                            <td>John Smith</td>
                                            <td>Contract</td>
                                            <td>Jan 15, 2024</td>
                                            <td><span class="badge bg-success">Verified</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-danger">Delete</button>
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

        <!-- Communication Hub Tab -->
        <div class="tab-pane fade" id="communication" role="tabpanel" aria-labelledby="communication-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Recent Conversations</h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-3" width="40" height="40">
                                        <div class="flex-grow-1">
                                            <strong>John Smith</strong>
                                            <div class="text-muted">Looking good! When is the next...</div>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>
                                        <span class="badge bg-primary">3</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Message Center</h6>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary">New Message</button>
                                <button class="btn btn-outline-success">Broadcast</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="message-thread" style="height: 300px; overflow-y: auto; border: 1px solid #e9ecef; padding: 15px; border-radius: 5px;">
                                <div class="message received mb-3">
                                    <div class="message-sender text-muted">John Smith</div>
                                    <div class="message-content bg-light p-3 rounded">The goats are looking great! When is the next health check scheduled?</div>
                                    <div class="message-time text-muted small">2 hours ago</div>
                                </div>
                                <div class="message sent mb-3 text-end">
                                    <div class="message-sender text-muted">You</div>
                                    <div class="message-content bg-primary text-white p-3 rounded">Next health check is scheduled for Friday. All goats are doing well!</div>
                                    <div class="message-time text-muted small">1 hour ago</div>
                                </div>
                            </div>
                            <div class="message-input mt-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type your message...">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>