<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\Skuadron502;
use Illuminate\Http\Request;

class Skuadron502Controller extends Controller
{
    public function index()
    {
        $datas = Skuadron502::all();
        return view('ppe.skuadron502', compact('datas'));
    }

    public function create(){
        return view('ppe.skuadron502.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Skuadron502;

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
        return redirect('ppe/skuadron502');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Skuadron502::find($id);
        return view('ppe.skuadron502.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Skuadron502::find($id);
        $data->update($request->all());

        return redirect('ppe/skuadron502')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = Skuadron502::find($id);
        $data->delete();

        return redirect('ppe/skuadron502')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
