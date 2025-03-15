@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pengalaman Kerja</h2>
    <a href="{{ route('pengalaman_kerja.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Periode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengalaman as $data)
            <tr>
                <td>{{ $data->perusahaan }}</td>
                <td>{{ $data->posisi }}</td>
                <td>{{ $data->mulai }} - {{ $data->selesai ?? 'Sekarang' }}</td>
                <td>
                    <a href="{{ route('pengalaman_kerja.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengalaman_kerja.destroy', $data->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection