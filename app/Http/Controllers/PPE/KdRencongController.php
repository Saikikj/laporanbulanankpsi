<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdRencong;
use Illuminate\Http\Request;

class KdRencongController extends Controller
{
    public function index()
    {
        $datas = KdRencong::all();
        return view('ppe.kdrencong', compact('datas'));
    }

    public function create(){
        return view('ppe.kdrencong.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdRencong;

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
        return redirect('ppe/kdrencong');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdRencong::find($id);
        return view('ppe.kdrencong.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdRencong::find($id);
        $data->update($request->all());

        return redirect('ppe/kdrencong')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = KdRencong::find($id);
        $data->delete();

        return redirect('ppe/kdrencong')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
