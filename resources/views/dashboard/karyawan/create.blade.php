@extends('dashboard.layouts.main')

@section('containers')

<div class="container-fluid">
        <form method="post" action="{{ url('/dashboard/user') }}" enctype="multipart/form-data">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 border-right mt-5">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/6672868/15049/v/600/depositphotos_150490554-stock-illustration-user-profile-group-outline-icon.jpg"></div>
                        </div>
                        <div class="col-md-5 justify-content-center border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <h4 class="text-right">Create Profile</h4>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input id="nama" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input id="no_telp" name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Nomor Telpon" value="{{ old('no_telp') }}">
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" placeholder="Alamat">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" type="submit" style="width: 115px">Tambah</button>
                                    <a href="{{ url('/dashboard/karyawan') }}" class="btn btn-primary profile-button ml-3" style="width: 115px">Batal</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 justify-content-center">
                            <div class="p-3 py-5">
                                <div class="mt-2 d-flex justify-content-center align-items-center experience"><span>Jabatan</span></div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <select class="mt-2 form-control @error('role') is-invalid @enderror" name="role">
                                            <option value="Pencuci">Pencuci</option>
                                            <option value="Kasir">Kasir</option>
                                            <option value="Kurir">Kurir</option>
                
                                            @error('role')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    

@endsection