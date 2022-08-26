<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdMahawangsa;
use Illuminate\Http\Request;

class KdMahawangsaController extends Controller
{
    public function index()
    {
        $datas = KdMahawangsa::all();
        return view('ppe.kdmahawangsa', compact('datas'));
    }

    public function create(){
        return view('ppe.kdmahawangsa.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdMahawangsa;

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
        return redirect('ppe/kdmahawangsa');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdMahawangsa::find($id);
        return view('ppe.kdmahawangsa.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdMahawangsa::find($id);
        $data->update($request->all());

        return redirect('ppe/kdmahawangsa')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdMahawangsa::find($id);
        $data->delete();

        return redirect('ppe/kdmahawangsa')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
