@extends('master.dashboard')

@section('content')
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">Firdaus</span>
          <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
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

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-12 mb-4">
        <div class="card-group">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">
                Dr. Bambang Hardoyo
              </div>
              <h5 class="card-title">Laporan Medical Check Up</h5>
              <p class="card-text" style="margin-bottom:-0.1%">Berikut adalah hasil check up : </p>
              <p class="card-text" style="margin-bottom:-0.1%">Nama : Ahmad Zakiy Mulyanto</p>
              <p class="card-text" style="margin-bottom:-0.1%">Usia : 21 Tahun</p>
              <p class="card-text" style="margin-bottom:-0.1%">No. KTP : 12345678</p>
              <p class="card-text" style="margin-bottom:1%">No. Surat : 2</p>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                Dr. Bambang Hardoyo
              </div>
              <h5 class="card-title">Laporan Medical Check Up</h5>
              <p class="card-text" style="margin-bottom:-0.1%">Berikut adalah hasil check up : </p>
              <p class="card-text" style="margin-bottom:-0.1%">Nama : Ahmad Zakiy Mulyanto</p>
              <p class="card-text" style="margin-bottom:-0.1%">Usia : 21 Tahun</p>
              <p class="card-text" style="margin-bottom:-0.1%">No. KTP : 12345678</p>
              <p class="card-text" style="margin-bottom:1%">No. Surat : 1</p>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Download
              </a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Selasa, 1 Oktober 2020</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Row -->

  </div styles="row">
  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; ALIVE 2020</span>
      </div>
    </div>
  </footer>
</div>
<!-- End of Footer -->
@endsection