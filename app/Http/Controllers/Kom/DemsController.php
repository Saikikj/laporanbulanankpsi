<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Dems;
use App\Models\KOM\DemsCadangan;
use Illuminate\Http\Request;

class DemsController extends Controller
{
    public function index()
    {
        $dataperalatan = Dems::all();
        $datacadangan = DemsCadangan::all();
        return view('kom.dems', compact('dataperalatan', 'datacadangan'));
    }
    public function create(){
        return view('kom.dems.addnew');
    }

    public function storePeralatan(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Dems;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->node = $request->node;
        $data->penempatan= $request->penempatan;
        $data->hh= $request->hh;
        $data->uu= $request->uu;
        $data->unitnaungan= $request->unitnaungan;

        $data->ktikomp= $request->ktikomp;
        $data->jenamakomp= $request->jenamakomp;
        $data->statuskomp= $request->statuskomp;
        $data->tahunkomp= $request->tahunkomp;

        $data->ktiprinter= $request->ktiprinter;
        $data->jenamaprinter= $request->jenamaprinter;
        $data->statusprinter= $request->statusprinter;
        $data->tahunprinter= $request->tahunprinter;

        $data->ktiscanner= $request->ktiscanner;
        $data->jenamascanner= $request->jenamascanner;
        $data->statusscanner= $request->statusscanner;
        $data->tahunscanner= $request->tahunscanner;

        $data->ktiaircond= $request->ktiaircond;
        $data->statusaircond= $request->statusaircond;
        $data->tahunaircond= $request->tahunaircond;
        $data->catatan = $request->catatan;

        $data->save();
        return redirect('/kom/dems');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Dems::find($id);
        return view('kom.dems.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Dems::find($id);
        $data->update($request->all());

        return redirect('/kom/dems')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Dems::find($id);
        $data->delete();

        return redirect('/kom/dems')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeCadangan (Request $request){
        $data = new DemsCadangan;

        $data->unit= $request->unit;
        $data->lokasi= $request->lokasi;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('kom/dems');
    }
    public function editCadangan($id){
        // return 'asdasd';
        $data = DemsCadangan::find($id);
        return view('kom.dems.editCadangan', compact('data'));
    }
    public function updateCadangan(Request $request, $id)
    {
        $data = DemsCadangan::find($id);
        $data->update($request->all());

        return redirect('/kom/dems')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyCadangan($id)
    {
        $data = DemsCadangan::find($id);
        $data->delete();

        return redirect('/kom/dems')->with('error', 'Maklumat Berjaya Dipadam');
    }

}
