<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImklb;
use Illuminate\Http\Request;

class PeralatanSImklbController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImklb::all();
        return view('si.wilayahbarat.mklb', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mklb.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImklb();

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Logistik Barat';
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
        return redirect('/si/wilayahbarat/mklb');
    }

    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImklb::find($id);
        return view('si.wilayahbarat.mklb.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImklb::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImklb::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
