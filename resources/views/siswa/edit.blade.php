@extends('layout.template')

@section('title')
    Edit Data
@endsection

@section('container')
<form action="/siswa/{{ $siswa->id }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
            autocomplete="off" required value="{{ $siswa->nama }}">
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas"
                autocomplete="off" required value="{{ $siswa->kelas }}">
        </div>
        <div class="mb-3 col-6">
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan"
                autocomplete="off" required value="{{ $siswa->jurusan }}">
        </div>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat/Tanggal Lahir"
            autocomplete="off" required value="{{ $siswa->ttl }}">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin"
            autocomplete="off" required value="{{ $siswa->gender }}">
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone"
            autocomplete="off" required value="{{ $siswa->hp }}">
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
            autocomplete="off" required value="{{ $siswa->email }}">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"
            autocomplete="off" required value="{{ $siswa->alamat }}">
    </div>
    <div>
        <input type="text" class="form-control" id="quotes" name="quotes" placeholder="Quotes"
            autocomplete="off" required value="{{ $siswa->quotes }}">
    </div>
    <div class="text-end pe-3 pb-2">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="">Tambahkan</button>
    </div>
</form>
@endsection