<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mawilla1;
use App\Models\PeralatanP4\Mawilla1Laptop;
use App\Models\PeralatanP4\Mawilla1Printer;
use App\Models\PeralatanP4\Mawilla1Vtc;
use App\Models\PeralatanP4\Mawilla1Switchrouter;
use App\Models\PeralatanP4\Mawilla1Ancillaries;
use App\Models\PeralatanP4\Mawilla1Comm;

use Illuminate\Http\Request;

class Mawilla1Controller extends Controller
{
    public function index()
    {
        $datapc = Mawilla1::all();
        $datalaptop = Mawilla1Laptop::all();
        $dataprinter = Mawilla1Printer::all();
        $datavtc = Mawilla1Vtc::all();
        $dataswitchrouter= Mawilla1Switchrouter::all();
        $dataancillaries= Mawilla1Ancillaries::all();
        $datacomm= Mawilla1Comm::all();

        // $datas = Mawilla1Laptop::all();
        return view('p4.mawilla1', compact('datalaptop','datapc', 'dataprinter', 'datavtc', 'dataswitchrouter', 'dataancillaries', 'datacomm'));

    }

    public function create(){
        return view('p4.mawilla1.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla1;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->nosiricpu= $request->nosiricpu;
        $data->nosirimonitor= $request->nosirimonitor;
        $data->jenama= $request->jenama;
        $data->tahun= $request->tahun;
        $data->status= $request->status;
        $data->terminalnc2= $request->terminalnc2;
        $data->namadaftar= $request->namadaftar;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mawilla1::find($id);
        return view('p4.mawilla1.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mawilla1::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mawilla1::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla1Laptop;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->sistem = $request-> sistem;
        $data->namauser = $request-> namauser;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->operatingsystem = $request->operatingsystem;
        $data->msoffice = $request->msoffice;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;


        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = Mawilla1Laptop::find($id);
        return view('p4.mawilla1.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = Mawilla1Laptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = Mawilla1Laptop::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storePrinter (Request $request){
        $data = new Mawilla1Printer;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->toner= $request-> toner;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = Mawilla1Printer::find($id);
        return view('p4.mawilla1.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = Mawilla1Printer::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = Mawilla1Printer::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storeVtc (Request $request){
        $data = new Mawilla1Vtc;

        $data->model = $request->model;
        $data->nosiricodec = $request->nosiricodec;
        $data->nosirimikrofon = $request->nosirimikrofon;
        $data->nosiricamera = $request->nosiricamera;
        $data->nosiriremote = $request->nosiriremote;
        $data->poweradapter = $request->poweradapter;
        $data->tahun = $request->tahun;
        $data->status = $request->status;
        $data->terminalnc2 = $request->terminalnc2;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function editVtc($id){
        // return 'asdasd';
        $data = Mawilla1Vtc::find($id);
        return view('p4.mawilla1.editVtc', compact('data'));
    }
    public function updateVtc(Request $request, $id)
    {
        $data = Mawilla1Vtc::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyVtc($id)
    {
        $data = Mawilla1Vtc::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storeSwitchrouter (Request $request){
        $data = new Mawilla1Switchrouter;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = Mawilla1Switchrouter::find($id);
        return view('p4.mawilla1.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = Mawilla1Switchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = Mawilla1Switchrouter::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storeAncillaries (Request $request){
        $data = new Mawilla1Ancillaries;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla1');
    }
    public function editAncillaries($id){
        // return 'asdasd';
        $data = Mawilla1Ancillaries::find($id);
        return view('p4.mawilla1.editAncillaries', compact('data'));
    }
    public function updateAncillaries(Request $request, $id)
    {
        $data = Mawilla1Ancillaries::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyAncillaries($id)
    {
        $data = Mawilla1Ancillaries::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }

    //
    public function storeComm (Request $request){
        $data = new Mawilla1Comm;

        $data->peralatan = $request->peralatan;
        $data->jenistelephone = $request->jenistelephone;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla1');
    }

    public function editComm($id){
        // return 'asdasd';
        $data = Mawilla1Comm::find($id);
        return view('p4.mawilla1.editComm', compact('data'));
    }
    public function updateComm(Request $request, $id)
    {
        $data = Mawilla1Comm::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyComm($id)
    {
        $data = Mawilla1Comm::find($id);
        $data->delete();

        return redirect('/p4/mawilla1')->with('success', 'Maklumat Berjaya Dibuang');
    }


}
