@extends('layouts.main')

@section('containers')

<script type='text/javascript'>
  $(document).ready(function() {
    var wrapper = $("#container");
    var add_button = $("#btn");

    $(add_button).click(function(e) {
        e.preventDefault();
        $(wrapper).append('<div class="form-row"><div class="card shadow col-md-8" id="card"><div class="card-body"><div class="row justify-content-center"><select class="form-control col-md-8" name="kategori_id[]" id="kategori"><option selected>Pilih Kategori</option>       @foreach ($categories as $category)<option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>@endforeach</select><input class="form-control col-md-3 ml-3" type="text" name="berat[]" placeholder="/ KG"></div></div></div><button type="button" class="btn btn-primary col-md-2 ml-3" style="height: 45px; margin: auto" id="delete">+</button></div>'); //add input box
    });

    $(wrapper).on("click", "#delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>

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
        <div class="form-row justify-content-center">
          <div class="form-group">
            <div class="form-row">
              <div class="card shadow col-md-8" id="card">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <select class="form-control col-md-8" name="kategori_id[]" id="kategori">
                      <option selected>Pilih Kategori</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                      @endforeach
                    </select>
                    <input class="form-control col-md-3 ml-3" type="text" name="berat[]" placeholder="/ KG">
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary col-md-2 ml-3" style="height: 45px; margin: auto" id="btn">+</button>
            </div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group" id="container">
            
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Tambah Cucian</button>
            <a href="{{ url('/kasir/laundry') }}" class="btn btn-primary ml-3" style="width: 115px">Batal</a>
          </div>
        </div>
    </form>
</div>

@endsection