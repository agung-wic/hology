@extends('master.dashboard')

@section('sidebar')
<ul style="background-color: #10866c;background-image:linear-gradient(180deg,#225449 10%,#10866c 100%)" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-heartbeat" aria-hidden="true"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Alive</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-2">

  <div class="sidebar-heading">
    Pasien
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/pasien">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard Pasien</span></a>
  </li>

</ul>
<!-- End of Sidebar -->
@endsection('sidebar')

@section('content')
<div class="container-fluid">
  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-12 mb-4">
      <div class="card-group">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
              Dr. Alive
            </div>
            <h5 class="card-title">Laporan Medical Check Up</h5>
            <p class="card-text" style="margin-bottom:-0.1%">Berikut adalah hasil check up : </p>
            <p class="card-text" style="margin-bottom:-0.1%">Nama : Pasien 1</p>
            <p class="card-text" style="margin-bottom:-0.1%">Usia : 21 Tahun</p>
            <p class="card-text" style="margin-bottom:-0.1%">No. KTP : 12345678</p>
            <p class="card-text" style="margin-bottom:1%">No. Surat : 3</p>
            <a href="https://drive.google.com/u/0/uc?id=1PqEKqStW7HvOFfxurS7WykMD5lrb6wHq&export=download" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
              <i class="fas fa-download fa-sm text-white-50"></i> Download
            </a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Selasa, 3 November 2020</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-12 mb-4">
      <div class="card-group">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
              Dr. Alive
            </div>
            <h5 class="card-title">Laporan Medical Check Up</h5>
            <p class="card-text" style="margin-bottom:-0.1%">Berikut adalah hasil check up : </p>
            <p class="card-text" style="margin-bottom:-0.1%">Nama : Pasien 1</p>
            <p class="card-text" style="margin-bottom:-0.1%">Usia : 21 Tahun</p>
            <p class="card-text" style="margin-bottom:-0.1%">No. KTP : 12345678</p>
            <p class="card-text" style="margin-bottom:1%">No. Surat : 2</p>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
              <i class="fas fa-download fa-sm text-white-50"></i> Download
            </a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Kamis, 1 Oktober 2020</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-12 mb-4">
      <div class="card-group">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
              Dr. Alive
            </div>
            <h5 class="card-title">Laporan Medical Check Up</h5>
            <p class="card-text" style="margin-bottom:-0.1%">Berikut adalah hasil check up : </p>
            <p class="card-text" style="margin-bottom:-0.1%">Nama : Pasien 1</p>
            <p class="card-text" style="margin-bottom:-0.1%">Usia : 21 Tahun</p>
            <p class="card-text" style="margin-bottom:-0.1%">No. KTP : 12345678</p>
            <p class="card-text" style="margin-bottom:1%">No. Surat : 1</p>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
              <i class="fas fa-download fa-sm text-white-50"></i> Download
            </a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Rabu, 2 September 2020</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content Row -->
</div>
@endsection