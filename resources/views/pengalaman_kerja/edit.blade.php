@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pengalaman Kerja</h2>
    <form action="{{ route('pengalaman_kerja.update', $pengalaman->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control" value="{{ $pengalaman->perusahaan }}">
        </div>
        <div class="mb-3">
            <label>Posisi</label>
            <input type="text" name="posisi" class="form-control" value="{{ $pengalaman->posisi }}">
        </div>
        <div class="mb-3">
            <label>Mulai</label>
            <input type="date" name="mulai" class="form-control" value="{{ $pengalaman->mulai }}">
        </div>
        <div class="mb-3">
            <label>Selesai</label>
            <input type="date" name="selesai" class="form-control" value="{{ $pengalaman->selesai }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $pengalaman->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection