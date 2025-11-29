<!-- header.php -->
<?php
// require_once 'back_end_functions/core.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ANKWATA FARM - Professional goat farming management system with investor partnerships">
  <title>Ankwata Farm</title>
  <link rel="icon" href="assets/files/Xosmasmiles.jpg" type="image/x-icon">

  <!-- Bootstrap Core CSS -->
  <link href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/select2-4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="assets/bootstrap-5.3.3-dist/fonts/icons-main/font/bootstrap-icons.css" rel="stylesheet">

  <!-- jQuery (must be loaded before DataTables, jQuery UI, FileInput) -->
  <script src="assets/plugins/jquery/jquery-3.7.1.min.js"></script>

  <!-- jQuery UI -->
  <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery.datetimepicker.min.css">
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="assets/plugins/jquery-ui/jquery.datetimepicker.full.min.js"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables/jquery.dataTables.min.css">
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>

  <script src="assets/select2-4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- FileInput -->
  <link rel="stylesheet" href="assets/plugins/fileinput/css/fileinput.min.css">
  <script src="assets/plugins/fileinput/js/fileinput.min.js"></script>

  <!-- Custom Styles -->
  <link href="front_end_functions/css/styles.css?v=1" rel="stylesheet">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light top-nav sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img id="logo" class="rounded-circle company-logo" width="50px" alt="Company Logo" src="assets/files/images/blink2.png"> <span>ANKWATA FARM</span> <marquee><span id="slogan">Where Your Investment Eats, Grows, and Pays.</span></marquee>
            </a>
            
            <!-- Mobile side menu toggle -->
            <button class="navbar-toggler d-md-none" type="button" id="sideMenuToggle" aria-label="Toggle side menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="search-container" role="search">
                <div class="input-group">
                    <span class="input-group-text border-info">
                        <label for="search-bar" class="visually-hidden">Search</label>
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control border-info" id="search-bar" placeholder="Search anything..." aria-labelledby="search-bar" autocomplete="off">
                </div>
                <div class="search-results" id="results" role="listbox" aria-labelledby="search-bar"></div>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item search-find" id="themeToggle">
                        <a class="btn btn-light me-2" href="#">
                            <i class="bi bi-circle-half"></i> 
                            <span>System</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="btn btn-light me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> 
                        <span id="userRole">Admin</span>
                        <span class="badge bg-danger ms-1">3</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-bell"></i> Notifications</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="back_end_functions/logout.php"><i class="bi bi-power"></i> Logout</a></li>
                      </ul>
                    </li>
                    <li class="nav-item search-find">
                        <a class="btn btn-light me-2" href="#">
                            <i class="bi bi-gear" aria-hidden="true"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Message Toast -->
    <div class="position-fixed top-0 end-0 mt-3 me-3" style="z-index: 9999;">
        <div id="messageToast" class="toast align-items-center text-bg-light border-info" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
            <div class="toast-header">
                <span id="toastIcon" class="me-2"></span>
                <strong id="toastTitle" class="me-auto"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastBody"></div>
        </div>
    </div>

    <!-- Mobile Side Menu Overlay -->
    <div class="side-menu-overlay" id="sideMenuOverlay"></div>

    <div class="container-fluid">
        <div class="row">
            <!-- Admin Sidebar Menu -->
            <div class="col-md-2 side-menu" id="sideMenu">
              <div class="nav flex-column nav-pills align-items-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                
                <!-- CORE OPERATIONS -->
                <div class="sidebar-section">
                  <small class="sidebar-section-title">CORE OPERATIONS</small>
                  
                  <button class="nav-link search-find active" id="dashboard-tab" data-bs-toggle="pill" data-bs-target="#dashboard" type="button" role="tab">
                    <i class="bi bi-house-door"></i> Dashboard
                  </button>
                  
                  <button class="nav-link search-find" id="livestock-tab" data-bs-toggle="pill" data-bs-target="#livestock" type="button" role="tab">
                    <i class="bi bi-heart-pulse"></i> Livestock
                  </button>
                  
                  <button class="nav-link search-find" id="partners-tab" data-bs-toggle="pill" data-bs-target="#partners" type="button" role="tab">
                    <i class="bi bi-people"></i> Partners
                  </button>
                </div>

                <!-- FINANCIAL & SALES -->
                <div class="sidebar-section">
                  <small class="sidebar-section-title">FINANCIALS</small>
                  
                  <button class="nav-link search-find" id="sales-tab" data-bs-toggle="pill" data-bs-target="#sales" type="button" role="tab">
                    <i class="bi bi-cash-coin"></i> Sales & Revenue
                  </button>
                  
                  <button class="nav-link search-find" id="expenses-tab" data-bs-toggle="pill" data-bs-target="#expenses" type="button" role="tab">
                    <i class="bi bi-coin"></i> Expenses
                  </button>
                  
                  <button class="nav-link search-find" id="investor-payouts-tab" data-bs-toggle="pill" data-bs-target="#investor-payouts" type="button" role="tab">
                    <i class="bi bi-graph-up"></i> Investor Payouts
                  </button>
                </div>

                <!-- FARM OPERATIONS -->
                <div class="sidebar-section">
                  <small class="sidebar-section-title">FARM OPERATIONS</small>
                  
                  <button class="nav-link search-find" id="health-tab" data-bs-toggle="pill" data-bs-target="#health" type="button" role="tab">
                    <i class="bi bi-clipboard2-pulse"></i> Medicals
                  </button>
                  
                  <button class="nav-link search-find" id="breeding-tab" data-bs-toggle="pill" data-bs-target="#breeding" type="button" role="tab">
                    <i class="bi bi-gender-ambiguous"></i> Breeding
                  </button>
                  
                  <button class="nav-link search-find" id="tasks-tab" data-bs-toggle="pill" data-bs-target="#tasks" type="button" role="tab">
                    <i class="bi bi-check2-square"></i> Tasks & Reminders
                  </button>
                </div>

                <!-- ANALYTICS & REPORTS -->
                <div class="sidebar-section">
                  <small class="sidebar-section-title">ANALYTICS</small>
                  
                  <button class="nav-link search-find" id="reports-tab" data-bs-toggle="pill" data-bs-target="#reports" type="button" role="tab">
                    <i class="bi bi-bar-chart"></i> Farm Reports
                  </button>
                  
                  <button class="nav-link search-find" id="analytics-tab" data-bs-toggle="pill" data-bs-target="#analytics" type="button" role="tab">
                    <i class="bi bi-speedometer2"></i> Performance
                  </button>
                </div>

                <!-- SYSTEM & SETTINGS -->
                <div class="sidebar-section">
                  <small class="sidebar-section-title">SYSTEM</small>
                  
                  <button class="nav-link search-find" id="public-portal-tab" data-bs-toggle="pill" data-bs-target="#public-portal" type="button" role="tab">
                    <i class="bi bi-globe"></i> Public Portal
                  </button>
                  
                  <button class="nav-link search-find" id="admin-panel-tab" data-bs-toggle="pill" data-bs-target="#admin-panel" type="button" role="tab">
                    <i class="bi bi-shield-check"></i> Admin Panel
                  </button>
                  
                  <button class="nav-link search-find" id="mobile-tab" data-bs-toggle="pill" data-bs-target="#mobile" type="button" role="tab">
                    <i class="bi bi-phone"></i> Mobile App
                  </button>
                </div>
              </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-10 main-content">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Content will go here, tag closing done in the footer -->