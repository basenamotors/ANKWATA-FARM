<!-- ANKWATA FARM FMS - DASHBOARD -->
<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <!-- Farm Overview Metrics -->
    <div class="row g-3 mb-4">
        <!-- Farm Health & Capacity -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-heart-pulse"></i> Farm Health</span>
                    <span class="badge bg-light text-dark">Live</span>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="capacity-gauge">
                                <canvas id="farmCapacityGauge" width="100" height="100"></canvas>
                                <div class="gauge-value">78%</div>
                            </div>
                            <small class="text-muted d-block">Farm Capacity</small>
                            <span class="badge bg-info">312/400 Goats</span>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="health-gauge">
                                <canvas id="herdHealthGauge" width="100" height="100"></canvas>
                                <div class="gauge-value">92%</div>
                            </div>
                            <small class="text-muted d-block">Herd Health</small>
                            <span class="badge bg-success">Healthy</span>
                        </div>
                    </div>
                    <div class="farm-metrics">
                        <div class="metric-item">
                            <span>Breeding Rate:</span>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" style="width: 64%"></div>
                            </div>
                            <small>64% Success</small>
                        </div>
                        <div class="metric-item">
                            <span>Feed Inventory:</span>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                            <small>15/30 Days Left</small>
                        </div>
                        <div class="metric-item">
                            <span>Partner Satisfaction:</span>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                            <small>4.8/5 Rating</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Overview -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-cash-stack"></i> Financial Overview</span>
                    <span class="badge bg-light text-dark">This Month</span>
                </div>
                <div class="card-body">
                    <div class="financial-metrics">
                        <div class="row">
                            <div class="col-6">
                                <div class="metric-box">
                                    <small>Total Revenue</small>
                                    <h5 class="text-success">₵45,800</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="metric-box">
                                    <small>Total Expenses</small>
                                    <h5 class="text-danger">₵18,200</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="metric-box">
                                    <small>Net Profit</small>
                                    <h5 class="text-primary">₵27,600</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="metric-box">
                                    <small>Active Partners</small>
                                    <h5>48</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-info p-2 mt-2 mb-0 d-flex align-items-center">
                        <i class="bi bi-info-circle me-2"></i>
                        <small>₵12,400 in pending partner payouts</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Feed -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-activity"></i> Recent Activity</span>
                    <span class="badge bg-light text-dark">Live</span>
                </div>
                <div class="card-body p-0">
                    <div class="activity-feed" style="max-height: 300px;">
                        <div class="activity-item p-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="activity-icon bg-success rounded-circle p-2 me-3">
                                    <i class="bi bi-cart-check text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <strong>Goat Sale Completed</strong>
                                    <small class="d-block text-muted">Sold "Thunder" for ₵2,400</small>
                                    <small class="text-muted">2 minutes ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item p-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="activity-icon bg-info rounded-circle p-2 me-3">
                                    <i class="bi bi-heart-pulse text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <strong>Health Check</strong>
                                    <small class="d-block text-muted">Vaccination for 12 goats completed</small>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item p-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="activity-icon bg-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-person-plus text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <strong>New Partner</strong>
                                    <small class="d-block text-muted">John Doe invested ₵5,000</small>
                                    <small class="text-muted">3 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item p-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="activity-icon bg-success rounded-circle p-2 me-3">
                                    <i class="bi bi-gender-ambiguous text-white"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <strong>New Births</strong>
                                    <small class="d-block text-muted">3 kids born to "Bella"</small>
                                    <small class="text-muted">5 hours ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts & Analytics -->
    <div class="row g-3 mb-4">
        <!-- Revenue Trends -->
        <div class="col-lg-6">
          <div class="card h-100 revenueTrendsCard">
            <div class="card-header d-flex justify-content-between align-items-center">
              <span><i class="bi bi-graph-up"></i> Revenue Trends</span>
              <div class="btn-group btn-group-sm">
                <button class="btn btn-outline-primary active" aria-label="Monthly View">Monthly</button>
                <button class="btn btn-outline-primary" aria-label="Quarterly View">Quarterly</button>
                <button class="btn btn-outline-primary" aria-label="Yearly View">Yearly</button>
              </div>
            </div>
            <div class="card-body p-2">
              <div class="chart-container" style="height: 250px;">
                <canvas id="revenueChart" aria-label="Revenue Chart"></canvas>
              </div>
              <div class="chart-controls mt-2 d-flex justify-content-between align-items-center">
                <small class="text-muted">Last 12 Months</small>
                <input type="range" class="form-range" style="width: 80%;" id="revenueRange" />
                <button class="btn btn-sm btn-outline-secondary" aria-label="Expand Chart">
                  <i class="bi bi-arrows-angle-expand"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Herd Growth Analytics -->
        <div class="col-lg-6">
            <div class="card h-100 herdGrowthCard">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-diagram-3"></i> Herd Growth</span>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-primary active">Births</button>
                        <button class="btn btn-outline-primary">Sales</button>
                        <button class="btn btn-outline-primary">Health</button>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="chart-container" style="height: 250px;">
                        <canvas id="herdGrowthChart"></canvas>
                    </div>
                    <div class="growth-controls mt-2 d-flex justify-content-between">
                        <select class="form-select form-select-sm" style="width: 45%;">
                            <option>Last 6 Months</option>
                            <option>Last Year</option>
                            <option>All Time</option>
                        </select>
                        <select class="form-select form-select-sm" style="width: 45%;" data-type="breed">
                            <option>All Breeds</option>
                            <option>Boer Goats</option>
                            <option>Local Breeds</option>
                        </select>
                        <button class="btn btn-sm btn-outline-secondary" aria-label="Expand Chart">
                          <i class="bi bi-arrows-angle-expand"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats & Actions -->
    <div class="row g-3">
        <!-- Partner Performance -->
        <div class="col-lg-8">
            <div class="card topPerformingPartners">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-trophy"></i> Top Performing Partners</span>
                    <div class="d-flex" style="width: 40%;">
                        <input type="text" class="form-control form-control-sm me-2" placeholder="Search partners...">
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-funnel"></i>
                        </button>
                        <div class="spinner ms-2"></div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Partner Name</th>
                                    <th>Investment</th>
                                    <th>Goats Owned</th>
                                    <th>ROI</th>
                                    <th>Total Returns</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="24" height="24" alt="Avatar">
                                            <span>John Smith</span>
                                        </div>
                                    </td>
                                    <td>₵15,000</td>
                                    <td>8</td>
                                    <td><span class="badge bg-success">+24%</span></td>
                                    <td>₵3,600</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="Payout">
                                            <i class="bi bi-cash-coin"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="assets/files/images/default_profile.jpg" class="rounded-circle me-2" width="24" height="24" alt="Avatar">
                                            <span>Sarah Johnson</span>
                                        </div>
                                    </td>
                                    <td>₵8,000</td>
                                    <td>4</td>
                                    <td><span class="badge bg-success">+18%</span></td>
                                    <td>₵1,440</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-success" title="Payout">
                                            <i class="bi bi-cash-coin"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <select class="form-select form-select-sm" style="width:auto;" data-type="breed">
                        <option value="all">All</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                    </select>
                    <small class="text-muted">No records available to show.</small>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-secondary" aria-label="Previous">
                            <i class="bi bi-rewind-circle-fill"></i>
                        </button>
                        <button class="btn btn-outline-secondary" aria-label="Next">
                            <i class="bi bi-fast-forward-circle-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions & Alerts -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-lightning-charge"></i> Quick Actions</span>
                    <span class="badge bg-danger">3 Alerts</span>
                </div>
                <div class="card-body" style="max-height: 400px;">
                    <div class="quick-actions">
                        <button class="btn btn-primary w-100 mb-2">
                            <i class="bi bi-plus-circle"></i> Add New Goat
                        </button>
                        <button class="btn btn-success w-100 mb-2">
                            <i class="bi bi-person-plus"></i> Register Partner
                        </button>
                        <button class="btn btn-info w-100 mb-2">
                            <i class="bi bi-cart-plus"></i> Record Sale
                        </button>
                        <button class="btn btn-warning w-100 mb-2">
                            <i class="bi bi-clipboard-pulse"></i> Health Check
                        </button>
                    </div>
                    
                    <div class="alerts-section mt-3">
                        <h6 class="border-bottom pb-2">Active Alerts</h6>
                        <div class="alert alert-warning p-2 mb-2">
                            <i class="bi bi-exclamation-triangle"></i>
                            <small>Low feed inventory (3 days left)</small>
                        </div>
                        <div class="alert alert-danger p-2 mb-2">
                            <i class="bi bi-heartbreak"></i>
                            <small>2 goats need medical attention</small>
                        </div>
                        <div class="alert alert-info p-2">
                            <i class="bi bi-cash-coin"></i>
                            <small>5 partner payouts pending</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>