<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

     <!-- Custom js for icons -->
     <script src="https://kit.fontawesome.com/fea77a8d67.js" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LAUNDRY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/status') ? 'active' : '' }}">
                <a href="/dashboard/status" class="nav-link">
                <i class="fas fa-fw fa-table"></i>
                <span>Status Cucian</span></a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/karyawan') ? 'active' : '' }}">
                <a href="/dashboard/karyawan" class="nav-link">
                <i class="fas fa-fw fa-user"></i>
                <span>Karyawan</span></a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/category') ? 'active' : '' }}">
                <a href="/dashboard/category" class="nav-link">
                    <i class="fa-solid fa-list"></i>
                <span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
            
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">{{ auth()->user()->nama }}</span>
                                @if (auth()->user()->role == 'admin')
                                <img class="rounded-circle" width="35px" src="https://st2.depositphotos.com/3060173/10445/v/450/depositphotos_104450850-stock-illustration-user-man-icon.jpg">
                                @else
                                <img class="img-profile rounded-circle" width="35px"
                                src="https://st3.depositphotos.com/6672868/15049/v/600/depositphotos_150490554-stock-illustration-user-profile-group-outline-icon.jpg">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                @if (auth()->user()->role == 'admin')
                                <a class="dropdown-item" href="/dashboard/user/{{ auth()->user()->id }}/edit">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/dashboard">
                                    <i class="fas fa-fw fa-tachometer-alt mr-2 text-gray-400"></i>
                                    Dashboard
                                </a>
                                <div class="dropdown-divider"></div>
                                @endif
                                
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container">
                    @yield('containers')
                </div>

            </div>
            <!-- End of Main Content -->
        
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
            
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
        
    </body>
            
</html>