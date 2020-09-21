<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Kategori;
use App\Materi;
use App\Posts;

class WelcomeController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        $posts = Posts::orderBy('created_at', 'desc')->paginate(4);
        return view('welcome', compact('kategori', 'posts', 'guru'));
    }
    public function kontak()
    {
        return view('welcome.kontak');
    }
    public function error()
    {
        return view('welcome.error');
    }
}
