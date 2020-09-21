<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guru;
use \App\Materi;
use \App\Posts;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }
    public function adminerror()
    {
        return view('admin.error');
    }
    public function berandaguru()
    {
        return view('guru.beranda');
    }
    public function guruerror()
    {
        return view('guru.error');
    }
    public function berandasiswa()
    {
        $materi = Materi::orderBy('created_at', 'desc')->get();
        $posts = Posts::orderBy('created_at', 'desc')->get();
        return view('siswa.beranda', compact('materi', 'posts'));
    }
    public function berandasiswaskl()
    {
        return view('skl.beranda');
    }
    public function profil(Request $request, $id)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nip' => 'required|min:3',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
        ]);
        // dd($request->all());
        $guru = Guru::findorfail($id);

        if ($request->has('foto')) {
            unlink($guru->foto);
            $foto = $request->foto;
            $new_foto = time() . "_" . $foto->getClientOriginalName();
            $foto->move('public/upload/guru/', $new_foto);

            $guru_data = [
                'nik' => $request->nik,
                'nip' => $request->nip,
                'name' => $request->name,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'jk' => $request->jk,
                'foto' => 'public/upload/guru/' . $new_foto,
            ];
        } else {
            $guru_data = [
                'nik' => $request->nik,
                'nip' => $request->nip,
                'name' => $request->name,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'jk' => $request->jk,
            ];
        }

        $guru->update($guru_data);
        return redirect('/berandaguru')->with('sukses', 'Profil berhasil di Update');
    }
}
