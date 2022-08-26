<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Satcom;
use Illuminate\Http\Request;

class SatcomController extends Controller
{

    public function index()
    {
        $datas = Satcom::all();
        return view('kom.satcom', compact('datas'));
    }
    public function create(){
        return view('kom.satcom.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Satcom();

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->rangkaian = $request->rangkaian;
        $data->jumlahpeganganterminal = $request->jumlahpeganganterminal;
        $data->baik = $request->baik;
        $data->rosak= $request->rosak;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/satcom');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Satcom::find($id);
        return view('kom.satcom.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Satcom::find($id);
        $data->update($request->all());

        return redirect('/kom/satcom')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Satcom::find($id);
        $data->delete();

        return redirect('/kom/satcom')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
