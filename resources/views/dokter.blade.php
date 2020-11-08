@extends('master.dashboard')

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
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Pasien</span></a>
    </li>
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
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                Nama: Ahmad Syiham Akbar</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri :07211740000039</div>
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
                                Nama: Ahmad Zakiy</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri :07211740000040</div>
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
                                Nama: Agung Wicaksono</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri :07211740000002</div>
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
                                Nama: Mpu Hambyah</div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nomer Seri :07211740000024</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection