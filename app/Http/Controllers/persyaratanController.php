<?php

namespace App\Http\Controllers;

use App\Models\persyaratan;
use Illuminate\Http\Request;

class persyaratanController extends Controller
{
    public function index() {
        $persyaratan = persyaratan::query()->get();
        return view('persyaratan.list', [
            'persyaratan' => $persyaratan
        ]);
    }

    public function store(){
        return view('persyaratan.index');
    }

    public function create(Request $rq){
        $persyaratan = [
            'nama_persyaratan' => $rq->input('nama_persyaratan')
        ];

        persyaratan::query()->create($persyaratan);
        return redirect(route('peryaratan.list'));
    }
}
