<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Nco;
use Illuminate\Http\Request;

class NcoController extends Controller
{
    public function index()
    {
        $datas = Nco::all();
        return view('kom.nco', compact('datas'));
    }
    public function create(){
        return view('kom.nco.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Nco;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->kapalpangkalan = $request->kapalpangkalan;
        $data->nco = $request->nco;
        $data->baik= $request->baik;
        $data->rosak= $request->rosak;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/nco');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Nco::find($id);
        return view('kom.nco.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Nco::find($id);
        $data->update($request->all());

        return redirect('/kom/nco')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Nco::find($id);
        $data->delete();

        return redirect('/kom/nco')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
