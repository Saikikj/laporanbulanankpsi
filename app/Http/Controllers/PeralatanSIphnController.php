<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSIphn;
use Illuminate\Http\Request;

class PeralatanSIphnController extends Controller
{
    public function index()
    {
        $datas = PeralatanSIphn::all();
        return view('si.wilayahbarat.phn', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.phn.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSIphn;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Pusat Hidrografi Nasional';
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
        return redirect('/si/wilayahbarat/phn');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSIphn::find($id);
        return view('si.wilayahbarat.phn.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSIphn::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/phn')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSIphn::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/phn')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
