<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('petugas.register') }}">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="masukan nama">
        <br>
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username" placeholder="masukan username">
        <br>
        <label for="Email">Email</label>
        <input type="Email" name="Email" id="Email" placeholder="masukan email">
        <br>
        <label for="Password">Password</label>
        <input type="Password" name="Password" id="Password" placeholder="masukan password">
        <br>
        <button type="submit">register</button>
    </form>
</body>
</html>
