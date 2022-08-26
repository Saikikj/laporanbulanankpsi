<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Xband;
use App\Models\KOM\Xbandcotm;
use App\Models\KOM\Xbandcotp;
use App\Models\KOM\Xbandfixedterminal;
use App\Models\KOM\Xbandflyawaykit;
use App\Models\KOM\Xbandnavalterminal;
use Illuminate\Http\Request;

class XbandController extends Controller
{
    public function index()
    {
        $datamanpack = Xband::all();
        $datafixedterminal = Xbandfixedterminal::all();
        $datanavalterminal = Xbandnavalterminal::all();
        $datacotp = Xbandcotp::all();
        $datacotm = Xbandcotm::all();
        $dataflyawaykit= Xbandflyawaykit::all();

        // $datas = XbandLaptop::all();
        return view('kom.xband', compact('datamanpack','datafixedterminal','datanavalterminal','datacotp','datacotm','dataflyawaykit'));

    }

    public function create(){
        return view('kom.xband.addnew');
    }

    public function storeManpack(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Xband;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/xband');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Xband::find($id);
        return view('kom.xband.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Xband::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Xband::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFixedterminal(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Xbandfixedterminal;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/kom/xband');
    }
    public function editFixedterminal($id){
        // return 'asdasd';
        $data = Xbandfixedterminal::find($id);
        return view('kom.xband.editFixedterminal', compact('data'));
    }
    public function updateFixedterminal(Request $request, $id)
    {
        $data = Xbandfixedterminal::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFixedterminal($id)
    {
        $data = Xbandfixedterminal::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }



    public function storeNavalterminal (Request $request){
        $data = new Xbandnavalterminal;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/kom/xband');
    }
    public function editNavalterminal($id){
        // return 'asdasd';
        $data = Xbandnavalterminal::find($id);
        return view('kom.xband.editNavalterminal', compact('data'));
    }
    public function updateNavalterminal(Request $request, $id)
    {
        $data = Xbandnavalterminal::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyNavalterminal($id)
    {
        $data = Xbandnavalterminal::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }



    public function storeCotp (Request $request){
        $data = new Xbandcotp;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/kom/xband');
    }
    public function editCotp($id){
        // return 'asdasd';
        $data = Xbandcotp::find($id);
        return view('kom.xband.editCotp', compact('data'));
    }
    public function updateCotp(Request $request, $id)
    {
        $data = Xbandcotp::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyCotp($id)
    {
        $data = Xbandcotp::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }



    public function storeCotm (Request $request){
        $data = new Xbandcotm;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/kom/xband');
    }
    public function editCotm($id){
        // return 'asdasd';
        $data = Xbandcotm::find($id);
        return view('kom.xband.editCotm', compact('data'));
    }
    public function updateCotm(Request $request, $id)
    {
        $data = Xbandcotm::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyCotm($id)
    {
        $data = Xbandcotm::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }



    public function storeFlyawaykit (Request $request){
        $data = new Xbandflyawaykit;
        $data->penempatan = $request->penempatan;
        $data->lokasi= $request-> lokasi;
        $data->jumlah= $request->jumlah;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/kom/xband');
    }
    public function editFlyawaykit($id){
        // return 'asdasd';
        $data = Xbandflyawaykit::find($id);
        return view('kom.xband.editFlyawaykit', compact('data'));
    }
    public function updateFlyawaykit(Request $request, $id)
    {
        $data = Xbandflyawaykit::find($id);
        $data->update($request->all());

        return redirect('/kom/xband')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFlyawaykit($id)
    {
        $data = Xbandflyawaykit::find($id);
        $data->delete();

        return redirect('/kom/xband')->with('error', 'Maklumat Berjaya Dipadam');
    }

}
