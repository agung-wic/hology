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
    <li class="nav-item">
        <a class="nav-link" href="/dokter">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Dokter</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/chart">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Chart</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
@endsection('sidebar')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
    </div>
    <div class="card-body">
        <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
        </div>
        <hr>
        Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
    </div>
</div>
@endsection