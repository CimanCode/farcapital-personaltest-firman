@extends('pendonor.dashbord')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>persyaratan</title>
</head>
<body>
    <a href="{{ route('persyaratan.index') }}"><button>Tambah Persyaratan</button></a>
    <table>
        @foreach ($persyaratan as $pr )
            <tr>
                <td>{{ $pr->nama_persyaratan }}<input type="checkbox"></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
