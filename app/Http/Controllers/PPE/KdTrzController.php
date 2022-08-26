<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdTrz;
use Illuminate\Http\Request;

class KdTrzController extends Controller
{
    public function index()
    {
        $datas = KdTrz::all();
        return view('ppe.kdtrz', compact('datas'));
    }

    public function create(){
        return view('ppe.kdtrz.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdTrz;

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
        return redirect('ppe/kdtrz');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdTrz::find($id);
        return view('ppe.kdtrz.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdTrz::find($id);
        $data->update($request->all());

        return redirect('ppe/kdtrz')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdTrz::find($id);
        $data->delete();

        return redirect('ppe/kdtrz')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
