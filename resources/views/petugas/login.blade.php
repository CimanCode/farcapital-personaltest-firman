<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('petugas.login') }}">
        @csrf
        @if ($errors->any())
            <h1 style="color: red">
                {{ $errors -> first() }}
            </h1>
        @endif
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username" placeholder="masukan username">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" placeholder="masukan email">
        <br>
        <label for="Password">Password</label>
        <input type="password" name="Password" id="Password" placeholder="masukan password">
        <br>
        <div>
        <button type="submit">Login</button>
        </div>
    </form>
    <a href="{{ route('showregister') }}"><button>Register</button></a>
</body>
</html>
