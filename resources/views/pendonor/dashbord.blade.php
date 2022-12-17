<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 1300px; padding: 5px; justify-items: center;">
        <div style="display: flex; justify-content: space-between; align-items: center">
            <h1>Halaman Donor Darah</h1>
            @if (session()->has('logged'))
                <a href="{{ route('logout') }}"><button>Logout</button></a>
            @else
                <a href="{{ route('showLogin') }}"><button>Login</button></a>
            @endif
        </div>
    </div>
    @if (session()->has('logged'))
        <h1>Halaman Dasbord Petugas</h1>
    @endif
    @yield('content')
</body>
</html>
