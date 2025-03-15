@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pendidikan</h1>
    <form action="{{ route('pendidikan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tingkat</label>
            <input type="text" name="tingkat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection