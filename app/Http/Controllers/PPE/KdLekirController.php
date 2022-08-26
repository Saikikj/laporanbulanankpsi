<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdLekir;
use Illuminate\Http\Request;

class KdLekirController extends Controller
{
    public function index()
    {
        $datas = KdLekir::all();
        return view('ppe.kdlekir', compact('datas'));
    }

    public function create(){
        return view('ppe.kdlekir.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdLekir;

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
        return redirect('ppe/kdlekir');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdLekir::find($id);
        return view('ppe.kdlekir.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdLekir::find($id);
        $data->update($request->all());

        return redirect('ppe/kdlekir')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdLekir::find($id);
        $data->delete();

        return redirect('ppe/kdlekir')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
