<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Centrixs;
use App\Models\KOM\CentrixsRekod;
use Illuminate\Http\Request;

class CentrixsController extends Controller
{
    public function index()
    {
        $dataperalatan = Centrixs::all();
        $datarekod = CentrixsRekod::all();
        return view('kom.centrixs', compact('dataperalatan', 'datarekod'));
    }
    public function create(){
        return view('kom.centrixs.addnew');
    }

    public function storePeralatan(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Centrixs;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->markas = $request->markas;
        $data->fitted= $request->fitted;
        $data->flywaykit= $request->flywaykit;
        $data->status= $request->status;
        $data->catatan = $request->catatan;

        $data->save();
        return redirect('/kom/centrixs');
    }
    public function storeRekod (Request $request){
        $data = new CentrixsRekod;

        $data->bulan= $request->bulan;
        $data->penggunaan= $request->penggunaan ;
        $data->mula= $request->mula;
        $data->tamat= $request->tamat;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('kom/centrixs');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Centrixs::find($id);
        return view('kom.centrixs.edit', compact('data'));
    }
    public function editRekod($id){
        // return 'asdasd';
        $data = CentrixsRekod::find($id);
        return view('kom.centrixs.editRekod', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Centrixs::find($id);
        $data->update($request->all());

        return redirect('/kom/centrixs')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function updateRekod(Request $request, $id)
    {
        $data = CentrixsRekod::find($id);
        $data->update($request->all());

        return redirect('/kom/centrixs')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Centrixs::find($id);
        $data->delete();

        return redirect('/kom/centrixs')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function destroyRekod($id)
    {
        $data = CentrixsRekod::find($id);
        $data->delete();

        return redirect('/kom/centrixs')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
