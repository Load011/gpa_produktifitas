<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rental Mobil</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
  
  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('layout.navbar')
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rental Mobil</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        @include('layout.sidebar')
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <form method="POST" action="{{ route('logout') }}" class="d-inline">
          @csrf
          <button type="submit" class="nav-link btn btn-link" style="padding: 0; margin: 0; height: auto; color: inherit;">
            <i class="fas fa-sign-out-alt"></i> logout
          </button>
        </form>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Ganda Parade Arthanami
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; GPA.</strong> All Rights Reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- Additional Scripts -->
  <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>
