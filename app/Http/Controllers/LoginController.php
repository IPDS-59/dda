<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login', [
            'title' => 'login',
            'title2' => 'test',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role == 2) {
                return redirect()->route('user.dashboard');
            } else {
                return redirect('/login');
            }
        }

        return back()->with('loginError', 'Username atau Password salah!');
        // dd('berhasil login');
    }

    public function logout(Request $request)
    {
        Cookie::queue(Cookie::make('last_username', auth()->user()->username, 2628000));
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
