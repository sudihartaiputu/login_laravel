<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/beranda');
            // GURU
        } elseif (Auth::guard('guru')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/berandaguru');
            // SISWA
        } elseif (Auth::guard('siswa')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/berandasiswa');
            // SISWASKL
        } elseif (Auth::guard('siswaskl')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/berandasiswaskl');
        }
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
            // GURU
        } elseif (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
            // SISWA
        } elseif (Auth::guard('siswa')->check()) {
            Auth::guard('siswa')->logout();
            // SISWASKL
        } elseif (Auth::guard('siswaskl')->check()) {
            Auth::guard('siswaskl')->logout();
        }
        return redirect('/');
    }
}
