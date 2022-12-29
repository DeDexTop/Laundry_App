@extends('dashboard.layouts.main')

@section('containers')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Pemasukan </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ $total }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-rupiah-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Cucian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tugas }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cucian Menunggu
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $pending }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Kiriman Menunggu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kiriman }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck-fast fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-7 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pemasukan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-5 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Cucian Hari Ini</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center" style="font-size: 10px">
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Dicuci
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Dikirim
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Diambil
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-warning"></i> Menunggu
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Belum Dikirim
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script type="text/javascript">
    var _month = JSON.parse('{!! json_encode($months) !!}');
    var _total = JSON.parse('{!! json_encode($totals) !!}');
    var _pencucian = JSON.parse('{!! json_encode($cucian) !!}');
    var _pengiriman = JSON.parse('{!! json_encode($pengiriman) !!}');
    var _menunggu = JSON.parse('{!! json_encode($menunggu) !!}');
    var _diambil = JSON.parse('{!! json_encode($diambil) !!}');
    var _blm_dikirim = JSON.parse('{!! json_encode($kiriman) !!}');
</script>
    
<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

@include('dashboard.layouts.footer')

@endsection