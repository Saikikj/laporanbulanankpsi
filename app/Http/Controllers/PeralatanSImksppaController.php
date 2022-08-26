<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImksppa;
use Illuminate\Http\Request;

class PeralatanSImksppaController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImksppa::all();
        return view('si.wilayahbarat.mksppa', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mksppa.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImksppa;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Selam dan Peperangan Periuk Api';
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
        return redirect('/si/wilayahbarat/mksppa');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImksppa::find($id);
        return view('si.wilayahbarat.mksppa.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImksppa::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mksppa')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImksppa::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mksppa')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
