<?php

namespace App\Http\Controllers;

use App\Models\pendonor;
use App\Models\persyaratan;
use Carbon\Carbon;
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
            'pendonor' => $pendonor,
            'persyaratan' => persyaratan::all()
        ]);
    }

    public function store() {
        return view('pendonor.store', [
            'persyaratan' => persyaratan::all()
        ]);
    }

    public function create(Request $rq) {
        $pendonor = [
            'nama' => $rq->input('nama'),
            'jenis_kelamin' => $rq->input('jenis_kelamin'),
            'tanggal_lahir' => $rq->input('tanggal_lahir'),
            'alamat' => $rq->input('alamat'),
        ];

        $now = Carbon::now();
        $d_birth = Carbon::parse($rq->tanggal_lahir);
        $age = $d_birth->diffInYears($now);

        if($age <= 17 || $age >= 60){
            $status = "Tidak Boleh Donor";
        } else {
            if(isset($rq->persyaratan)){
                $status = "Tidak Boleh Donor";
            } else {
                $status = "Tahap pemeriksaan";
            }
        }

        $pendonor['status'] = $status;
        $pendonor['Umur'] = $age;

        if($pendonor['nama'] == null || $pendonor['jenis_kelamin'] == null || $pendonor['tanggal_lahir'] == null || $pendonor['alamat'] == null){
            return redirect()->back()->withErrors([
                'msg' => 'Semua Data Harus Di isi'
            ]);
        }

        pendonor::query()->create($pendonor);
        return redirect(route('pendonor.list'));
    }

    public function detail($id, Request $request) {
        $pendonor = pendonor::query()->where('id', $id)->first();
        if($request->method() == 'POST'){
            if($request->input('testkesehatan'))
            {
                if(count($request->input('testkesehatan')) == 5){
                    $pendonor->update(['status' => 'Lolos Tahap Pemeriksaan']);
                } else {
                    $pendonor->update(['status' => 'Tidak Lolos Tahap Pemeriksaan']);
                }
            }
        }
        return view('pendonor.detail', [
            'pendonor' => $pendonor
        ]);

    }

    public function update(Request $rq, $id){
        $pendonor = [
            'nama' => $rq->input('nama'),
            'jenis_kelamin' => $rq->input('jenis_kelamin'),
            'tanggal_lahir' => $rq->input('tanggal_lahir'),
            'alamat' => $rq->input('alamat'),
        ];

        if(isset($rq->testkesehatan)){
            $status = "lolos Tahap Pemeriksaan";
        } else {
            $status = "Tidak Lolos Tahap Pemeriksaan";
        }

        $pendonor ['Umur'] = $status;

        pendonor::query()->where('id', $id)->update($pendonor);
        return redirect(route('pendonor.daftar'));

    }

    function delete($id){ //untuk menghapus data
        $product = pendonor::query()->where("id", $id)->first();
        $product->delete();
        return redirect()->back();
    }

}
