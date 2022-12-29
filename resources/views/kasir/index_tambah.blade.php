@extends('layouts.main')

@section('containers')

<script type='text/javascript'>
  $(document).ready(function() {
    var wrapper = $("#container");
    var add_button = $("#btn");

    $(add_button).click(function(e) {
        e.preventDefault();
        $(wrapper).append('<div class="form-row"><div class="card shadow col-md-10 mb-3"><div class="card-body"><div class="row justify-content-center"><select class="form-control col-md-8" name="kategori_id[]" id="kategori"><option selected>Pilih Kategori</option>       @foreach ($categories as $category)<option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>@endforeach</select><input class="form-control col-md-3 ml-3" type="text" name="berat[]" placeholder="/ KG"></div></div></div><button type="button" class="btn btn-danger ml-3" style="margin: auto; "id="delete"><i class="fa-solid fa-square-xmark"></i></button></div>'); //add input box
    });

    $(wrapper).on("click", "#delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <form action="/kasir/laundry" method="post">
        @csrf
          <div class="form-row justify-content-center mt-4">
            <div class="form-group col-md-4">
              <label for="nama">Nama Pelanggan</label>
              <input name="pelanggan" type="text" class="form-control @error('pelanggan') is-invalid @enderror" id="nama" required autofocus value="{{ old('pelanggan') }}">
              @error('pelanggan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group col-md-4">
              <label for="telpon">No. Telpon</label>
              <input name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" id="telpon" required value="{{ old('no_telp') }}">
              @error('no_telp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group col-md-8">
              <label for="inputAddress">Alamat</label>
              <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputAddress" name="alamat" required>{{ old('alamat') }}</textarea>
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group col-md-4">
              <label for="inputState">Pilihan Pengantaran</label>
              <select id="inputState" class="form-control @error('pilihan_pengantaran') is-invalid @enderror" name="pilihan_pengantaran" required>
                <option selected></option>
                <option value="diantar">Diantar</option>
                <option value="ambil ditempat">Ambil Ditempat</option>
              </select>
              @error('pilihan_pengantaran')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Pilihan Pembayaran</label>
              <select id="inputState" class="form-control @error('status_pembayaran') is-invalid @enderror" name="status_pembayaran" required>
                <option selected></option>
                <option value="lunas">Sekarang</option>
                <option value="belum lunas">Saat di Antar</option>
                <option value="belum lunas">Saat di Ambil</option>
              </select>
              @error('status_pembayaran')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group">
              <div class="form-row">
                <div class="card shadow col-md-10" id="card">
                  <div class="card-body">
                    <div class="row justify-content-center">
                      <select class="form-control col-md-8 @error('kategori_id') is-invalid @enderror" name="kategori_id[]" id="kategori">
                        <option selected>Pilih Kategori</option>
                        @foreach ($categories as $category)
                        
                        @if (old('kategori_id') == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                        @else
                          <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endif
  
                        @endforeach
                      </select>
                      @error('kategori_id')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                      <input class="form-control col-md-3 ml-3 @error('berat') is-invalid @enderror" type="text" name="berat[]" placeholder="/ KG">
                      @error('berat')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-primary ml-3" style="margin: auto; "id="btn"><i class="fa-solid fa-square-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group" id="container">
              
            </div>
          </div>
          <div class="form-row justify-content-center mb-3">
            <div class="mt-3">
              <button type="submit" class="btn btn-primary">Tambah Cucian</button>
              <a href="{{ url('/kasir/laundry') }}" class="btn btn-primary ml-3" style="width: 115px">Batal</a>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection