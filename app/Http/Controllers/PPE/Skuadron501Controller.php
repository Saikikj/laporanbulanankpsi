<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\Skuadron501;
use Illuminate\Http\Request;

class Skuadron501Controller extends Controller
{
    public function index()
    {
        $datas = Skuadron501::all();
        return view('ppe.skuadron501', compact('datas'));
    }

    public function create(){
        return view('ppe.skuadron501.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Skuadron501;

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
        return redirect('ppe/skuadron501');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Skuadron501::find($id);
        return view('ppe.skuadron501.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Skuadron501::find($id);
        $data->update($request->all());

        return redirect('ppe/skuadron501')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Skuadron501::find($id);
        $data->delete();

        return redirect('ppe/skuadron501')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
