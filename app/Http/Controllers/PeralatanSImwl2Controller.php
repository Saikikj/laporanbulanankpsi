<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImwl2;
use Illuminate\Http\Request;

class PeralatanSImwl2Controller extends Controller
{
    public function index()
    {
        $datas = PeralatanSImwl2::all();
        return view('si.wilayahtimur.mwl2', compact('datas'));
    }

    public function create(){
        return view('si.wilayahtimur.mwl2.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImwl2;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Wilayah Laut 2';
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
        return redirect('/si/wilayahtimur/mwl2');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImwl2::find($id);
        return view('si.wilayahtimur.mwl2.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImwl2::find($id);
        $data->update($request->all());

        return redirect('si/wilayahtimur/mwl2')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImwl2::find($id);
        $data->delete();

        return redirect('/si/wilayahtimur/mwl2')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
