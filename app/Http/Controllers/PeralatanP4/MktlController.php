<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mktl;
use App\Models\PeralatanP4\MktlAncillaries;
use App\Models\PeralatanP4\MktlComm;
use App\Models\PeralatanP4\MktlLaptop;
use App\Models\PeralatanP4\MktlPrinter;
use App\Models\PeralatanP4\MktlSwitchrouter;
use App\Models\PeralatanP4\MktlVtc;
use Illuminate\Http\Request;

class MktlController extends Controller
{
    public function index()
    {
        $datapc = Mktl::all();
        $datalaptop = MktlLaptop::all();
        $dataprinter = MktlPrinter::all();
        $datavtc = MktlVtc::all();
        $dataswitchrouter= MktlSwitchrouter::all();
        $dataancillaries= MktlAncillaries::all();
        $datacomm= MktlComm::all();
        return view('p4.mktl', compact('datalaptop','datapc', 'dataprinter', 'datavtc', 'dataswitchrouter', 'dataancillaries', 'datacomm'));

    }

    public function create(){
        return view('p4.mktl.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mktl;

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
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/p4/mktl');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mktl::find($id);
        return view('p4.mktl.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mktl::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mktl::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MktlLaptop;

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
        $data->antivirus = $request->antivirus;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;


        $data->save();
        return redirect('/p4/mktl');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = MktlLaptop::find($id);
        return view('p4.mktl.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = MktlLaptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = MktlLaptop::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MktlPrinter;

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
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mktl');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MktlPrinter::find($id);
        return view('p4.mktl.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MktlPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MktlPrinter::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeVtc (Request $request){
        $data = new MktlVtc;

        $data->model = $request->model;
        $data->nosiricodec = $request->nosiricodec;
        $data->nosirimikrofon = $request->nosirimikrofon;
        $data->nosiricamera = $request->nosiricamera;
        $data->tahun = $request->tahun;
        $data->status = $request->status;
        $data->terminalnc2 = $request->terminalnc2;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mktl');
    }
    public function editVtc($id){
        // return 'asdasd';
        $data = MktlVtc::find($id);
        return view('p4.mktl.editVtc', compact('data'));
    }
    public function updateVtc(Request $request, $id)
    {
        $data = MktlVtc::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyVtc($id)
    {
        $data = MktlVtc::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeSwitchrouter (Request $request){
        $data = new MktlSwitchrouter;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mktl');
    }
    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = MktlSwitchrouter::find($id);
        return view('p4.mktl.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = MktlSwitchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = MktlSwitchrouter::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeAncillaries (Request $request){
        $data = new MktlAncillaries;

        $data->peralatan = $request->peralatan;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mktl');
    }
    public function editAncillaries($id){
        // return 'asdasd';
        $data = MktlAncillaries::find($id);
        return view('p4.mktl.editAncillaries', compact('data'));
    }
    public function updateAncillaries(Request $request, $id)
    {
        $data = MktlAncillaries::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyAncillaries($id)
    {
        $data = MktlAncillaries::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeComm (Request $request){
        $data = new MktlComm;

        $data->peralatan = $request->peralatan;
        $data->jenistelephone = $request->jenistelephone;
        $data->nosiri = $request->nosiri;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->status = $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/p4/mktl');
    }
    public function editComm ($id){
        // return 'asdasd';
        $data = MktlComm::find($id);
        return view('p4.mktl.editComm', compact('data'));
    }
    public function updateComm (Request $request, $id)
    {
        $data = MktlComm::find($id);
        $data->update($request->all());

        return redirect('/p4/mktl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyComm($id)
    {
        $data = MktlComm::find($id);
        $data->delete();

        return redirect('/p4/mktl')->with('error', 'Maklumat Berjaya Dipadam');
    }


}
