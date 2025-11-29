<div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="tasks-tab">
    <!-- Farm Operations Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-gear text-warning me-2"></i> Farm Operations</h4>
        <div class="btn-group">
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-plus-circle me-1"></i> Create Task
            </button>
            <button class="btn btn-success btn-sm">
                <i class="bi bi-cart-plus me-1"></i> Order Supplies
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-people me-1"></i> Manage Staff
            </button>
        </div>
    </div>

    <!-- Farm Operations Sub-tabs -->
    <ul class="nav nav-tabs" id="operationsTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="task-manager-tab" data-bs-toggle="tab" data-bs-target="#task-manager" type="button" role="tab">
                <i class="bi bi-check2-square me-1"></i> Task Manager
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory" type="button" role="tab">
                <i class="bi bi-clipboard-data me-1"></i> Inventory Alerts
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="suppliers-tab" data-bs-toggle="tab" data-bs-target="#suppliers" type="button" role="tab">
                <i class="bi bi-truck me-1"></i> Supplier Management
            </button>
        </li>
    </ul>

    <!-- Farm Operations Tab Content -->
    <div class="tab-content mt-3" id="operationsTabContent">
        
        <!-- Task Manager Tab -->
        <div class="tab-pane fade show active" id="task-manager" role="tabpanel" aria-labelledby="task-manager-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Staff Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <div class="display-6 text-primary">8</div>
                                <small class="text-muted">Active Staff</small>
                            </div>
                            <div class="staff-list">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-3" width="40" height="40">
                                    <div class="flex-grow-1">
                                        <strong>Kwame Appiah</strong><br>
                                        <small class="text-muted">Farm Manager</small>
                                    </div>
                                    <span class="badge bg-success">Online</span>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-3" width="40" height="40">
                                    <div class="flex-grow-1">
                                        <strong>Ama Serwaa</strong><br>
                                        <small class="text-muted">Veterinary Assistant</small>
                                    </div>
                                    <span class="badge bg-success">Online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Today's Tasks</h6>
                            <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                            <span class="badge bg-warning">5 Pending</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Assigned To</th>
                                            <th>Priority</th>
                                            <th>Due Time</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Morning Feeding</td>
                                            <td>Kwame Appiah</td>
                                            <td><span class="badge bg-success">Low</span></td>
                                            <td>06:00 AM</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Health Check - GT-015</td>
                                            <td>Ama Serwaa</td>
                                            <td><span class="badge bg-danger">High</span></td>
                                            <td>10:00 AM</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Clean Barn Section A</td>
                                            <td>Kofi Mensah</td>
                                            <td><span class="badge bg-warning">Medium</span></td>
                                            <td>02:00 PM</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
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

        <!-- Inventory Alerts Tab -->
        <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Inventory Alerts</h6>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>Critical Alerts</strong>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item list-group-item-danger">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>Goat Feed</strong>
                                            <div class="text-muted">Only 3 days supply left</div>
                                        </div>
                                        <button class="btn btn-sm btn-danger">Order Now</button>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-warning">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>CD&T Vaccine</strong>
                                            <div class="text-muted">Low stock - 12 doses left</div>
                                        </div>
                                        <button class="btn btn-sm btn-warning">Reorder</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Inventory Overview</h6>
                        </div>
                        <div class="card-body">
                            <div class="inventory-stats">
                                <div class="mb-3">
                                    <strong>Feed Stock:</strong>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-danger" style="width: 15%">15%</div>
                                    </div>
                                    <small class="text-muted">150kg / 1000kg capacity</small>
                                </div>
                                <div class="mb-3">
                                    <strong>Medication Stock:</strong>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-warning" style="width: 30%">30%</div>
                                    </div>
                                    <small class="text-muted">12 doses remaining</small>
                                </div>
                                <div class="mb-3">
                                    <strong>Equipment:</strong>
                                    <div class="progress mt-1">
                                        <div class="progress-bar bg-success" style="width: 85%">85%</div>
                                    </div>
                                    <small class="text-muted">All equipment operational</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Supplier Management Tab -->
        <div class="tab-pane fade" id="suppliers" role="tabpanel" aria-labelledby="suppliers-tab">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Supplier Management</h6>
                            <div class=" d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-circle me-1"></i> Add Supplier
                                </button>
                                <input type="text" class="form-control form-control-sm w-auto" placeholder="Search...">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th>Supplier</th>
                                            <th>Product</th>
                                            <th>Rating</th>
                                            <th>Last Order</th>
                                            <th>Avg. Price</th>
                                            <th>Delivery Time</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>AgriFeed Ghana</strong><br>
                                                <small class="text-muted">Kumasi Branch</small>
                                            </td>
                                            <td>Goat Feed</td>
                                            <td>
                                                <div class="text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                </div>
                                            </td>
                                            <td>Nov 5, 2024</td>
                                            <td>₵45/kg</td>
                                            <td>2 days</td>
                                            <td><span class="badge bg-success">Preferred</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Order</button>
                                                <button class="btn btn-sm btn-outline-info">Contact</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>VetCare Supplies</strong><br>
                                                <small class="text-muted">Accra Main</small>
                                            </td>
                                            <td>Medications</td>
                                            <td>
                                                <div class="text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                            </td>
                                            <td>Nov 8, 2024</td>
                                            <td>₵12/dose</td>
                                            <td>3 days</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">Order</button>
                                                <button class="btn btn-sm btn-outline-info">Contact</button>
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