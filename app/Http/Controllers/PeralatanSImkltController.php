<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImklt;
use Illuminate\Http\Request;

class PeralatanSImkltController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImklt::all();
        return view('si.wilayahtimur.mklt', compact('datas'));
    }

    public function create(){
        return view('si.wilayahtimur.mklt.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImklt;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Logistik Timur';
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
        return redirect('/si/wilayahtimur/mklt');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImklt::find($id);
        return view('si.wilayahtimur.mklt.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImklt::find($id);
        $data->update($request->all());

        return redirect('si/wilayahtimur/mklt')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImklt::find($id);
        $data->delete();

        return redirect('/si/wilayahtimur/mklt')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
