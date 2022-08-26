<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Emel;
use Illuminate\Http\Request;

class EmelController extends Controller
{
    public function index()
    {
        $datas = Emel::all();
        return view('kom.emel', compact('datas'));
    }
    public function create(){
        return view('kom.emel.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Emel;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->lokasi = $request->lokasi;
        $data->sever = $request->sever;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/emel');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Emel::find($id);
        return view('kom.emel.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Emel::find($id);
        $data->update($request->all());

        return redirect('/kom/emel')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Emel::find($id);
        $data->delete();

        return redirect('/kom/emel')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
