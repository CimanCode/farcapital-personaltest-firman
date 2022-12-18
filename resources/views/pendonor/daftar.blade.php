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
    <h1>Daftar Pendonor</h1>
    <table style="">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendonor as $pendonors )
                <tr>
                    <td>{{ $pendonors->nama }}</td>
                    <td>{{ $pendonors->status }}</td>
                    <td><a href="{{ route('pendonor.detail', ["id"=>$pendonors->id]) }}"><button>Detail</button></a></td>
                    <td><a href="{{ route('pendonor.delete', ["id"=>$pendonors->id]) }}"><button>Delete</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection
