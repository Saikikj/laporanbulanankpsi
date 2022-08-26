<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdKedah;
use Illuminate\Http\Request;

class KdKedahController extends Controller
{
    public function index()
    {
        $datas = KdKedah::all();
        return view('ppe.kdkedah', compact('datas'));
    }

    public function create(){
        return view('ppe.kdkedah.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdKedah;

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
        return redirect('ppe/kdkedah');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdKedah::find($id);
        return view('ppe.kdkedah.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdKedah::find($id);
        $data->update($request->all());

        return redirect('ppe/kdkedah')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdKedah::find($id);
        $data->delete();

        return redirect('ppe/kdkedah')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
