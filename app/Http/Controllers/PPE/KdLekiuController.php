<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdLekiu;
use Illuminate\Http\Request;

class KdLekiuController extends Controller
{
    public function index()
    {
        $datas = KdLekiu::all();
        return view('ppe.kdlekiu', compact('datas'));
    }

    public function create(){
        return view('ppe.kdlekiu.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdLekiu;

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
        return redirect('ppe/kdlekiu');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdLekiu::find($id);
        return view('ppe.kdlekiu.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdLekiu::find($id);
        $data->update($request->all());

        return redirect('ppe/kdlekiu')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdLekiu::find($id);
        $data->delete();

        return redirect('ppe/kdlekiu')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
