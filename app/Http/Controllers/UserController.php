<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Daftar pengguna']);
    }

    public function redirectToProfile()
    {
        return redirect()->route('profile');
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Data pengguna disimpan!']);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Pengguna dengan ID $id diperbarui!"]);
    }

    public function updatePartial(Request $request, $id)
    {
        return response()->json(['message' => "Sebagian data pengguna dengan ID $id diperbarui!"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Pengguna dengan ID $id dihapus!"]);
    }

    public function handle(Request $request)
    {
        return response()->json(['message' => "Method yang digunakan: " . $request->method()]);
    }

    public function handleAny(Request $request)
    {
        return response()->json(['message' => "Request dengan method: " . $request->method()]);
    }
}