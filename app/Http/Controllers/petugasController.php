<?php

namespace App\Http\Controllers;

use App\Models\pendonor;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class petugasController extends Controller
{
    function showregister() {
        return view('petugas.register');
    }

    function register(Request $rq) {
        $user = [
            'nama' => $rq->input('nama'),
            'Username' => $rq->input('Username'),
            'Email' => $rq->input('Email'),
            'Password' => $rq->input('Password')
        ];

        petugas::query()->create($user);
        return redirect(route('showLogin'));
    }

    function showlogin() {
        $petugas = petugas::query()->get();
        return view('petugas.login', [
            'user' => $petugas
        ]);
    }

    function login(Request $rq) {

        $username = $rq->input('Username');
        $email = $rq->input('Email');
        $password = $rq->input('Password');

        $user = petugas::query()->where('Username', $username)->first();
        if($user == null)
            return redirect()
                   ->back()
                   ->withErrors([
                    "msg" => "Username Failed"
                   ]);

        $user = petugas::query()->where('Email', $email)->first();
        if($user == null){
            return redirect()
                ->back()
                 ->withErrors([
                    "msg" => "Email Not Found"
                 ]);
        }

        if(!Hash::check($password, $user->Password)){
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "Password Failed!!!!"
                ]);
        }

        if(!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("idUser", $user->id);
        return redirect(route('pendonor.daftar'));
    }

    public function logout(){
        session()->flush();
        return redirect(route('pendonor.list'));
    }

    public function index() {
        $pendonor = pendonor::query()->get();
        return view('petugas.list', [
            'pendonor' => $pendonor
        ]);
    }
}

