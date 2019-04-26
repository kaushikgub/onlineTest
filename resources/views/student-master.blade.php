<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('student-master')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('student-master')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('student-master')}}/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">CG Sarkari Exam</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

      <li >
          <img style="height: 80px;width: 80px;" class="mt-5 rounded mx-auto d-block" src="{{asset($student->photo_link)}}" alt="User Image">
      </li>
      <li class="nav-item">
        <p class="nav-item text-light text-center">
          <span>{{$student->name}}</span>
        </p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/student/test') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>My Test</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/student/my-profile') }}">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>My Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('student/buy-package') }}">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Buy Package</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-laugh"></i>
          <span>Offers</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-comments"></i>
          <span>Discussion Room</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/student/conform-login/41')}}">
          <i class="fas fa-fw fa-copy"></i>
          <span>Demo Exam</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/student/sign-out')}}">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Sign Out</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        @yield('body')

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © CG Sarkari Exam 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('student-master')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('student-master')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('student-master')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('student-master')}}/js/sb-admin.min.js"></script>

</body>

</html>
