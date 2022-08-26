<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Girn;
use App\Models\KOM\GirnOperasi;
use Illuminate\Http\Request;

class GirnController extends Controller
{
    public function index()
    {
        $datagirnunit = Girn::all();
        $dataoperasigirn = GirnOperasi::all();
        return view('kom.girn', compact('datagirnunit', 'dataoperasigirn'));
    }
    public function create(){
        return view('kom.girn.addnew');
    }

    public function storeGirnunit(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Girn;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->jenisterminal = $request->jenisterminal;
        $data->jumlahpegangan = $request->jumlahpegangan;
        $data->baik = $request->baik;
        $data->rosak = $request->rosak;
        $data->teb = $request->teb;
        $data->hilang = $request->hilang;
        $data->lupus = $request->lupus;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/kom/girn');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Girn::find($id);
        return view('kom.girn.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Girn::find($id);
        $data->update($request->all());

        return redirect('/kom/girn')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Girn::find($id);
        $data->delete();

        return redirect('/kom/girn')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeOperasigirn (Request $request){
        $data = new GirnOperasi;

        $data->peralatan = $request->peralatan;
        $data->jumlahpegangan = $request->jumlahpegangan;
        $data->hilang = $request->hilang;
        $data->rosak = $request->rosak;
        $data->far = $request->far;
        $data->sediaguna = $request->sediaguna;
        $data->save();
        return redirect('kom/girn');
    }
    public function editOperasigirn($id){
        // return 'asdasd';
        $data = GirnOperasi::find($id);
        return view('kom.girn.editOperasigirn', compact('data'));
    }
    public function updateOperasigirn(Request $request, $id)
    {
        $data = GirnOperasi::find($id);
        $data->update($request->all());

        return redirect('/kom/girn')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyOperasigirn($id)
    {
        $data = GirnOperasi::find($id);
        $data->delete();

        return redirect('/kom/girn')->with('error', 'Maklumat Berjaya Dipadam');
    }

}
