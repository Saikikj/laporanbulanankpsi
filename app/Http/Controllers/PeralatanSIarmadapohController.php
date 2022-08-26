<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSIarmadapoh;
use Illuminate\Http\Request;

class PeralatanSIarmadapohController extends Controller
{
    public function index()
    {
        $datas = PeralatanSIarmadapoh::all();
        return view('si.armadapoh.armadapoh', compact('datas'));
    }

    public function create(){
        return view('si.armadapoh.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new PeralatanSIarmadapoh;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Armada TLDM dan Pangkalan Hadapan';
        $data->lokasiwilayah = $request->lokasiwilayah;
        $data->unit = $request->unit;
        $data->penempatan= $request-> penempatan;
        $data->jenis= $request->jenisperalatan;
        $data->jenama= $request->Jenama;
        $data->cpu= $request->CPU;
        $data->monitor= $request->Monitor;
        $data->tahun= $request->Tahun;
        $data->nopendaftaranasetkewpa= $request->PendaftaranAset;
        $data->status= $request->Status;
        $data->cadangan= $request->Cadangan;
        $data->catatan= $request->Catatan;

        $data->save();
        return redirect('/si/armadapoh/armadapoh');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSIarmadapoh::find($id);
        return view('si.armadapoh.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSIarmadapoh::find($id);

        $data->lokasiwilayah = $request->lokasiwilayah;
        $data->unit = $request->unit;
        $data->penempatan= $request-> penempatan;
        $data->jenis= $request->jenisperalatan;
        $data->jenama= $request->Jenama;
        $data->cpu= $request->CPU;
        $data->monitor= $request->Monitor;
        $data->tahun= $request->tahun;
        $data->nopendaftaranasetkewpa= $request->PendaftaranAset;
        $data->status= $request->Status;
        $data->cadangan= $request->Cadangan;
        $data->catatan= $request->Catatan;

        $data->update();

        return redirect('/si/armadapoh/armadapoh')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = PeralatanSIarmadapoh::find($id);
        $data->delete();

        return redirect('/si/armadapoh/armadapoh')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
