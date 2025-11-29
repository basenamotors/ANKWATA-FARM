<div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
    <!-- AI & IoT Integration Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><i class="bi bi-cpu text-danger me-2"></i> AI & IoT Integration</h4>
        <div class="btn-group">
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-robot me-1"></i> AI Analysis
            </button>
            <button class="btn btn-warning btn-sm">
                <i class="bi bi-rss me-1"></i> IoT Status
            </button>
            <button class="btn btn-outline-info btn-sm">
                <i class="bi bi-graph-up me-1"></i> Smart Predictions
            </button>
        </div>
    </div>

    <!-- AI & IoT Integration Sub-tabs -->
    <ul class="nav nav-tabs" id="aiIotTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="health-ai-tab" data-bs-toggle="tab" data-bs-target="#health-ai" type="button" role="tab">
                <i class="bi bi-robot me-1"></i> Health AI
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="growth-predictor-tab" data-bs-toggle="tab" data-bs-target="#growth-predictor" type="button" role="tab">
                <i class="bi bi-graph-up-arrow me-1"></i> Growth Predictor
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="smart-tags-tab" data-bs-toggle="tab" data-bs-target="#smart-tags" type="button" role="tab">
                <i class="bi bi-tags me-1"></i> Smart Tags
            </button>
        </li>
    </ul>

    <!-- AI & IoT Integration Tab Content -->
    <div class="tab-content mt-3" id="aiIotTabContent">
        
        <!-- Health AI Tab -->
        <div class="tab-pane fade show active" id="health-ai" role="tabpanel" aria-labelledby="health-ai-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            <h6 class="mb-0">AI Health Detection</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="bi bi-robot display-1 text-danger"></i>
                                <h5>Early Illness Detection</h5>
                                <p class="text-muted">AI-powered analysis of goat behavior and appearance</p>
                            </div>
                            
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>2 Potential Health Issues Detected</strong>
                            </div>
                            
                            <div class="health-alerts">
                                <div class="alert alert-info d-flex align-items-center">
                                    <i class="bi bi-thermometer-high me-3 fs-4"></i>
                                    <div>
                                        <strong>GT-015 - Temperature Anomaly</strong>
                                        <div class="text-muted">AI detected potential fever - 92% confidence</div>
                                    </div>
                                </div>
                                <div class="alert alert-warning d-flex align-items-center">
                                    <i class="bi bi-activity me-3 fs-4"></i>
                                    <div>
                                        <strong>GT-089 - Reduced Activity</strong>
                                        <div class="text-muted">Movement pattern suggests discomfort - 87% confidence</div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-danger w-100 mt-3">
                                <i class="bi bi-camera me-1"></i> Run Health Scan
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Upload Image for Analysis</h6>
                        </div>
                        <div class="card-body text-center">
                            <div class="upload-area border rounded p-5 mb-3">
                                <i class="bi bi-cloud-upload display-4 text-muted d-block mb-3"></i>
                                <h6>Drag & Drop Goat Image</h6>
                                <small class="text-muted">or click to browse</small>
                                <input type="file" class="d-none" id="healthImageUpload" accept="image/*">
                            </div>
                            
                            <div class="analysis-results d-none">
                                <h6>AI Analysis Results</h6>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" style="width: 95%">Health Score: 95%</div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-info" style="width: 88%">Weight Estimate: 44kg</div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-warning" style="width: 12%">Risk Factors: 12%</div>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <button class="btn btn-primary w-100" onclick="document.getElementById('healthImageUpload').click()">
                                    <i class="bi bi-upload me-1"></i> Upload Image
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Growth Predictor Tab -->
        <div class="tab-pane fade" id="growth-predictor" role="tabpanel" aria-labelledby="growth-predictor-tab">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h6 class="mb-0">Growth Prediction Analytics</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="height: 300px;">
                                <!-- Growth prediction chart would go here -->
                                <div class="text-center text-muted p-5">
                                    <i class="bi bi-graph-up-arrow display-1 d-block mb-3"></i>
                                    <h5>Growth Prediction Chart</h5>
                                    <p>Machine learning model predicting optimal sale timing based on historical data</p>
                                </div>
                            </div>
                            
                            <div class="row text-center mt-4">
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="text-success display-6">45kg</div>
                                        <small class="text-muted">Current Avg. Weight</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="text-primary display-6">+2.1kg</div>
                                        <small class="text-muted">Weekly Growth Rate</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="border rounded p-3">
                                        <div class="text-warning display-6">3 weeks</div>
                                        <small class="text-muted">Optimal Sale Timing</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning text-dark">
                            <h6 class="mb-0">Prediction Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Target Market Price</label>
                                <input type="number" class="form-control" value="55" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Growth Model</label>
                                <select class="form-select">
                                    <option>Standard (Historical Data)</option>
                                    <option>Enhanced (Weather + Feed)</option>
                                    <option>Premium (Real-time Monitoring)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confidence Threshold</label>
                                <input type="range" class="form-range" min="70" max="95" value="85">
                                <small class="text-muted">85% confidence required</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="includeExpenses">
                                    <label class="form-check-label" for="includeExpenses">
                                        Include Expense Projections
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-warning w-100">
                                <i class="bi bi-calculator me-1"></i> Run Prediction
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Smart Tags Tab -->
        <div class="tab-pane fade" id="smart-tags" role="tabpanel" aria-labelledby="smart-tags-tab">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">RFID Smart Tag Monitoring</h6>
                        </div>
                        <div class="card-body">
                            <div class="iot-status mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Connected Devices</span>
                                    <span class="badge bg-success">48/48 Active</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Battery Health</span>
                                    <span class="badge bg-warning">78% Average</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span>Signal Strength</span>
                                    <span class="badge bg-info">Excellent</span>
                                </div>
                            </div>
                            
                            <div class="sensor-readings">
                                <h6>Real-time Sensor Data</h6>
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <strong>GT-001 - Thunder</strong>
                                            <span class="badge bg-success">Normal</span>
                                        </div>
                                        <small class="text-muted">
                                            Temp: 38.5°C • Location: Pasture A • Activity: High
                                        </small>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                            <strong>GT-015 - Rocky</strong>
                                            <span class="badge bg-warning">Alert</span>
                                        </div>
                                        <small class="text-muted">
                                            Temp: 40.2°C • Location: Barn • Activity: Low
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h6 class="mb-0">Smart Tag Configuration</h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Select Goat</label>
                                <select class="form-select">
                                    <option>GT-001 - Thunder</option>
                                    <option>GT-002 - Bella</option>
                                    <option>GT-015 - Rocky</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Temperature Alert Threshold</label>
                                <input type="number" class="form-control" value="40.0" step="0.1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Activity Monitoring</label>
                                <select class="form-select">
                                    <option>High Sensitivity</option>
                                    <option>Medium Sensitivity</option>
                                    <option>Low Sensitivity</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location Tracking</label>
                                <select class="form-select">
                                    <option>Real-time (High Battery)</option>
                                    <option>Periodic (Balanced)</option>
                                    <option>On-demand (Low Battery)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="geofenceAlerts" checked>
                                    <label class="form-check-label" for="geofenceAlerts">
                                        Enable Geofence Alerts
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-info w-100">
                                <i class="bi bi-save me-1"></i> Save Configuration
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.upload-area {
    cursor: pointer;
    transition: all 0.3s ease;
}
.upload-area:hover {
    background-color: #f8f9fa;
    border-color: #007bff;
}
</style>