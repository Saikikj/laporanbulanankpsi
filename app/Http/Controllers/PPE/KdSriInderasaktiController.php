<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdSriInderasakti;
use Illuminate\Http\Request;

class KdSriInderasaktiController extends Controller
{
    public function index()
    {
        $datas = KdSriInderasakti::all();
        return view('ppe.kdsriinderasakti', compact('datas'));
    }

    public function create(){
        return view('ppe.kdsriinderasakti.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdSriInderasakti;

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
        return redirect('ppe/kdsriinderasakti');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdSriInderasakti::find($id);
        return view('ppe.kdsriinderasakti.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdSriInderasakti::find($id);
        $data->update($request->all());

        return redirect('ppe/kdsriinderasakti')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdSriInderasakti::find($id);
        $data->delete();

        return redirect('ppe/kdsriinderasakti')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
