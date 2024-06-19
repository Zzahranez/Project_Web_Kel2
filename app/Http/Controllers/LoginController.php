<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan nama view sesuai dengan file blade Anda
    }

    

    public function login(Request $request)
    {
       
            // Validasi input
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
    
            // Ambil kredensial dari request
            $credentials = $request->only('username', 'password');
    
            // Lakukan proses autentikasi
            if (Auth::attempt($credentials)) {
                // Debugging: Cetak pesan untuk memastikan autentikasi berhasil
                dd('Login berhasil');
                return redirect()->route('admindash');
            }
    
            // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'The provided credentials do not match our records.');
        }
}