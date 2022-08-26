<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSI;
use Illuminate\Http\Request;

class PeralatanSIController extends Controller
{
    public function index()
    {
        $datas = PeralatanSI::all();
        return view('si.wilayahbarat.mktl', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mktl.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new PeralatanSI;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Tentera Laut';
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
        return redirect('/si/wilayahbarat/mktl');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSI::find($id);
        return view('si.wilayahbarat.mktl.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSI::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSI::find($id);
        $data->delete();

        return redirect('si/wilayahbarat/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
