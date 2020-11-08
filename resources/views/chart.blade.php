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
    <hr class="sidebar-divider my-2">

    <!-- Nav Item - Dashboard -->
    <div class="sidebar-heading">
        Pasien
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Pasien</span></a>
    </li>

    <hr class="sidebar-divider my-2">

    <div class="sidebar-heading">
        Pasien
    </div>

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
<div class="container-fluid">

    <!-- Page Heading -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unduhModal">Unduh
        Laporan</button>
    <button type=" button" class="btn btn-warning" data-toggle="modal" data-target="#unggahModal">Unggah
        Laporan </button>

    <div class=" d-sm-flex align-items-center justify-content-center mt-4">
        <h1 class="h1 mb-0 text-gray-800">EKG Report</h1>
    </div>

    <div class="text-l font-weight-bold text-dark mb-1">
        Nama: Pasien 1</div>
    <div class="text-l font-weight-bold text-dark mb-1">
        Umur: 21 Tahun</div>

    <div class="container">
        <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current
                    session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Unduh Modal-->
    <div class="modal fade" id="unduhModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unduh Laporan Kesehatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol Unduh untuk Mengunduh Laporan Kesehatan dari
                    Pasien.
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="login.html">Unduh</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Unggah Modal-->
    <div class="modal fade" id="unggahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Laporan Kesehatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="input-group">
                    <div class="custom-file mx-4">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>

                <div class="custom-control custom-checkbox mx-4">
                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">Surat atau Laporan
                        Kesehatan yang saya unggah adalah benar dan merupakan diagnosa yang
                        sebenar-benarnya</label>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-primary" href="login.html">Lanjutkan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    var label = [];
    var j = 0;
    for (let i = 0; i <= 720; i++) {
        if (i % 360 == 0) {
            label[i] = j;
            j++;
        } else {
            label[i] = "";
        }
    }
    var data1 = <?php echo json_encode($data1); ?>;
    var data2 = <?php echo json_encode($data2); ?>;
    var sinyal1 = data1.map(Number);
    var sinyal2 = data2.map(Number);
    var ctx = document.getElementById("chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: label,
            datasets: [{
                    label: 'Data 1 - Normal',
                    data: sinyal1,
                    //data: ["1", "2", "3", "4", "5"],
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255)',
                    borderWidth: 1,
                    pointRadius: 0
                },
                {
                    label: 'Data 2 - Arrhythmia',
                    data: sinyal2,
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,0,0)',
                    borderWidth: 1,
                    pointRadius: 0
                }
            ]
        },

        options: {
            scales: {
                scales: {
                    yAxes: [{
                        beginAtZero: false
                    }],
                    xAxes: [{
                        autoskip: true,
                        maxTicketsLimit: 20
                    }]
                }
            },
            tooltips: {
                mode: 'index'
            },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(255,255,255)',
                    fontSize: 16
                }
            }
        }
    });
</script>
@endsection