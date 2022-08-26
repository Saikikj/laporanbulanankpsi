<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImpab;
use Illuminate\Http\Request;

class PeralatanSImpabController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImpab::all();
        return view('si.wilayahbarat.mpabarat', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mpabarat.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImpab;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pemerintahan Armada Barat';
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
        return redirect('/si/wilayahbarat/mpabarat');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImpab::find($id);
        return view('si.wilayahbarat.mpabarat.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImpab::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mpabarat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImpab::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mpabarat')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
