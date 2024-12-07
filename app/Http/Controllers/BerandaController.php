<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function berandaBackendAdmin()
    {
        return view('backend.admin.v_beranda.index', [
            'judul' => 'Halaman Utama',
        ]);
    }
    public function berandaBackendKasir()
    {
        return view('backend.kasir.v_beranda.index', [
            'judul' => 'Halaman Utama',
        ]);
    }

}
