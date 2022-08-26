<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImwl3;
use Illuminate\Http\Request;

class PeralatanSImwl3Controller extends Controller
{
    public function index()
    {
        $datas = PeralatanSImwl3::all();
        return view('si.wilayahbarat.mwl3', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mwl3.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImwl3;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Wilayah Laut 3';
        $data->unit = $request->unit;
        $data->penempatan= $request-> penempatan;
        $data->jenisperalatan= $request->jenisperalatan;
        $data->jenama= $request->jenama;
        $data->cpu= $request->cpu;
        $data->monitor= $request->monitor;
        $data->tahun= $request->tahun;
        $data->nopendaftaranasetkewpa= $request->nopendaftaranasetkewpa;
        $data->status= $request->status;
        $data->cadangan= $request->cadangan;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/si/wilayahbarat/mwl3');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImwl3::find($id);
        return view('si.wilayahbarat.mwl3.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImwl3::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mwl3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImwl3::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mwl3')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
