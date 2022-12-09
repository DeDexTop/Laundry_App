@extends('dashboard.layouts.main')

@section('containers')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary">Daftar Karyawan</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-4" role="alert">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive col-lg-10">
          <a href="/dashboard/user/create" class="btn btn-primary mb-3 mt-3">Tambah Pegawai Baru</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="/dashboard/user/{{ $user->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-edit" style="color: white"></i></a>
                          <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash" style="color: white"></i></button>
                          </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
@endsection