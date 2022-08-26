<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdJebat;
use Illuminate\Http\Request;

class KdJebatController extends Controller
{
    public function index()
    {
        $datas = KdJebat::all();
        return view('ppe.kdjebat', compact('datas'));
    }

    public function create(){
        return view('ppe.kdjebat.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdJebat;

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
        return redirect('ppe/kdjebat');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdJebat::find($id);
        return view('ppe.kdjebat.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdJebat::find($id);
        $data->update($request->all());

        return redirect('ppe/kdjebat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdJebat::find($id);
        $data->delete();

        return redirect('ppe/kdjebat')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
