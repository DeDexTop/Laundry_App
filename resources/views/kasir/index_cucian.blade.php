@extends('layouts.main')

@section('containers')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-primary">Data Laundry</h1>
</div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Cucian</h6>
  </div>
  <div class="card-body">
    <a href="/kasir/laundry/create" class="btn btn-primary mb-5">Tambah Cucian</a>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-md-5" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Status Cucian</th>
              <th scope="col">Status Pembayaran</th>
              <th scope="col">Pilihan Pengriman</th>
              <th scope="col">Total Pembayaran</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($laundries as $laundry)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $laundry->pelanggan }}</td>
                <td>{{ $laundry->status_pencucian }}</td>
                <td>{{ $laundry->status_pembayaran }}</td>
                <td>{{ $laundry->pilihan_pengantaran }}</td>
                <td>{{ $laundry->total }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
</div>

@endsection