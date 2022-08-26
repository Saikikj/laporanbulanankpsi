<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdKasturi;
use Illuminate\Http\Request;

class KdKasturiController extends Controller
{
    public function index()
    {
        $datas = KdKasturi::all();
        return view('ppe.kdkasturi', compact('datas'));
    }

    public function create(){
        return view('ppe.kdkasturi.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdKasturi;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Tentera Laut';
        // $data->unit = $request->unit;
        $data->peralatan= $request-> peralatan;
        $data->model= $request->model;
        $data->fungsi= $request->fungsi;
        $data->kuantiti= $request->kuantiti;
        $data->status= $request->status;
        $data->statuskeupayaan= $request->statuskeupayaan;
        $data->JMS= $request->JMS;
        $data->catatan= $request->Catatan;

        $data->save();
        return redirect('ppe/kdkasturi');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdKasturi::find($id);
        return view('ppe.kdkasturi.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdKasturi::find($id);
        $data->update($request->all());

        return redirect('ppe/kasturi')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdKasturi::find($id);
        $data->delete();

        return redirect('ppe/kdkasturi')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
