<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PengalamanKerja;

class PengalamanKerjaController extends Controller
{
    public function index()
    {
        // $pengalaman = DB::table('pengalaman_kerja')->get();
        // return view('pengalaman_kerja.index', compact('pengalaman'));

        $pengalaman = PengalamanKerja::all();
        return view('pengalaman_kerja.index', compact('pengalaman'));
    }

    public function create()
    {
        return view('pengalaman_kerja.create');
    }

    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')->insert([
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('pengalaman_kerja.index');
    }

    public function edit($id)
    {
        $pengalaman = DB::table('pengalaman_kerja')->where('id', $id)->first();
        return view('pengalaman_kerja.edit', compact('pengalaman'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pengalaman_kerja')->where('id', $id)->update([
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('pengalaman_kerja.index');
    }

    public function destroy($id)
    {
        DB::table('pengalaman_kerja')->where('id', $id)->delete();
        return redirect()->route('pengalaman_kerja.index');
    }
}