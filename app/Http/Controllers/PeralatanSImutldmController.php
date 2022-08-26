<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImutldm;
use Illuminate\Http\Request;

class PeralatanSImutldmController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImutldm::all();
        return view('si.wilayahbarat.mutldm', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mutldm.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImutldm;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Udara TLDM';
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
        return redirect('/si/wilayahbarat/mutldm');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImutldm::find($id);
        return view('si.wilayahbarat.mutldm.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImutldm::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mutldm')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImutldm::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mutldm')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
