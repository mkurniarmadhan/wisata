<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // menampilkan halaman login
    public function login()
    {

        return view('auth.login');
    }


    // prorses login

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (!Auth::user()->is_admin) return to_route('homepage.index');


            return to_route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // menampilkan halaman daftar
    public function register()
    {

        return view('auth.register');
    }

    // proses daftar
    public function doRegister(Request $request)
    {


        $credentials = $request->validate([
            'namaLengkap' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required'],
            'alamat' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);



        $u =    User::create([
            'namaLengkap' => $request->namaLengkap,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password),
        ]);


        Auth::login($u);

        return to_route('homepage.index');
    }

    // proses keluar

    public function logout()
    {

        Auth::logout();

        return to_route('homepage.index');
    }
}
