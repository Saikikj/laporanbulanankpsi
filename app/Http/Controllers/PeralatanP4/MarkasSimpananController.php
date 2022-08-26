<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\MarkasSimpanan;
use App\Models\PeralatanP4\MarkasSimpananAncillaries;
use App\Models\PeralatanP4\MarkasSimpananComm;
use App\Models\PeralatanP4\MarkasSimpananLaptop;
use App\Models\PeralatanP4\MarkasSimpananPrinter;
use App\Models\PeralatanP4\MarkasSimpananSwitchrouter;
use App\Models\PeralatanP4\MarkasSimpananVtc;
use Illuminate\Http\Request;

class MarkasSimpananController extends Controller
{
    public function index()
    {
        $datapc = MarkasSimpanan::all();
        $datalaptop = MarkasSimpananLaptop::all();
        $dataprinter = MarkasSimpananPrinter::all();
        $datavtc = MarkasSimpananVtc::all();
        $dataswitchrouter= MarkasSimpananSwitchrouter::all();
        $dataancillaries= MarkasSimpananAncillaries::all();
        $datacomm= MarkasSimpananComm::all();

        // $datas = MarkasSimpananLaptop::all();
        return view('p4.mksimpanan', compact('datalaptop','datapc', 'dataprinter', 'datavtc', 'dataswitchrouter', 'dataancillaries', 'datacomm'));

    }

    public function create(){
        return view('p4.mksimpanan.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MarkasSimpanan;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->cpu= $request->cpu;
        $data->monitor= $request->monitor;
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
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan= $request->Catatan;


        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function edit($id){
        // return 'asdasd';
        $data = MarkasSimpanan::find($id);
        return view('p4.mksimpanan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = MarkasSimpanan::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = MarkasSimpanan::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MarkasSimpananLaptop;

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
        $data->namadaftar = $request-> namadaftar;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->operatingsystem = $request->operatingsystem;
        $data->msoffice = $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan = $request->Catatan;


        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = MarkasSimpananLaptop::find($id);
        return view('p4.mksimpanan.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = MarkasSimpananLaptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = MarkasSimpananLaptop::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MarkasSimpananPrinter;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->toner= $request-> toner;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->Catatan;
        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MarkasSimpananPrinter::find($id);
        return view('p4.mksimpanan.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MarkasSimpananPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MarkasSimpananPrinter::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeVtc (Request $request){
        $data = new MarkasSimpananVtc;

        $data->model = $request->model;
        $data->nosiricodec = $request->nosiricodec;
        $data->nosirimikrofon = $request->nosirimikrofon;
        $data->nosiricamera = $request->nosiricamera;
        $data->tahun = $request->tahun;
        $data->status = $request->status;
        $data->terminalnc2 = $request->terminalnc2;
        $data->catatan = $request->Catatan;
        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editVtc($id){
        // return 'asdasd';
        $data = MarkasSimpananVtc::find($id);
        return view('p4.mksimpanan.editVtc', compact('data'));
    }
    public function updateVtc(Request $request, $id)
    {
        $data = MarkasSimpananVtc::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyVtc($id)
    {
        $data = MarkasSimpananVtc::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeSwitchrouter (Request $request){
        $data = new MarkasSimpananSwitchrouter;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->Catatan;
        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = MarkasSimpananSwitchrouter::find($id);
        return view('p4.mksimpanan.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = MarkasSimpananSwitchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = MarkasSimpananSwitchrouter::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeAncillaries (Request $request){
        $data = new MarkasSimpananAncillaries;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->Catatan;
        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editAncillaries($id){
        // return 'asdasd';
        $data = MarkasSimpananAncillaries::find($id);
        return view('p4.mksimpanan.editAncillaries', compact('data'));
    }
    public function updateAncillaries(Request $request, $id)
    {
        $data = MarkasSimpananAncillaries::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyAncillaries($id)
    {
        $data = MarkasSimpananAncillaries::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeComm (Request $request){
        $data = new MarkasSimpananComm;

        $data->peralatan = $request->peralatan;
        $data->jenistelephone = $request->jenistelephone;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->Catatan;
        $data->save();
        return redirect('/p4/mksimpanan');
    }
    public function editComm($id){
        // return 'asdasd';
        $data = MarkasSimpananComm::find($id);
        return view('p4.mksimpanan.editComm', compact('data'));
    }
    public function updateComm(Request $request, $id)
    {
        $data = MarkasSimpananComm::find($id);
        $data->update($request->all());

        return redirect('/p4/mksimpanan')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyComm($id)
    {
        $data = MarkasSimpananComm::find($id);
        $data->delete();

        return redirect('/p4/mksimpanan')->with('error', 'Maklumat Berjaya Dipadam');
    }



}
