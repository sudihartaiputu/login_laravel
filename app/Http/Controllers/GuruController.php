<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Gurukelas;
use Auth;

class GuruController extends Controller
{
    // AUTH ADMIN
    public function index()
    {
        $guru = Guru::paginate(10);
        return view('admin.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'nik' => 'required|numeric|min:3',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $foto = $request->foto;
        $new_foto = time() . "_" . $foto->getClientOriginalName();
        $guru = Guru::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'nip' => $request->nip,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'foto' => 'upload/guru/' . $new_foto,
            'level' => $request->level,
            'password' => bcrypt('smanev'),
            'sandi' => 'smanev'
        ]);

        $foto->move('upload/guru/', $new_foto);
        return redirect('guru')->with('sukses', 'Guru berhasil ditambah!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $guru = Guru::findorfail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'nik' => 'required|numeric|min:3',
            'nip' => 'required|numeric|min:3',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'email' => 'required|email',
            'level' => 'required',

        ]);
        $guru_data = [
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'nip' => $request->nip,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'level' => $request->level,
            'password' => bcrypt('smanev'),
            'sandi' => 'smanev'
        ];
        Guru::whereId($id)->update($guru_data);
        return redirect('guru')->with('sukses', 'Guru berhasil diupdate!');
    }

    public function destroy($id)
    {
        $guru = Guru::findorfail($id);
        unlink($guru->foto);
        $guru->delete();
        return redirect()->back()->with('sukses', 'Guru berhasil di hapus');
    }

    // AUTH GURU

    public function gurukelas()
    {
        $kelasajar = Auth::user()->load('gurukelas');
        return view('guru.kelas.index', compact('kelasajar'));
    }
    public function gurukelascreate()
    {
        $kelas = \App\Kelas::all();
        $mapel = \App\Mapel::all();
        return view('guru.kelas.create', compact('kelas', 'mapel'));
    }
    public function gurukelasstore(Request $request)
    {
        // dd($request->all());

        for ($i = 0; $i < count($request->kelas_id); $i++) {
            $gurukelas[] = [
                'guru_id' => Auth::id(),
                'mapel_id' => $request->mapel_id,
                'kelas_id' => $request->kelas_id[$i],
            ];
        }
        Gurukelas::insert($gurukelas);

        return redirect('/gurukelas')->with('sukses', 'Kelas berhasil di simpan');
    }
    public function gurukelasdelete($id)
    {
        $gurukelas = Gurukelas::findorfail($id);
        $gurukelas->delete();
        return redirect('/gurukelas')->with('sukses', 'Kelas berhasil di dihapus');
    }
}
