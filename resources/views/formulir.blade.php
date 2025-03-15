<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pegawai</title>
</head>
<body>
    <h2>Formulir Pegawai</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/formulir/proses" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required> <br>

        <label>Umur:</label>
        <input type="number" name="umur" required> <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

{{-- acara 18 --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif