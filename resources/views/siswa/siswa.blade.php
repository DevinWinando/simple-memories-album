@extends('layout.template')
    
@section('title')
    Data Siswa
@endsection

@section('container')
<div class="container">
    <h1 class="text-center">Data Siswa</h1>

    <table class="table mt-4 table-dark table-striped table-hover text-center">
        <thead>
          <tr>
            <th scope="col">Absen</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->kelas }}</td>
                    <td>{{ $row->jurusan }}</td>
                    <td>
                        <a href="/siswa/{{ $row->id }}"
                            class="link-light">Detail</a>
                    </td
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <button type="button" class="btn btn-outline-dark btnTambah" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data
        </button>
    </div>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show position-absolute top-50 start-50 translate-middle" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- Modal --}}
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="Tambah Data" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahData">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                            autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas"
                                autocomplete="off" required>
                        </div>
                        <div class="mb-3 col-6">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat/Tanggal Lahir"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                            autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
                            autocomplete="off" required>
                    </div>
                    <div>
                        <input type="text" class="form-control" id="quotes" name="quotes" placeholder="Quotes"
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="text-end pe-3 pb-2">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>

    

@endsection

