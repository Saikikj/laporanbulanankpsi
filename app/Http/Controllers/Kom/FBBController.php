<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Fbb;
use App\Models\KOM\FbbSimKad;
use Illuminate\Http\Request;

class FBBController extends Controller
{
    public function index()
    {
        $dataterminal = Fbb::all();
        $datasimkad = FbbSimKad::all();
        return view('kom.fbb', compact('dataterminal', 'datasimkad'));
    }
    public function create(){
        return view('kom.fbb.addnew');
    }

    public function storeTerminal(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Fbb;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->markasunit = $request->markasunit;
        $data->penempatan = $request->penempatan;
        $data->jumlahpeganganterminal= $request->jumlahpeganganterminal;
        $data->statuspengoperasian= $request->statuspengoperasian;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/fbb');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Fbb::find($id);
        return view('kom.fbb.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Fbb::find($id);
        $data->update($request->all());

        return redirect('/kom/fbb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Fbb::find($id);
        $data->delete();

        return redirect('/kom/fbb')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeSimKad (Request $request){
        $data = new FbbSimKad;

        $data->markasunit = $request->markasunit;
        $data->idrujukan= $request-> idrujukan;
        $data->kuotadata= $request->kuotadata;
        $data->nosimkad= $request->nosimkad;
        $data->pakejlangganan= $request->pakejlangganan;
        $data->tarikhtamatlangganan= $request->tarikhtamatlangganan;
        $data->bakiquota= $request->bakiquota;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('kom/fbb');
    }
    public function editSimkad($id){
        // return 'asdasd';
        $data = FbbSimKad::find($id);
        return view('kom.fbb.editSimkad', compact('data'));
    }
    public function updateSimkad(Request $request, $id)
    {
        $data = FbbSimKad::find($id);
        $data->update($request->all());

        return redirect('/kom/fbb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySimkad($id)
    {
        $data = FbbSimKad::find($id);
        $data->delete();

        return redirect('/kom/fbb')->with('error', 'Maklumat Berjaya Dipadam');
    }

}
