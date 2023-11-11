<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('login');
    }

    public function loginStore(Request $request)
    {
        $credential = $request->only('username', 'password');

        if (Auth::attempt($credential)) {
            switch (Auth::user()->hak_akses) {
                case 'admin':
                    return redirect()->route('admin.beranda')->with('sukses', 'anda berhasil login');

                case 'mahasiswa':
                    dd('beranda belum dibuat');

                default:
                    return redirect()->route('auth.login')->with('error', 'gagal melakukan login');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login')->with('sukses', 'anda berhasil logout');
    }
}
