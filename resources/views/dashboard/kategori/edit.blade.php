@extends('dashboard.layouts.main')

@section('containers')

<div class="container-fluid">
    <div class="card shadow col-md-8">
        <div class="card-body">
            <form method="post" action="{{ url('/dashboard/category') }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="justify-content-center">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <h4 class="text-right">Create Category</h4>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-md-12">
                                <input id="nama" name="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategori" value="{{ old('nama_kategori', $category->nama_kategori) }}">
                                @error('nama_kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <input id="harga" name="harga" type="text" class="form-control @error('harga') is-invalid @enderror" placeholder="harga" value="{{ old('harga', $category->harga) }}">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button ml-4" type="submit" style="width: 115px">Tambah</button>
                            <a href="{{ url('/dashboard/category') }}" class="btn btn-primary profile-button ml-3" style="width: 115px">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection