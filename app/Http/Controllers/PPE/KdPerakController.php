<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdPerak;
use Illuminate\Http\Request;

class KdPerakController extends Controller
{
    public function index()
    {
        $datas = KdPerak::all();
        return view('ppe.kdperak', compact('datas'));
    }

    public function create(){
        return view('ppe.kdperak.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdPerak;

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
        return redirect('ppe/kdperak');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdPerak::find($id);
        return view('ppe.kdperak.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdPerak::find($id);
        $data->update($request->all());

        return redirect('ppe/kdperak')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdPerak::find($id);
        $data->delete();

        return redirect('ppe/kdperak')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
