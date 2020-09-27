<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::paginate(10);
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('admin.siswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'nis' => 'required|numeric|min:3',
            'nisn' => 'required|numeric|min:3',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'kelas' => 'required'
        ]);
        // dd($request->all());
        Siswa::create([
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'kelas_id' => $request->kelas,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'level' => $request->level,
            'password' => bcrypt('smanev'),
            'sandi' => ''
        ]);
        return redirect('siswa.index')->with('sukses', 'Siswa berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findorfail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'level' => 'required'
        ]);
        $siswa_data = [
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => bcrypt('smanev'),
            'sandi' => ""
        ];
        Siswa::whereId($id)->update($siswa_data);
        return redirect('siswa')->with('sukses', 'Siswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findorfail($id);
        unlink($siswa->foto);
        $siswa->delete();
        return redirect()->back()->with('sukses', 'Siswa berhasil di hapus');
    }
    public function biodata($id)
    {
        $siswa = Siswa::findorfail($id);
        $biodata = BiodataSiswa::all();
        return view('admin.siswa.biodata', compact('siswa', 'biodata'));
    }
    public function addbiodata(Request $request, $id)
    {
        $this->validate($request, [
            'kelas_id' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',

        ]);
        BiodataSiswa::create([
            'siswa_id' => $id,
            'kelas_id' => $request->kelas_id,
            'nik' => $request->nik,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,

        ]);
        return redirect('siswa')->with('sukses', 'Siswa berhasil diubah!');
    }
}
