<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/css/vendor.bundle.base.css')}} ">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}} ">
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/vendors/ti-icons/css/themify-icons.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{ asset ('AsetAdmin/js/select.dataTables.min.css')}} ">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset ('AsetAdmin/css/vertical-layout-light/style.css')}} ">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset ('AsetAdmin/images/favicon.png')}} " />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo-center">
                <img src="{{ asset ('Assets/template/images/logo5.png') }}" alt="logo" width="70%">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="/login">
                 @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Masukkan Password">
                </div>
                <div class="mt-3">
                    <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="login">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Ingat saya
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Lupa password?</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset ('AsetAdmin/js/off-canvas.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/hoverable-collapse.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/template.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/settings.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/todolist.js')}} "></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset ('AsetAdmin/js/dashboard.js')}} "></script>
  <script src="{{ asset ('AsetAdmin/js/Chart.roundedBarCharts.js')}} "></script>
  <!-- End custom js for this page-->
</body>

</html>
