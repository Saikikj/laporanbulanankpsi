<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdTar;
use Illuminate\Http\Request;

class KdTarController extends Controller
{
    public function index()
    {
        $datas = KdTar::all();
        return view('ppe.kdtar', compact('datas'));
    }

    public function create(){
        return view('ppe.kdtar.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdTar;

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
        return redirect('ppe/kdtar');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdTar::find($id);
        return view('ppe.kdtar.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdTar::find($id);
        $data->update($request->all());

        return redirect('ppe/kdtar')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdTar::find($id);
        $data->delete();

        return redirect('ppe/kdtar')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
