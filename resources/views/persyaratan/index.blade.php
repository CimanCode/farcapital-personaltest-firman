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
    <form method="post" action="{{ route('persyaratan.create') }}">
        @csrf
        <label for="nama_persyaratan">Nama Persyaratan</label><br>
        <textarea name="nama_persyaratan" id="nama_persyaratan"></textarea><br>
        <button type="submit">save</button>
    </form>
</body>
</html>
@endsection
