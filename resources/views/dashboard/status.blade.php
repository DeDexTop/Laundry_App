@extends('dashboard.layouts.main')

@section('containers')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Pencucian</h1>
    <p class="mb-4">Seluruh data dan detail pencucian akan di tampilkan pada halaman ini.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Cucian</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Status Cucian</th>
                            <th>Alamat</th>
                            <th>Pilihan Pengiriman</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laundries as $laundry)
                            <tr>
                                <td>{{ $laundry->pelanggan }}</td>
                                <td>{{ $laundry->tgl_masuk }}</td>
                                <td>{{ $laundry->tgl_selesai }}</td>
                                <td>{{ $laundry->status_pencucian }}</td>
                                <td>{{ $laundry->alamat }}</td>
                                <td>{{ $laundry->pilihan_pengantaran }}</td>
                                <td>{{ $laundry->status_pembayaran }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection