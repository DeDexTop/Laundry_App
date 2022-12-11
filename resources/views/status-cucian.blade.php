@extends('layout.main')

@section('container')

<script>
    var input = document.getElementById("search");
    input.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("button").click();
      }
    });
</script>

<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Status Cucian Anda</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
</main>

<!-- DataTales Example -->
<div class="continer-fluid">
    <div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h2 class="ml-5 font-weight-bold text-primary">Daftar Cucian</h2> 
        </div>
        <div class="card-body">
            <form action="/cucian">
                <input class="mb-3 ml-5" type="text" placeholder="Cari Nama Anda" id="search" name="search">
                <button type="submit" id="button" hidden></button>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Selesai</th>
                            <th>Status Cucian</th>
                            <th>Status Pembayaran</th>
                            <th>Pilihan Pengiriman</th>
                            <th>Total Pembayaran (Rp)</th>
                            <th>Status Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laundries as $laundry)
                        <tr>
                            <td>{{ $laundry->pelanggan }}</td>
                            <td>{{ $laundry->tgl_selesai }}</td>
                            <td>{{ $laundry->status_pencucian }}</td>
                            <td>{{ $laundry->status_pembayaran }}</td>
                            <td>{{ $laundry->pilihan_pengantaran }}</td>
                            <td>{{ $laundry->total }}</td>
                            <td>{{ $laundry->status_pengiriman }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

<!-- Scroll Up -->
<div id="back-top" >
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
@endsection