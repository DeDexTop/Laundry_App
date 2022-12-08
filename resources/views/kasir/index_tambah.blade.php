@extends('layouts.main')

@section('containers')

<div class="container-fluid pt-4 mb-5 ">
    <form action="/kasir/laundry" method="post">
      @csrf
        <div class="form-row justify-content-center">
          <div class="form-group col-md-4">
            <label for="nama">Nama Pelanggan</label>
            <input name="pelanggan" type="text" class="form-control" id="nama" required autofocus>
          </div>
          <div class="form-group col-md-4">
            <label for="telpon">No. Telpon</label>
            <input name="no_telp" type="text" class="form-control" id="telpon" required>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-md-8">
            <label for="inputAddress">Alamat</label>
            <textarea type="text" class="form-control" id="inputAddress" name="alamat" required></textarea>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-md-4">
            <label for="inputState">Pilihan Pengantaran</label>
            <select id="inputState" class="form-control" name="pilihan_pengantaran" required>
              <option selected></option>
              <option value="diantar">Diantar</option>
              <option value="ambil ditempat">Ambil Ditempat</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Pilihan Pembayaran</label>
            <select id="inputState" class="form-control" name="status_pembayaran" req>
              <option selected></option>
              <option value="lunas">Di Tempat</option>
              <option value="belum lunas">Saat di Antar</option>
            </select>
          </div>
        </div>
        <div class="form-row justify-content-start">
          <div class="form-group">
            <div class="form-check">
              <div class="card shadow">
                <div class="card-body">
                  <select class="form-control" name="kategori_id[]" id="kategori">
                    <option selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="mt-3">
              <button type="submit" class="btn btn-primary">Tambah Cucian</button>
              <a href="{{ url('/kasir/laundry') }}" class="btn btn-primary ml-3" style="width: 115px">Batal</a>
            </div>
          </div>
        </div>
    </form>
</div>

@endsection