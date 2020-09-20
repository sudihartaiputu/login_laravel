<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswaskl;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SiswasklImport;

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
        return redirect('admin.skl.index')->with('sukses', 'Siswa berhasil ditambah!');
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
        //
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
}
