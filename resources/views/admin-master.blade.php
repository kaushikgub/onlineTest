<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin-master') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin-master') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/student-list')}}">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Student List</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/add-premium')}}">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Add Student as Premium</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/add-question')}}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Add Question</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/add-demo-question')}}">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Add Demo Question</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/request-package')}}">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>Requested Package</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/student-password-changing-request')}}">
          <i class="fas fa-fw fa-unlock-alt"></i>
          <span>Student Password C ...</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/user-questions')}}">
          <i class="fas fa-fw fa-pager"></i>
          <span>User Questions</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/change-password')}}">
          <i class="fas fa-fw fa-unlock-alt"></i>
          <span>Change Password</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/sign-out')}}">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Sign Out</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <h3 class="font-italic text-info mx-auto d-block">Admin Panel</h3>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container text-black">

          @yield('body')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin-master') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('admin-master') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin-master') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin-master') }}/js/sb-admin-2.min.js"></script>
  <script src="{{ asset('/js/jquery.js') }}"></script>

</body>

</html>
