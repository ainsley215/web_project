<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // Membuat session
    public function createSession()
    {
        session(['nama' => 'Annisa Uswatul']);
        return "Session ditambahkan";
    }

    // Menampilkan session
    public function showSession()
    {
        if (session()->has('nama')) {
            return "Session nama: " . session('nama');
        } else {
            return "Tidak ada session nama.";
        }
    }

    // Menghapus session
    public function deleteSession()
    {
        session()->forget('nama');
        return "Session nama telah dihapus";
    }
}