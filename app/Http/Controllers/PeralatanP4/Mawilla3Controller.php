<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mawilla3PC;
use App\Models\PeralatanP4\Mawilla3Laptop;
use App\Models\PeralatanP4\Mawilla3Printer;
use App\Models\PeralatanP4\Mawilla3Vtc;
use App\Models\PeralatanP4\Mawilla3Switchrouter;
use App\Models\PeralatanP4\Mawilla3Ancillaries;
use App\Models\PeralatanP4\Mawilla3Telephone;
use Illuminate\Http\Request;

class Mawilla3Controller extends Controller
{
    public function index()
    {
        $datapc = Mawilla3PC::all();
        $datalaptop = Mawilla3Laptop::all();
        $dataprinter = Mawilla3Printer::all();
        $datavtc = Mawilla3Vtc::all();
        $dataswitchrouter= Mawilla3Switchrouter::all();
        $dataancillaries= Mawilla3Ancillaries::all();
        $datatelephone= Mawilla3Telephone::all();

        // $datas = Mawilla3Laptop::all();
        return view('p4.mawilla3', compact('datalaptop','datapc', 'dataprinter', 'datavtc', 'dataswitchrouter', 'dataancillaries', 'datatelephone'));

    }

    public function create(){
        return view('p4.mawilla3.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla3PC;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->lokasi = $request-> lokasi;
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
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mawilla3');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mawilla3PC::find($id);
        return view('p4.mawilla3.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mawilla3PC::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mawilla3PC::find($id);
        $data->delete();

        return redirect('mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla3Laptop;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->lokasi= $request-> lokasi;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->namadaftar= $request-> namadaftar;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->operatingsystem = $request->operatingsystem;
        $data->msoffice = $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;


        $data->save();
        return redirect('/p4/mawilla3');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = Mawilla3Laptop::find($id);
        return view('p4.mawilla3.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = Mawilla3Laptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = Mawilla3Laptop::find($id);
        $data->delete();

        return redirect('mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storePrinter (Request $request){
        $data = new Mawilla3Printer;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        // $data->tred= $request->tred;
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
        return redirect('/p4/mawilla3');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = Mawilla3Printer::find($id);
        return view('p4.mawilla3.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = Mawilla3Printer::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = Mawilla3Printer::find($id);
        $data->delete();

        return redirect('/p4/mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeVtc (Request $request){
        $data = new Mawilla3Vtc;

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
        return redirect('/p4/mawilla3');
    }
    public function editVtc($id){
        // return 'asdasd';
        $data = Mawilla3Vtc::find($id);
        return view('p4.mawilla3.editVtc', compact('data'));
    }
    public function updateVtc(Request $request, $id)
    {
        $data = Mawilla3Vtc::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyVtc($id)
    {
        $data = Mawilla3Vtc::find($id);
        $data->delete();

        return redirect('/p4/mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeSwitchrouter (Request $request){
        $data = new Mawilla3Switchrouter;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla3');
    }
    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = Mawilla3Switchrouter::find($id);
        return view('p4.mawilla3.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = Mawilla3Switchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = Mawilla3Switchrouter::find($id);
        $data->delete();

        return redirect('/p4/mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeAncillaries (Request $request){
        $data = new Mawilla3Ancillaries;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla3');
    }
    public function editAncillaries($id){
        // return 'asdasd';
        $data = Mawilla3Ancillaries::find($id);
        return view('p4.mawilla3.editAncillaries', compact('data'));
    }
    public function updateAncillaries(Request $request, $id)
    {
        $data = Mawilla3Ancillaries::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyAncillaries($id)
    {
        $data = Mawilla3Ancillaries::find($id);
        $data->delete();

        return redirect('mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeTelephone (Request $request){
        $data = new Mawilla3Telephone;

        $data->peralatan = $request->peralatan;
        $data->jenistelephone = $request->jenistelephone;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mawilla3');
    }
    public function editTelephone($id){
        // return 'asdasd';
        $data = Mawilla3Telephone::find($id);
        return view('p4.mawilla3.editTelephone', compact('data'));
    }
    public function updateTelephone(Request $request, $id)
    {
        $data = Mawilla3Telephone::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla3')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyTelephone($id)
    {
        $data = Mawilla3Telephone::find($id);
        $data->delete();

        return redirect('mawilla3')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
