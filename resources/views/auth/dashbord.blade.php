
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Ion Plus Technology') }}</title>
  <link rel="flag icon" href="{{asset('assets/images/flag.png')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!--w3 style-->
  <link rel="stylesheet" href="/style/dist/w3/w3.css">

  <!--custom css-->
  <link rel="stylesheet" href="/style/dist/css/index.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/style/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/style/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/style/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/style/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/style/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/style/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Scripts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <style type="text/css">
  .alert{padding: 15px;margin-bottom: 20px;border-radius: 4px;color: #fff;text-transform: uppercase;font-size: 12px}.alert_info{background-color: #4285f4;border: 2px solid #4285f4}button.close{-webkit-appearance: none;padding: 0;cursor: pointer;background: 0 0;border: 0}.close{font-size: 20px;color: #fff;opacity: 0.9;}.alert_success{background-color: #09c97f;border: 2px solid #09c97f}.alert_warning{background-color: #f8b15d;border: 2px solid #f8b15d}.alert_error{background-color: #f95668;border: 2px solid #f95668}.fade_info{background-color: #d9e6fb;border: 1px solid #4285f4}.fade_info .close{color: #4285f4}.fade_info strong{color: #4285f4}.fade_success{background-color: #c9ffe5;border: 1px solid #09c97f}.fade_success .close{color: #09c97f}.fade_success strong{color: #09c97f}.fade_warning{background-color: #fff0cc;border: 1px solid #f8b15d}.fade_warning .close{color: #f8b15d}.fade_warning strong{color: #f8b15d}.fade_error{background-color: #ffdbdb;border: 1px solid #f95668}.fade_error .close{color: #f95668}.fade_error strong{color: #f95668}
   

  .alert{
    padding: 15px;
    margin-bottom: 20px;border-radius: 4px;color: #fff;text-transform: uppercase;font-size: 12px}.alert_info{background-color: #4285f4;border: 2px solid #4285f4}button.close{-webkit-appearance: none;padding: 0;cursor: pointer;background: 0 0;border: 0}.close{font-size: 20px;color: #fff;opacity: 0.9;}.alert_success{background-color: #09c97f;border: 2px solid #09c97f}.alert_warning{background-color: #f8b15d;border: 2px solid #f8b15d}.alert_error{background-color: #f956
fade_success{background-color: #c9ffe5;border: 1px solid #09c97f}.fade_success .close{color: #09c97f}.fade_success strong{color: #09c97f}.fade_warning{background-color: #fff0cc;border: 1px solid #f8b15d}.fade_warning .close{color: #f8b15d}.fade_warning strong{color: #f8b15d}.fade_error{background-color: #ffdbdb;border: 1px solid #f95668}.fade_error .close{color: #f95668}.fade_error strong{color: #f95668}
 </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<br>
<div class="wrapper">
@if(session('delete-client'))
    <script>toastr.error('Client deleted successful!')</script>
@endif
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light" style="margin-top:-25px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <div class="rowtext-center">
        <div class="col-md-12"><b></b>&nbsp; Panel</div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search text-white"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar w3-white" type="search" placeholder="Searching . . . . " aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <div data-toggle="dropdown" style="padding-right:20px; margin-top:5px;cursor:pointer;">
          <i class="fa fa-user"></i>&nbsp;
        </div>

        <div class="dropdown-menu dropdown-menu-right bg-info" style="margin-top:5px;padding-right:20px;border:2px solid white;">
           <a href="{{url('tasker/form/password')}}" class="dropdown-item w3-hover-text-black w3-hover-text-black">
            <i class="fas fa-key mr-2"></i>&nbsp;
            Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('tasker/manage/profile/picture')}}" class="dropdown-item w3-hover-text-black w3-hover-text-black">
            <i class="fas fa-image mr-2"></i>
           Profile
          </a>

          <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item w3-hover-text-black w3-hover-text-black" onclick="document.getElementById('logout-form').submit()">
              <i class="fas fa-lock mr-2"></i>

             Logout
            </a>

                <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                   @csrf
                </form>
          </div>
        </div>

      </li>
      <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link text-center">
      <span class="brand-text text-white" style="color:white;font-size:25px;"><b>Ion&nbsp;Plus&nbsp;Technology </b></span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
              <img src="" class="img-circle elevation-2" alt="User Image" style="width:40px;height:40px;border-radius:50%;">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- admin/usersIncolor -->
          <!--Citizen management-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Blogs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
            <li class="nav-item">
                  <a href="{{'/addpost'}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add blog</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{'/allblogs'}}" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                    <p>All blogs</p 
                  </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Waiting</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/red')}}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i>
                  <p>Refused</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Ready</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Inservise</p> -->
                </a>
              </li>

            </ul>


          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-house"></i>
              <p>
                Campany detail -->
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="" class="nav-link">
                    <!-- <i class="far fa-circle nav-icon"></i> -->
                    <!-- <p>All users</p> -->
                  </a>
              </li>

              <li class="nav-item">
                 <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Campanies</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Contracts</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Customers in blue</p> -->
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Payments</p> -->
                </a>
              </li>

            </ul>


          </li>

        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                <!-- Managers -->
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
      
              <li class="nav-item">
                  <a href="{{url('tasker/form/Files')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <!-- <p>Add manager</p> -->
                  </a>
              </li>

              <li class="nav-item">
                  <a href="{{url('tasker/view/files')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <!-- <p>View managers</p> -->
                  </a>
              </li>

            </ul>


          </li>

            <!--Arcive management-->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                <!-- Informations -->
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
      
              <li class="nav-item">
                <a href="{{url('tasker/myinformation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <!-- <p>My infos</p> -->
                </a>
              </li>

            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#eee;">
   
      <main>
          @yield('content')
      </main>
          
    </div>
    <!-- /.content -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/style/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/style/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="..style/jquery/jquery.min.js"></script>

<!-- ChartJS -->
<script src="/style/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/style/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/style/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/style/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/style/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/style/plugins/moment/moment.min.js"></script>
<script src="/style/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/style/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/style/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE../ App -->
<script src="/style/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes >
<script src="../dist/js/demo.js"></script-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/style/dist/js/pages/dashboard.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.ckeditor').ckeditor();
        });
    </script>
  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
</body>
</html>