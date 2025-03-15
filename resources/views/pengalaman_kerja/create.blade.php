@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pengalaman Kerja</h2>
    <form action="{{ route('pengalaman_kerja.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control">
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="posisi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Mulai</label>
            <input type="date" name="mulai" class="form-control">
        </div>
        <div class="mb-3">
            <label>Selesai</label>
            <input type="date" name="selesai" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection