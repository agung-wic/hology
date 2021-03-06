@extends('master.dashboard')

@section('topbar')
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dr. Alive</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
@endsection('topbar')

@section('sidebar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Alive</div>
    </a>

    <!-- Divider -->


    <div class="sidebar-heading">
        Dokter
    </div>

    <hr class="sidebar-divider my-2">

    <li class="nav-item active">
        <a class="nav-link" href="/dokter">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Dokter</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
@endsection('sidebar')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pasien</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4">
            <a class="card border-left-primary shadow h-100 py-2" href="{{url('/chart')}}" style="text-decoration: none;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                Nama: Pasien 1</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri : 07211740000039</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                Nama: Pasien 2</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri : 07211740000040</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                Nama: Pasien 3</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri : 07211740000002</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                Nama: Pasien 4</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri : 07211740000024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection