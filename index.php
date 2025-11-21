<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kitengela Glass Admin</title>

  <!-- Bootstrap & Vendor CSS -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="images/coolinglogo.png" />

  <!-- Custom Styles -->
  <style>
    body {
      background-color: #f1f3f6; /* light grey background */
      font-family: 'Poppins', sans-serif;
    }

    .page-body-wrapper {
      background-color: #f1f3f6; /* ensures wrapper is also grey */
    }

    /* Modern card styling */
    .k-card {
      border: none;
      border-radius: 20px;
      padding: 28px 20px;
      background: #ffffff; /* white cards pop against grey background */
      box-shadow: 0 4px 18px rgba(0,0,0,0.06);
      transition: all .25s ease;
    }

    .k-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 26px rgba(0,0,0,0.1);
    }

    .k-icon {
      font-size: 40px;
      margin-bottom: 15px;
      color: #4e73df;
    }

    .k-title {
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      color: #334155;
      letter-spacing: 1px;
    }

    .k-btn {
      border-radius: 30px;
      padding: 6px 22px;
      margin-top: 10px;
    }

    /* Footer */
    footer {
      border-top: 1px solid #e0e0e0;
      background-color: #f1f3f6;
    }

    /* Navbar styling for light grey look */
    .navbar {
      background-color: #ffffff !important;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    /* Profile image */
    .navbar .dropdown-toggle img {
      object-fit: cover;
    }
  </style>
</head>

<body class="bg-light">
  <div class="container-scroller">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="images/coolinglogo.png" alt="logo" width="45" class="me-2">
          <span class="fw-bold text-primary">Kitengela Glass Ltd Admin</span>
        </a>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
              <img src="images/faces/face28.jpg" alt="profile" class="rounded-circle" width="35" height="35">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow">
              <li>
                <a class="dropdown-item d-flex align-items-center" href="index.php?logout='1'">
                  <i class="ti-power-off text-danger me-2"></i> Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid page-body-wrapper mt-5 pt-4">
      <?php include 'partials/sidebar.php' ?>

      <main class="main-panel">
        <div class="content-wrapper container py-5">
          <div class="text-center mb-5">
            <h3 class="fw-bold text-dark">Admin Dashboard</h3>
            <p class="text-muted">Quick access to system modules</p>
          </div>

          <!-- New Modern Cards Grid -->
          <div class="row justify-content-center">

            <!-- Customers -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-user k-icon"></i>
                <div class="k-title">All Customers</div>
                <a href="approvedcustomers.php" class="btn btn-outline-primary k-btn">View</a>
              </div>
            </div>

            <!-- Staff -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-id-badge k-icon" style="color:#16a34a;"></i>
                <div class="k-title">Staff Members</div>
                <a href="allstaff.php" class="btn btn-outline-success k-btn">View</a>
              </div>
            </div>

            <!-- Suppliers -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-truck k-icon" style="color:#f59e0b;"></i>
                <div class="k-title">Suppliers</div>
                <a href="suppliers.php" class="btn btn-outline-warning k-btn">View</a>
              </div>
            </div>

            <!-- Orders -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-shopping-cart k-icon" style="color:#dc2626;"></i>
                <div class="k-title">Order Records</div>
                <a href="allorders.php" class="btn btn-outline-danger k-btn">View</a>
              </div>
            </div>

            <!-- Received Supply -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-archive k-icon" style="color:#6b7280;"></i>
                <div class="k-title">Received Supply</div>
                <a href="approvedsupply.php" class="btn btn-outline-secondary k-btn">View</a>
              </div>
            </div>

            <!-- Service Bookings -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="k-card text-center">
                <i class="ti-agenda k-icon" style="color:#0ea5e9;"></i>
                <div class="k-title">Service Bookings</div>
                <a href="approvedservpayments.php" class="btn btn-outline-info k-btn">View</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white text-center py-3 mt-4 small text-muted">
          © 2025 Kitengela Glass Limited. All rights reserved.
        </footer>
      </main>
    </div>
  </div>

  <!-- Vendor JS -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
</body>

</html>
