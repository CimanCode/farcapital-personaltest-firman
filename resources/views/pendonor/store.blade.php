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
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="masukan jenis kelamin">
        <br>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="masukan tanggal lahir">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" placeholder="masukan alamat">
        <br>
        <button type="submit">save</button>
    </form>
</body>
</html>
