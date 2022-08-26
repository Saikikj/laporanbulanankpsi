<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdPahang;
use Illuminate\Http\Request;

class KdPahangController extends Controller
{
    public function index()
    {
        $datas = KdPahang::all();
        return view('ppe.kdpahang', compact('datas'));
    }

    public function create(){
        return view('ppe.kdpahang.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdPahang;

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
        return redirect('ppe/kdpahang');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdPahang::find($id);
        return view('ppe.kdpahang.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdPahang::find($id);
        $data->update($request->all());

        return redirect('ppe/kdpahang')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdPahang::find($id);
        $data->delete();

        return redirect('ppe/kdpahang')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
