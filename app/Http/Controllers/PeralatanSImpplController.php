<?php

namespace App\Http\Controllers;
use App\Models\PeralatanSImppl;

use Illuminate\Http\Request;

class PeralatanSImpplController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImppl::all();
        return view('si.wilayahbarat.mppl', compact('datas'));
    }

    public function create(){
        return view('si.wilayahbarat.mppl.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImppl;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pemerintahan Pendidikan dan Latihan TLDM';
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
        return redirect('/si/wilayahbarat/mppl');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImppl::find($id);
        return view('si.wilayahbarat.mppl.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImppl::find($id);
        $data->update($request->all());

        return redirect('si/wilayahbarat/mppl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImppl::find($id);
        $data->delete();

        return redirect('/si/wilayahbarat/mppl')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
