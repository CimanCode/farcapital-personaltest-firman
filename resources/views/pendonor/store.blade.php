@extends('pendonor.dashbord')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <h1 style="color: red">
            {{ $errors->first() }}
        </h1>
    @endif
    <form method="post" action="{{ route('pendonor.create') }}">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="masukan nama">
        <br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki_laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        <br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="masukan tanggal lahir">
        <br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" placeholder="masukan alamat"></textarea>
        <br>
        <table>
            @foreach ($persyaratan as $pr )
                <tr>
                    <td>{{ $pr->nama_persyaratan }}<input name="persyaratan[]" type="checkbox"></td>
                </tr>
            @endforeach
        </table>
        <button type="submit">save</button>
    </form>
</body>
</html>
@endsection
