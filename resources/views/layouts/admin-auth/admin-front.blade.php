<!-- Copyright 2020 By: Dewa Programming -->
<!-- Author/Pembuat   : Adityawarman Dewa Putra -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/tutorial/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/tutorial/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/tutorial/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/tutorial/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/tutorial/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
    .full-width-tabs > ul.nav.nav-pills {
        display: table;
        width: 100%;
        table-layout: fixed;
    }
    .full-width-tabs > ul.nav.nav-pills > li {
        float: none;
        display: table-cell;
    }
    .nav-pills th, .full-width-tabs > ul.nav.nav-pills > li > a {
        text-align: center;
    }
    #pills-tab .nav-item {
        background-color: #DDDDDD;
    }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/segel/tutorial" class="nav-link">Home</a>
        </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
        <img src="{{ asset('admin/dist/img/Logo.png') }}" alt="DP Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dewa Programming</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{ asset('admin/dist/img/Dewa.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="/adityawarman-dewa-putra" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a class="nav-link active bg-danger" href="{{ route('logout') }}" id="Logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item has-treeview {{ Request::is('segel/tutorial*') ? 'menu-open' : '' }}{{ Request::is('segel/teknologi*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::is('segel/tutorial*') ? 'active' : '' }}{{ Request::is('segel/teknologi*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/segel/tutorial" class="nav-link {{ Request::is('segel/tutorial*') ? 'active' : '' }}">
                    <i class="far fa-circle {{ Request::is('segel/tutorial*') ? 'fa-dot-circle' : '' }} nav-icon"></i>
                    <p>Tutorial</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/segel/teknologi" class="nav-link {{ Request::is('segel/teknologi*') ? 'active' : '' }}">
                    <i class="far fa-circle {{ Request::is('segel/teknologi*') ? 'fa-dot-circle' : '' }} nav-icon"></i>
                    <p>Teknologi</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview 
                        {{ Request::is('tutorial/create*') ? 'menu-open' : '' }}
                        {{ Request::is('tech/create*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link 
                        {{ Request::is('tutorial/create*') ? 'active' : '' }}
                        {{ Request::is('tech/create*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Postingan Baru
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/tutorial/create" class="nav-link {{ Request::is('tutorial/create*') ? 'active' : '' }}">
                    <i class="far fa-circle {{ Request::is('tutorial/create*') ? 'fa-dot-circle' : '' }} nav-icon"></i>
                    <p>Tutorial</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tech/create" class="nav-link {{ Request::is('tech/create*') ? 'active' : '' }}">
                    <i class="far fa-circle {{ Request::is('tech/create*') ? 'fa-dot-circle' : '' }} nav-icon"></i>
                    <p>Teknologi</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('segel/category*') ? 'menu-open' : '' }}">
                <a href="/segel/category" class="nav-link {{ Request::is('segel/category*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Category
                </p>
                </a>
            </li>
            <li class="nav-header">LAINNYA</li>
            <li class="nav-item has-treeview {{ Request::is('sosmed*') ? 'menu-open' : '' }}">
                <a href="/sosmed" class="nav-link {{ Request::is('sosmed*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Sosmed
                </p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ Request::is('catatan*') ? 'menu-open' : '' }}">
                <a href="/catatan" class="nav-link {{ Request::is('catatan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Catatan
                </p>
                </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Important</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Warning</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informational</p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
        
@yield('konten')

    <footer class="main-footer">
        <strong><?php echo "&copy; Copyright 2020 - " . date("Y") ?> - Adityawarman Dewa Putra </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>