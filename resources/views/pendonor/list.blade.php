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
    <h1>Pendaftaran</h1>
    <a href="{{ route('pendonor.store') }}"><button>Mendaftar</button></a>
    <table style="">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendonor as $pendonors )
                <tr>
                    <td>{{ $pendonors->nama }}</td>
                    <td>{{ $pendonors->jenis_kelamin }}</td>
                    <td>{{ $pendonors->tanggal_lahir }}</td>
                    <td>{{ $pendonors->alamat }}</td>
                    <td><a href="{{ route('pendonor.detail', ["id"=>$pendonors->id]) }}"><button>Detail</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection
