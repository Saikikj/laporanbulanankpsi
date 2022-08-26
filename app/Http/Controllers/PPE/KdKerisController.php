<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdKeris;
use Illuminate\Http\Request;

class KdKerisController extends Controller
{
    public function index()
    {
        $datas = KdKeris::all();
        return view('ppe.kdkeris', compact('datas'));
    }

    public function create(){
        return view('ppe.kdkeris.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdKeris;

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
        return redirect('ppe/kdkeris');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdKeris::find($id);
        return view('ppe.kdkeris.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdKeris::find($id);
        $data->update($request->all());

        return redirect('ppe/kdkeris')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdKeris::find($id);
        $data->delete();

        return redirect('ppe/kdkeris')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
