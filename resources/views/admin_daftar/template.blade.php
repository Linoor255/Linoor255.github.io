<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tampilan Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/css/vendor.bundle.base.css')}} ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}} ">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{ asset ('AsetAdmin/js/select.dataTables.min.css')}} ">
  <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" 
  crossorigin="anonymous" /> -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/css/vertical-layout-light/style.css')}} ">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset ('AsetAdmin/images/favicon.png')}} " />

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset ('Assets/template/images/logo5.png') }} " class="mr-2"
            alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset ('Assets/template/images/logo2.png') }}" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
              data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset ('Assets/template/images/user.png') }} " alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="/logout">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('welcome_admin')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin_daftar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Pendaftar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('bayar_daftar')}}">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Pembayaran</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset ('AsetAdmin/vendors/js/vendor.bundle.base.js')}} "></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset ('AsetAdmin/vendors/chart.js/Chart.min.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/vendors/datatables.net/jquery.dataTables.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/dataTables.select.min.js')}} "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset ('AsetAdmin/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset ('AsetAdmin/demo/chart-bar-demo.js')}}"></script>
  <script src="{{ asset ('AsetAdmin/demo/datatables-demo.js')}}"></script>


  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset ('AsetAdmin/js/off-canvas.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/hoverable-collapse.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/template.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/settings.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/todolist.js')}} "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset ('AsetAdmin/js/dashboard.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/Chart.roundedBarCharts.js')}} "></script>
  <!-- End custom js for this page-->
</body>

</html>