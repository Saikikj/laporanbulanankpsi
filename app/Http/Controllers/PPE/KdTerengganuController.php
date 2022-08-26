<?php

namespace App\Http\Controllers\PPE;

use App\Http\Controllers\Controller;
use App\Models\PPE\KdTerengganu;
use Illuminate\Http\Request;

class KdTerengganuController extends Controller
{
    public function index()
    {
        $datas = KdTerengganu::all();
        return view('ppe.kdterengganu', compact('datas'));
    }

    public function create(){
        return view('ppe.kdterengganu.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new KdTerengganu;

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
        return redirect('ppe/kdterengganu');
    }
    public function edit($id){
        // return 'asdasd';
        $data = KdTerengganu::find($id);
        return view('ppe.kdterengganu.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = KdTerengganu::find($id);
        $data->update($request->all());

        return redirect('ppe/kdterengganu')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = KdTerengganu::find($id);
        $data->delete();

        return redirect('ppe/kdterengganu')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
