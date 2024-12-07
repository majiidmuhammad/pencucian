<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

  public function login()
  {
    return view('backend.v_login.login', [
      'judul' => 'Login',
    ]);
  }
  public function authenticateBackend(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    if (Auth::attempt($credentials)) {
      // Cek apakah pengguna aktif
      if (Auth::user()->status == 0) {
        Auth::logout();
        return back()->with('error', 'User  belum aktif');
      }

      // Cek peran pengguna
      if (Auth::user()->role == 'admin') {
        $request->session()->regenerate();
        // Mengarahkan admin ke halaman beranda admin
        return redirect()->route('backend.admin.beranda');
      } elseif (Auth::user()->role == 'kasir') {
        $request->session()->regenerate();
        return redirect()->intended(route('backend.kasir.beranda'));
      } else {
        Auth::logout();
        return back()->with('error', 'Role tidak dikenal');
      }
    }

    // Jika login gagal
    return back()->with('error', 'Login Gagal');
  }
  public function logoutBackend()
  {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect(route('backend.login'));
  }
}
