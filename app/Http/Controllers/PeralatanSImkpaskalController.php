<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImkpaskal;
use Illuminate\Http\Request;

class PeralatanSImkpaskalController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImkpaskal::all();
        return view('si.wilayahbarat.mkpaskal', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mkpaskal.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImkpaskal;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pemerintahan Pasukan Khas Laut';
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
        return redirect('/si/wilayahbarat/mkpaskal');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImkpaskal::find($id);
        return view('si.wilayahbarat.mkpaskal.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImkpaskal::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mkpaskal')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImkpaskal::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mkpaskal')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
