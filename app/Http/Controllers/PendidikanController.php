<?php

namespace App\Http\Controllers;

use App\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('backend.pendidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // // acara15
            // 'nama' => 'required',
            // 'tingkat' => 'required',

            'nama' => 'required|string|max:255',
            'tingkat' => 'required|string|max:50',
        ]);

        Pendidikan::create($request->all());
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.show', compact('pendidikan'));
    }

    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, Pendidikan $pendidikan)
    {
        $request->validate([
            // //acara15
            // 'nama' => 'required',
            // 'tingkat' => 'required',

            'nama' => 'required|string|max:255',
            'tingkat' => 'required|string|max:50',
        ]);

        $pendidikan->update($request->all());
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Data berhasil dihapus');
    }
}
