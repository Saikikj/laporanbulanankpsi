<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\PpeTLDM;
use Illuminate\Http\Request;

class PpeTLDMController extends Controller
{
    public function index()
    {
        $datas = PpeTLDM::all();
        return view('ppe.ppetldm', compact('datas'));
    }

    public function create(){
        return view('ppe.ppetldm.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new PpeTLDM;

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
        return redirect('ppe/ppetldm');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PpeTLDM::find($id);
        return view('ppe.ppetldm.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PpeTLDM::find($id);
        $data->update($request->all());

        return redirect('ppe/ppetldm')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = PpeTLDM::find($id);
        $data->delete();

        return redirect('/ppe/ppetldm')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
