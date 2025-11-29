<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AetherLM (Aether Language Model)</title>
  <link rel="icon" href="assets/files/Xosmasmiles.jpg" type="image/x-icon">

  <link href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-5.3.3-dist/fonts/icons-main/font/bootstrap-icons.css" rel="stylesheet">

  <script src="assets/plugins/jquery/jquery-3.7.1.min.js"></script>
</head>
<body class="bg-light">

<div class="container p-5">
  <?php if (isset($_GET['expired']) && $_GET['expired'] === 'true'): ?>
    <div class="alert alert-warning text-center">
      Your session has expired or you were logged in elsewhere.
    </div>
  <?php elseif (isset($_GET['logged_out']) && $_GET['logged_out'] === 'true'): ?>
    <div class="alert alert-info text-center">
      You’ve been logged out successfully.
    </div>
  <?php endif; ?>

  <!-- Tabs Navigation -->
  <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login-panel" role="tab">
        <i class="bi bi-person-circle"></i> Sign in
      </a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="create-tab" data-bs-toggle="tab" href="#create-panel" role="tab">
        <i class="bi bi-person-plus-fill"></i> Create account
      </a>
    </li>
  </ul>

  <!-- Tabs Content -->
  <div class="tab-content">
    <!-- Login Panel -->
    <div class="tab-pane fade show active" id="login-panel" role="tabpanel" aria-labelledby="login-tab">
      <div class="card p-4 mx-auto" style="max-width: 400px;">
        <h4 class="mb-3 text-center">Login</h4>
        <div id="loginMsg" class="text-danger small"></div>
        <input type="text" id="loginPhone" class="form-control mb-2" placeholder="Phone number">
        <input type="password" id="loginPassword" class="form-control mb-3" placeholder="Password">
        <button id="loginBtn" class="btn btn-primary w-100">Login</button>
      </div>
    </div>

    <!-- Register Panel -->
    <div class="tab-pane fade" id="create-panel" role="tabpanel" aria-labelledby="create-tab">
      <div class="card p-4 mx-auto" style="max-width: 400px;">
        <h4 class="mb-3 text-center">Create Your Account</h4>
        <div id="regMsg" class="text-danger small mb-2"></div>

        <input type="text" id="regName" class="form-control mb-2" placeholder="Full name" required>
        <input type="text" id="regPhone" class="form-control mb-2" placeholder="Phone number" required>
        <input type="email" id="regEmail" class="form-control mb-2" placeholder="Email (optional)">
        
        <select class="form-control mb-2" id="regCountry" required>
          <option selected disabled>Choose country</option>
        </select>

        <input type="password" id="regPassword" class="form-control mb-2" placeholder="Password" required>
        <input type="text" id="referralInput" class="form-control mb-3" placeholder="Referral code (optional)">
        
        <button id="registerBtn" class="btn btn-success w-100">Register</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="front_end_functions/js/auth.js"></script>

</body>
</html>
