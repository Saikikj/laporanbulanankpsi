<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSI;
use Illuminate\Http\Request;

class PeralatanSIController extends Controller
{
    public function index()
    {
        $datas = PeralatanSI::all();
        return view('si.wilayahbarat.mktl', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mktl.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSI;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Tentera Laut';
        $data->unit = $request->unit;
        $data->penempatan= $request-> penempatan;
        $data->jenis= $request->jenisperalatan;
        $data->cpu= $request->CPU;
        $data->monitor= $request->Monitor;
        $data->tahun= $request->Tahun;
        $data->nopendaftaranasetkewpa= $request->PendaftaranAset;
        $data->status= $request->Status;
        $data->cadangan= $request->Cadangan;
        $data->catatan= $request->Catatan;

        $data->save();
        return redirect('/si/wilayahbarat/mktl');
    }
}
