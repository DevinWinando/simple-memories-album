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
                        
                        <div class="col d-flex justify-content-end mt-5">
                            <form action="{{ $siswa->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-outline-dark">Hapus</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        
    </div>
@endsection