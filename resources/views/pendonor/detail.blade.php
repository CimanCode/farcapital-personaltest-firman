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
   <div>
    <h1>Detail Pendaftar</h1>
    <div>
        <h4>Nama : {{ $pendonor->nama }}</h4>
        <h4>Jenis Kelamin : {{ $pendonor->jenis_kelamin }}</h4>
        <h4>Tanggal Lahir : {{ $pendonor->tanggal_lahir }}</h4>
        <h4>Alamat : {{ $pendonor->alamat }}</h4>
        <h4>Umur : {{ $pendonor->Umur }}</h4>
        <h4>Status : {{ $pendonor->status }}</h4>
        @if (session()->has('logged'))
        <form method="post" action="">
            @csrf
            <table>
                    <tr> Berat badan minimal 45 kg
                        <input type="checkbox" name="testkesehatan[]"></tr><br>
                    <tr> Temperatur tubuh 36,6 - 37,5 derajatCelcius
                        <input type="checkbox" name="testkesehatan[]"></tr><br>
                    <tr> Tekanan darah baik yaitu sistole = 110-160 mmHg, diastole = 70-100 mmHg
                        <input type="checkbox" name="testkesehatan[]"></tr><br>
                    <tr> Denyut nadi teratur yaitu sekitar 50-100 kali/menit
                        <input type="checkbox" name="testkesehatan[]"></tr><br>
                    <tr> Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12,5 gram
                        <input type="checkbox" name="testkesehatan[]"></tr>
            </table>
            <button type="submit">Save</button>
        </form>
        @endif
    </div>
   </div>
</body>
</html>
@endsection
