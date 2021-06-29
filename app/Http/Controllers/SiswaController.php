<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();

        return view('siswa.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;

        // $siswa->nama = $request->nama;
        // $siswa->kelas = $request->kelas;
        // $siswa->jurusan = $request->jurusan;
        // $siswa->ttl = $request->ttl;
        // $siswa->gender = $request->gender;
        // $siswa->hp = $request->hp;
        // $siswa->email = $request->email;
        // $siswa->alamat = $request->alamat;
        // $siswa->quotes = $request->quotes;
        
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'ttl' => 'required',
            'gender' => 'required',
            'hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'quotes' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect('/siswa')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        Siswa::where('id', $siswa->id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'ttl' => $request->ttl,
            'gender' => $request->gender,
            'hp' => $request->hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'quotes' => $request->quotes
        ]);

        return redirect('/siswa')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect('/siswa')->with('status', 'Data Berhasil Dihapus');
    }
}