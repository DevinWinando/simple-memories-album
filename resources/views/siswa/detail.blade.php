@extends('layout.template')

@section('title')
    Card
@endsection

@section('container')
    <div class="container">
        <div class="d-flex justify-content-center card-margin">
            <div class="card shadow" style="width: 35rem; height: 25rem;">
                <div class="card-body">
                    <h5 class="text-center">{{ $siswa->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted text-center mb-4">
                    {{ $siswa->jurusan }}
                    </h6>
                    <div class="ps-4 pt-2 pb-4">
                        <div class="row">
                            <div class="col-4">Nama</div>
                            <div class="col-1">:</div>
                            <div class="col-7">{{ $siswa->nama }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Tempat/tanggal lahir</div>
                            <div class="col-1">:</div>
                            <div class="col-7">{{ $siswa->ttl }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Jenis Kelamin</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{ $siswa->gender }}</div>
                        </div>

                        <div class="row">
                            <div class="col-4">Alamat</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{ $siswa->alamat }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Kontak</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{ $siswa->hp }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Email</div>
                            <div class="col-1">:</div>
                            <div class="col-6">{{ $siswa->email }}</div>
                        </div>
                    </div>

                    <div class="row text-center mt-2">
                        <p class="card-text">
                            "{{ $siswa->quotes }}"
                        </p>
                    </div>

                    <div class="row">
                        <div class="col d-flex justify-content-start mt-5 ">
                            <a href="/siswa" class="btn btn-outline-dark">back</a>
                        </div>
                        
                        <div class="col-1 d-flex justify-content-end mt-5 pe-4">
                            <form action="{{ $siswa->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-dark">Hapus</button>
                            </form>
                        </div>

                        <div class="col-1 d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-outline-dark btnTambah" data-bs-toggle="modal" data-bs-target="#formModal">
                                Edit
                            </button>
                        </div>                          
                    </div>
                </div>
            </div>
        </div>   
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="Edit Data" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahData">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="/siswa/{{ $siswa->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
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
                    </div>
                    <div class="text-end pe-3 pb-2">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection