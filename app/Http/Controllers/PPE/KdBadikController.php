<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdBadik;
use Illuminate\Http\Request;

class KdBadikController extends Controller
{
    public function index()
    {
        $datas = KdBadik::all();
        return view('ppe.kdbadik', compact('datas'));
    }

    public function create(){
        return view('ppe.kdbadik.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdBadik;

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
        return redirect('ppe/kdbadik');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdBadik::find($id);
        return view('ppe.kdbadik.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdBadik::find($id);
        $data->update($request->all());

        return redirect('ppe/kdbadik')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdBadik::find($id);
        $data->delete();

        return redirect('ppe/kdbadik')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
