<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImksimp;
use Illuminate\Http\Request;

class PeralatanSImksimpController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImksimp::all();
        return view('si.wilayahbarat.mksimp', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mksimp.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImksimp;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pemerintahan Pasukan Simpanan TLDM';
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
        return redirect('/si/wilayahbarat/mksimp');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImksimp::find($id);
        return view('si.wilayahbarat.mksimp.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImksimp::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mksimp')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImksimp::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mksimp')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
