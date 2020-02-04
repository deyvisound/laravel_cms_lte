<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts._includes.admin_head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts._includes.admin_navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts._includes.admin_sidebar')
    <!-- /Main Sidebar Container -->

    <!-- Content -->
    @yield('content')
    <!--/Content -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.3-pre
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    
  </div>
  <!-- ./wrapper -->

    @include('layouts._includes.admin_footer_js')
  </body>
</html>
