<?php

namespace App\Http\Controllers;

use App\Models\pendonor;
use Illuminate\Http\Request;

class pendonorController extends Controller
{
    public function index(){
        $pendonor = pendonor::query()->get();
        return view('pendonor.list', [
            'pendonor' => $pendonor
        ]);
    }

    public function daftar() {
        $pendonor = pendonor::query()->get();
        return view('pendonor.daftar', [
            'pendonor' => $pendonor
        ]);
    }

    public function store() {
        return view('pendonor.store');
    }

    public function create(Request $rq) {
        $pendonor = [
            'nama' => $rq->input('nama'),
            'jenis_kelamin' => $rq->input('jenis_kelamin'),
            'tanggal_lahir' => $rq->input('tanggal_lahir'),
            'alamat' => $rq->input('alamat'),
        ];

        if($pendonor['nama'] == null || $pendonor['jenis_kelamin'] == null || $pendonor['tanggal_lahir'] == null || $pendonor['alamat'] == null){
            return redirect()->back()->withErrors([
                'msg' => 'Semua Data Harus Di isi'
            ]);
        }

        pendonor::query()->create($pendonor);
        return redirect(route('pendonor.list'));
    }

    public function detail($id) {
        $pendonor = pendonor::query()->where('id', $id)->first();
        return view('pendonor.detail', [
            'pendonor' => $pendonor
        ]);
    }

    function delete($id){ //untuk menghapus data
        $product = pendonor::query()->where("id", $id)->first();
        $product->delete();
        return redirect()->back();
    }

}
