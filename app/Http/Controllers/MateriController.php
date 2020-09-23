<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use App\Materi;
use App\Mapel;
use App\Kelas;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Auth::user()->materi()->paginate(10);
        $mapel = Mapel::all();
        return view('guru.materi.index', compact('materi', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        return view('guru.materi.create', compact('mapel', 'kelas'));
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
            'mapel_id' => 'required',
            'judul' => 'required|min:3',
            'konten' => 'required',
            'gambar' => 'required',
        ]);
        // dd($request->all());
        $gambar = $request->gambar;
        $new_gambar = time() . "_" . $gambar->getClientOriginalName();
        $materi = Materi::create([
            'mapel_id' => $request->mapel_id,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'gambar' => 'upload/materi/' . $new_gambar,
            'slug' => Str::slug($request->judul),
            'guru_id' => Auth::id(),

        ]);

        $materi->kelas()->attach($request->kelas_id);

        $gambar->move('upload/materi/', $new_gambar);
        return redirect('/gurumateri')->with('sukses', 'Materi berhasil di simpan');
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
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $materi = Materi::findorfail($id);
        return view('guru.materi.edit', compact('materi', 'kelas', 'mapel'));
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
            'mapel_id' => 'required',
            'judul' => 'required|min:3',
            'konten' => 'required',
        ]);
        // dd($request->all());
        $materi = Materi::findorfail($id);

        if ($request->has('gambar')) {
            unlink($materi->gambar);
            $gambar = $request->gambar;
            $new_gambar = time() . "_" . $gambar->getClientOriginalName();
            $gambar->move('upload/materi/', $new_gambar);

            $materi_data = [
                'mapel_id' => $request->mapel_id,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => 'upload/materi/' . $new_gambar,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $materi_data = [
                'mapel_id' => $request->mapel_id,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'slug' => Str::slug($request->judul)
            ];
        }

        $materi->kelas()->sync($request->kelas_id);
        $materi->update($materi_data);

        return redirect('/gurumateri')->with('sukses', 'Materi berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::findorfail($id);
        $materi->delete();
        return redirect()->back()->with('sukses', 'Materi berhasil di pindahkan ke tempat sampah');
    }
    public function sampah()
    {
        $materi = Materi::onlyTrashed()->paginate(10);
        return view('guru.materi.sampah', compact('materi'));
    }
    public function restore($id)
    {
        $materi = Materi::withTrashed()->where('id', $id)->first();
        $materi->restore();

        return redirect()->back()->with('sukses', 'Postingan berhasil di Restore');
    }
    public function kill($id)
    {
        $materi = Materi::withTrashed()->where('id', $id)->first();
        unlink($materi->gambar);
        $materi->kelas()->detach();
        $materi->forceDelete();
        return redirect()->back()->with('sukses', 'Postingan berhasil di Hapus Permanen');
    }
    public function isi($slug)
    {
        $materisemua = Materi::orderBy('created_at', 'desc')->paginate(4);
        $mapel = Mapel::all();
        $data = Materi::where('slug', $slug)->get();
        // dd($materi);
        return view('siswa.materi.isi', compact('data', 'materisemua', 'mapel'));
    }
}
