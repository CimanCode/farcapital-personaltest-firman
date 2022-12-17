<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>
    <h1>Detail Pendaftar</h1>
    <div>
        <h4>Nama : {{ $pendonor->nama }}</h4>
        <h4>Jenis Kelamin : {{ $pendonor->jenis_kelamin }}</h4>
        <h4>Tanggal Lahir : {{ $pendonor->tanggal_lahir }}</h4>
        <h4>Alamat : {{ $pendonor->alamat }}</h4>
        @if (session()->has('logged'))
            <a href="#"><Button>Form Kesehatan</Button></a>
        @else
        <h4>Hasil Pemeriksaan : </h4>
        @endif

    </div>
   </div>
</body>
</html>
