@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Pendidikan</h1>
        <a href="{{ route('pendidikan.create') }}" class="btn btn-primary">Tambah Pendidikan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tingkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendidikan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tingkat }}</td>
                        <td>
                            <a href="{{ route('pendidikan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pendidikan.destroy', $item->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
{{-- acara16 --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif