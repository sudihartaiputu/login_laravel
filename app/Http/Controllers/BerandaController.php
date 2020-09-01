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
    public function berandaguru()
    {
        return view('guru.beranda');
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
}
