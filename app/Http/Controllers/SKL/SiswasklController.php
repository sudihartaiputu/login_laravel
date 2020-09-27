<?php

namespace App\Http\Controllers\SKL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SiswasklImport;
use App\Siswaskl;
use App\Suratskl;
use App\PengaturanSkl;

class SiswasklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaskl = Siswaskl::paginate(10);
        return view('admin.skl.index', compact('siswaskl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skl.create');
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
            'level' => 'required'
        ]);
        Siswaskl::create([
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'level' => $request->level,
            'password' => bcrypt('smanev'),
            'sandi' => 'smanev'

        ]);
        return redirect('siswaskl')->with('sukses', 'Siswa berhasil ditambah!');
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
        $siswaskl = Siswaskl::findorfail($id);
        return view('admin.skl.edit', compact('siswaskl'));
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
            'password' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'nopes' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'level' => 'required'
        ]);
        $siswaskl_data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('$request->password'),
            'sandi' => $request->password,
            // DATA PENDUKUNG
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'nopes' => $request->nopes,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'keterangan' => $request->keterangan,
            'level' => $request->level,
            // NILAI
            'n_agama' => $request->n_agama,
            'n_pkn' => $request->n_pkn,
            'n_bindo' => $request->n_bindo,
            'n_basing' => $request->n_basing,
            'n_mtk' => $request->n_mtk,
            'n_sejindo' => $request->n_sejindo,
            'n_pjs' => $request->n_pjs,
            'n_sbud' => $request->n_sbud,
            'n_prakarya' => $request->n_prakarya,
            'n_minat1' => $request->n_minat1,
            'n_minat2' => $request->n_minat2,
            'n_minat3' => $request->n_minat3,
            'n_minat4' => $request->n_minat4,
            'n_minat5' => $request->n_minat5,
            'n_minat6' => $request->n_minat6
        ];
        Siswaskl::whereId($id)->update($siswaskl_data);
        return redirect('siswaskl')->with('sukses', 'Siswa berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswaskl = Siswaskl::findorfail($id);
        $siswaskl->delete();
        return redirect()->back()->with('sukses', 'Siswa berhasil di hapus');
    }
    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/siswaskl/', $nama_file);

        // import data
        $import = Excel::import(new SiswasklImport(), storage_path('app/public/excel/siswaskl/' . $nama_file));

        //remove from server
        Storage::delete($path);

        if ($import) {
            //redirect
            return redirect()->route('siswaskl.index')->with(['sukses' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('siswaskl.index')->with(['error' => 'Data Gagal Diimport!']);
        }
    }
    public function sklsurat()
    {
        $suratskl = Suratskl::all();
        return view('admin.skl.surat', compact('suratskl'));
    }
    public function pengaturanskl()
    {
        $pengaturanskl = PengaturanSkl::all();
        return view('admin.skl.pengaturan', compact('pengaturanskl'));
    }
    public function pengaturansklupdate(Request $request, $id)
    {
        $this->validate($request, [
            'nama_sekolah' => 'required|min:3|max:100',
            'npsn' => 'required|numeric|min:3',
            'nss' => 'required',
            'nama_kepsek' => 'required',
            'nip_kepsek' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'wstempel' => 'required',
            'wttd' => 'required',
        ]);
        $pengaturanskl = PengaturanSkl::findorfail($id);
        if ($request->has('stempel')) {
            unlink($pengaturanskl->stempel);
            $stempel = $request->stempel;
            $new_stempel = time() . "_" . $stempel->getClientOriginalName();
            $stempel->move('img/', $new_stempel);
        } elseif ($request->has('ttd')) {
            unlink($pengaturanskl->ttd);
            $ttd = $request->ttd;
            $new_ttd = time() . "_" . $ttd->getClientOriginalName();
            $ttd->move('img/', $new_ttd);

            $new_data = [
                'nama_sekolah' => $request->nama_sekolah,
                'npsn' => $request->npsn,
                'nss' => $request->nss,
                'nama_kepsek' => $request->nama_kepsek,
                'nip_kepsek' => $request->nip_kepsek,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'wstempel' => $request->wstempel,
                'wttd' => $request->wttd,
                'stempel' => 'img/' . $new_stempel,
                'ttd' => 'img/' . $new_ttd,

            ];
        } else {
            $new_data = [
                'nama_sekolah' => $request->nama_sekolah,
                'npsn' => $request->npsn,
                'nss' => $request->nss,
                'nama_kepsek' => $request->nama_kepsek,
                'nip_kepsek' => $request->nip_kepsek,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'provinsi' => $request->provinsi,
                'wstempel' => $request->wstempel,
                'wttd' => $request->wttd,
            ];
        }
        // dd($request->all());

        $pengaturanskl->update($new_data);
        return redirect('/pengaturanskl')->with('sukses', 'Materi berhasil di Update');
    }
}
