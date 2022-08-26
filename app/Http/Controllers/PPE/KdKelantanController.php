<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdKelantan;
use Illuminate\Http\Request;

class KdKelantanController extends Controller
{
    public function index()
    {
        $datas = KdKelantan::all();
        return view('ppe.kdkelantan', compact('datas'));
    }

    public function create(){
        return view('ppe.kdkelantan.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdKelantan;

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
        return redirect('ppe/kdkelantan');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdKelantan::find($id);
        return view('ppe.kdkelantan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdKelantan::find($id);
        $data->update($request->all());

        return redirect('ppe/kdkelantan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdKelantan::find($id);
        $data->delete();

        return redirect('ppe/kdkelantan')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
