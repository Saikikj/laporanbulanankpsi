<?php

namespace App\Http\Controllers;
use App\Models\PeralatanSImkpl;

use Illuminate\Http\Request;

class PeralatanSImkplController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImkpl::all();
        return view('si.wilayahbarat.mkpl', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mkpl.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImkpl;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pangkalan Lumut';
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
        return redirect('/si/wilayahbarat/mkpl');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImkpl::find($id);
        return view('si.wilayahbarat.mkpl.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImkpl::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mkpl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImkpl::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mkpl')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
