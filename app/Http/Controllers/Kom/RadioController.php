<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Radio;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    public function index()
    {
        $datas = Radio::all();
        return view('kom.radio', compact('datas'));
    }

    public function create(){
        return view('kom.radio.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Radio;

        //$data->(nama column) = $request-> (column dalam table)
        $data->kapalpangkalan =$request->kapalpangkalan;
        $data->unit = $request->unit;
        $data->jenisradio= $request->jenisradio;
        $data->hf= $request-> hf;
        $data->vuhf= $request-> vuhf;
        $data->vhf= $request-> vhf;
        $data->baik= $request->baik;
        $data->rosak= $request->rosak;
        $data->fitted= $request->fitted;
        $data->portable= $request-> portable;
        $data->ipnonip= $request-> ipnonip;
        $data->tahun= $request-> tahun;
        $data->usia= $request->usia;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/kom/radio');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Radio::find($id);
        return view('kom.radio.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Radio::find($id);
        $data->update($request->all());

        return redirect('/kom/radio')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Radio::find($id);
        $data->delete();

        return redirect('/kom/radio')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
