@extends('layouts.main')

@section('containers')

    <!-- DataTales Example -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 text-primary">Data Laundry</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengantaran</h6>
        </div>
        <div class="card-body">
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
                    <th scope="col">Status Pengantaran</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
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
                      <td>{{ $laundry->status_pengiriman }}</td>
                      <td>{{ $laundry->alamat }}</td>
                      <td>
                        <form action="/pencuci/edit/{{ $laundry->id }}" method="post">
                          @csrf
                          @method('put')
      
                          @if ($laundry->status_pengiriman == 'belum diantar')
                            <button type="submit" class="btn btn-primary" name="antar" value="antar"><i class="fa-solid fa-truck-fast"></i></button>
                          @elseif ($laundry->status_pengiriman == 'sedang di kirim')
                            <button type="submit" class="btn btn-success" name="kirim" value="kirim"><i class="fa-solid fa-check"></i></i></button>
                          @endif 
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>


<!-- /.container-fluid -->


<!-- End of Main Content -->
@endsection