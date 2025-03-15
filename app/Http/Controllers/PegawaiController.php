<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Menangkap data dari URL
    public function showName($nama)
    {
        return "Nama pegawai: " . $nama;
    }

    // Menangkap data dari input form
    public function showForm()
    {
        return view('formulir');
    }

    // public function processForm(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|min:3',
    //         'umur' => 'required|integer|min:18'
    //     ], [
    //         'nama.required' => 'Nama wajib diisi',
    //         'nama.min' => 'Nama harus minimal 3 karakter',
    //         'umur.required' => 'Umur wajib diisi',
    //         'umur.integer' => 'Umur harus berupa angka',
    //         'umur.min' => 'Umur minimal 18 tahun'
    //     ]);
    
    //     $nama = $request->input('nama');
    //     $umur = $request->input('umur');
    
    //     return "Nama: $nama, Umur: $umur";
    // }

    //acara 18
    public function processForm(Request $request) { 
        $request->validate([
            'nama' => 'required|min:3|max:50',
            'umur' => 'required|numeric|min:1|max:120',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'nama.min' => 'Nama minimal 3 karakter!',
            'umur.required' => 'Umur wajib diisi!',
            'umur.numeric' => 'Umur harus berupa angka!',
            'umur.min' => 'Umur minimal 1 tahun!',
            'umur.max' => 'Umur maksimal 120 tahun!',
        ]);
    
        return redirect('/formulir')->with('success', 'Form berhasil dikirim!');
    }
}