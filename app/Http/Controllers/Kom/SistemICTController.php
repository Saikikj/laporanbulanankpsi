<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\SistemICT;
use Illuminate\Http\Request;

class SistemICTController extends Controller
{

    public function index()
    {
        $datas = SistemICT::all();
        return view('kom.sistemict', compact('datas'));
    }
    public function create(){
        return view('kom.sistemict.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new SistemICT;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->lokasi = $request->lokasi;

        $data->save();
        return redirect('/kom/sistemict');
    }
    public function edit($id){
        // return 'asdasd';
        $data = SistemICT::find($id);
        return view('kom.sistemict.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = SistemICT::find($id);
        $data->update($request->all());

        return redirect('/kom/sistemict')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = SistemICT::find($id);
        $data->delete();

        return redirect('/kom/sistemict')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
