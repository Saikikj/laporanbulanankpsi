<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\kdSundang;
use Illuminate\Http\Request;

class KdSundangController extends Controller
{
    public function index()
    {
        $datas = kdSundang::all();
        return view('ppe.kdsundang', compact('datas'));
    }

    public function create(){
        return view('ppe.kdsundang.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new kdSundang;

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
        return redirect('ppe/kdsundang');
    }
    public function edit($id){
        // return 'asdasd';
        $data = kdSundang::find($id);
        return view('ppe.kdsundang.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = kdSundang::find($id);
        $data->update($request->all());

        return redirect('ppe/kdsundang')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = kdSundang::find($id);
        $data->delete();

        return redirect('ppe/kdsundang')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
