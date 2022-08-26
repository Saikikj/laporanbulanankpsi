<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImwl1;
use Illuminate\Http\Request;

class PeralatanSImwl1Controller extends Controller
{
    public function index()
    {
        $datas = PeralatanSImwl1::all();
        return view('si.wilayahbarat.mwl1', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mwl1.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImwl1();

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Wilayah Laut 1';
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
        return redirect('/si/wilayahbarat/mwl1');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImwl1::find($id);
        return view('si.wilayahbarat.mwl1.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImwl1::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mwl1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImwl1::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mwl1')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
