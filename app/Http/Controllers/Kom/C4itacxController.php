<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\C4itacx;
use App\Models\KOM\C4itacxKapal;
use Illuminate\Http\Request;

class C4itacxController extends Controller
{
    public function index()
    {
        $datapangkalan = C4itacx::all();
        $datakapal = C4itacxKapal::all();
        return view('kom.c4itacx', compact('datapangkalan', 'datakapal'));
    }
    public function create(){
        return view('kom.c4itacx.addnew');
    }

    public function storePangkalan(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new C4itacx;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->markasunit = $request->markasunit;
        $data->c4itacx= $request->c4itacx;
        $data->baik= $request->baik;
        $data->rosak= $request->rosak;
        $data->catatan = $request->catatan;

        $data->save();
        return redirect('/kom/c4itacx');
    }
    public function edit($id){
        // return 'asdasd';
        $data = C4itacx::find($id);
        return view('kom.c4itacx.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = C4itacx::find($id);
        $data->update($request->all());

        return redirect('/kom/c4itacx')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = C4itacx::find($id);
        $data->delete();

        return redirect('/kom/c4itacx')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeKapal (Request $request){
        $data = new C4itacxKapal;

        $data->kapal= $request->kapal;
        $data->penempatan= $request->penempatan ;
        $data->c4itacx= $request->c4itacx;
        $data->baik= $request->baik;
        $data->rosak= $request->rosak;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('kom/c4itacx');
    }
    public function editKapal($id){
        // return 'asdasd';
        $data = C4itacxKapal::find($id);
        return view('kom.c4itacx.editKapal', compact('data'));
    }
    public function updateKapal(Request $request, $id)
    {
        $data = C4itacxKapal::find($id);
        $data->update($request->all());

        return redirect('/kom/c4itacx')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroyKapal($id)
    {
        $data = C4itacxKapal::find($id);
        $data->delete();

        return redirect('/kom/c4itacx')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
