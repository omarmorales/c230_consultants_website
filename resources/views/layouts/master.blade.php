<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>C230 Consultores | Consultoría de política pública</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="./img/logo_light.png" alt="MosaDev Logo" class="brand-image elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              @if (Auth::user()->photo)
                <img src="./img/profile/{{ Auth::user()->photo }}" class="img-circle elevation-2" alt="User Image">
              @else
                <img src="./img/superhero.png" alt="User Image">
              @endif

            </div>
            <div class="info">
              <router-link to="/profile" class="d-block">
                {{ Auth::user()->name }}
              </router-link>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                 <router-link to="/dashboard" class="nav-link">
                   <i class="nav-icon fas fa-tachometer-alt text-blue"></i>
                   <p>
                     Dashboard
                   </p>
                 </router-link>
               </li>

               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fas fa-cog text-green"></i>
                   <p>Management<i class="right fas fa-angle-left"></i></p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <router-link to="/users" class="nav-link">
                       <i class="fas fa-users nav-icon"></i>
                       <p>Users</p>
                     </router-link>
                   </li>
                   <li class="nav-item">
                     <a href="#" class="nav-link">
                       <i class="fas fa-circle nav-icon"></i>
                       <p>Inactive Page</p>
                     </a>
                   </li>
                 </ul>
               </li>

               <li class="nav-item">
                 <router-link to="/developer" class="nav-link">
                   <i class="nav-icon fas fa-cogs"></i>
                   <p>
                     Developer
                   </p>
                 </router-link>
               </li>

               <li class="nav-item">
                 <router-link to="/profile" class="nav-link">
                   <i class="nav-icon fas fa-user text-orange"></i>
                   <p>
                     Profile
                   </p>
                 </router-link>
               </li>

               <li class="nav-item">
                 <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   <i class="nav-icon fas fa-power-off text-red"></i>
                   <p>{{ __('Logout') }}</p>
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
               </li>
             </ul>
           </nav>
           <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
       </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">


        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="https://mosadev.io">mosadev.io</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    {{-- @auth
      <script>
        window.user = @json(auth()->user())
      </script>
    @endauth --}}
  </body>
</html>
