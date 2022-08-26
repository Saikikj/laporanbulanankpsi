<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Kat;
use Illuminate\Http\Request;

class KatController extends Controller
{
    public function index()
    {
        $datas= Kat::all();
        return view('kom.kat', compact('datas'));
    }
    public function create(){
        return view('kom.kat.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Kat;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->penempatan= $request->penempatan;
        $data->markasunit = $request->markasunit;
        $data->kat2100= $request->kat2100;
        $data->kat3100= $request->kat3100;
        $data->kat3200= $request->kat3200;
        $data->kat3300= $request->kat3300;
        $data->skm700= $request->skm700;
        $data->catatan = $request->catatan;

        $data->save();
        return redirect('/kom/kat');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Kat::find($id);
        return view('kom.kat.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Kat::find($id);
        $data->update($request->all());

        return redirect('/kom/kat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Kat::find($id);
        $data->delete();

        return redirect('/kom/kat')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
