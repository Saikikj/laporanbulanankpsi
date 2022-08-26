<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdSelangor;
use Illuminate\Http\Request;

class KdSelangorController extends Controller
{
    public function index()
    {
        $datas = KdSelangor::all();
        return view('ppe.kdselangor', compact('datas'));
    }

    public function create(){
        return view('ppe.kdselangor.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdSelangor;

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
        return redirect('ppe/kdselangor');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdSelangor::find($id);
        return view('ppe.kdselangor.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdSelangor::find($id);
        $data->update($request->all());

        return redirect('ppe/kdselangor')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdSelangor::find($id);
        $data->delete();

        return redirect('ppe/kdselangor')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
