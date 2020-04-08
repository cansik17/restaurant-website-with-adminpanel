<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title','Dashboard')</title>
  {{-- @toastr_css --}}
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/back/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/back/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  
  

   
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.index')}}" class="brand-link">
     
      <span class="brand-text font-weight-light">YamiFood Admin </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
           
            <ul class="nav nav-treeview">
           
          <li class="nav-item">
            <a href="{{route('dashboard.sliders.index')}}" class="nav-link">
              {{-- {{route('dashboard.sliders.edit')}} --}}
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Edit The Slider
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dashboard.menu.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Edit Menu
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dashboard.about.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Edit About
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dashboard.gallery.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Edit Gallery 
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dashboard.settings.index')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Site Settings
                
              </p>
            </a>
          </li>
        </ul>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <a href="{{route('home')}}" class="btn btn-primary" target="_blank" >View the Site</a>
        <a href="{{route('logout')}}" class="float-right btn btn-secondary" ><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            @yield('content')
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/back/dist/js/adminlte.min.js"></script>
</body>
    {{-- @jquery
    @toastr_js
    @toastr_render --}}
</html>
