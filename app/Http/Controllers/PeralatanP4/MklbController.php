<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mklb;
use App\Models\PeralatanP4\MklbAcu;
use App\Models\PeralatanP4\MklbFacsimile;
use App\Models\PeralatanP4\MklbFiber;
use App\Models\PeralatanP4\MklbFire;
use App\Models\PeralatanP4\MklbLaptop;
use App\Models\PeralatanP4\MklbPrinter;
use App\Models\PeralatanP4\MklbScanner;
use App\Models\PeralatanP4\MklbSecurity;
use App\Models\PeralatanP4\MklbStandbygenerator;
use App\Models\PeralatanP4\MklbSwitchrouter;
use App\Models\PeralatanP4\MklbUps;
use Illuminate\Http\Request;

class MklbController extends Controller
{
    public function index()
    {
        $datapc = Mklb::all();
        $datalaptop = MklbLaptop::all();
        $dataprinter = MklbPrinter::all();
        $datascanner= MklbScanner::all();
        $datafacsimile = MklbFacsimile::all();
        $dataswitchrouter = MklbSwitchrouter::all();
        $datafiber= MklbFiber::all();
        $dataacu= MklbAcu::all();
        $dataups= MklbUps::all();
        $datasecurity= MklbSecurity::all();
        $datafire= MklbFire::all();
        $datastandbygenerator= MklbStandbygenerator::all();

        // $datas = MklbLaptop::all();
        return view('p4.mklb', compact('datapc','datalaptop','dataprinter','datascanner',
            'datafacsimile','dataswitchrouter','datafiber','dataacu','dataups','datasecurity',
            'datafire','datastandbygenerator'));
    }

    public function create(){
        return view('p4.mklb.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mklb;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
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
        return redirect('/p4/mklb');
    }

    public function edit($id){
        // return 'asdasd';
        $data = Mklb::find($id);
        return view('p4.mklb.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mklb::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mklb::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MklbLaptop;

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
        $data->jenama= $request->jenama;
        $data->tahun= $request->tahun;
        $data->status= $request->status;
        $data->namadaftar= $request->namadaftar;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mklb');
    }

    public function editLaptop($id){
        // return 'asdasd';
        $data = MklbLaptop::find($id);
        return view('p4.mklb.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = MklbLaptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = MklbLaptop::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MklbPrinter;

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
        return redirect('p4/mklb');
    }

    public function editPrinter($id){
        // return 'asdasd';
        $data = MklbPrinter::find($id);
        return view('p4.mklb.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MklbPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MklbPrinter::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFacsimile (Request $request){
        $data = new MklbFacsimile;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editFacsimile($id){
        // return 'asdasd';
        $data = MklbFacsimile::find($id);
        return view('p4.mklb.editFacsimile', compact('data'));
    }
    public function updateFacsimile(Request $request, $id)
    {
        $data = MklbFacsimile::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFacsimile($id)
    {
        $data = MklbFacsimile::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeFiber (Request $request){
        $data = new MklbFiber;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editFiber($id){
        // return 'asdasd';
        $data = MklbFiber::find($id);
        return view('p4.mklb.editFiber', compact('data'));
    }
    public function updateFiber(Request $request, $id)
    {
        $data = MklbFiber::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFiber($id)
    {
        $data = MklbFiber::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeAcu (Request $request){
        $data = new MklbAcu;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editAcu($id){
        // return 'asdasd';
        $data = MklbAcu::find($id);
        return view('p4.mklb.editAcu', compact('data'));
    }
    public function updateAcu(Request $request, $id)
    {
        $data = MklbAcu::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyAcu($id)
    {
        $data = MklbAcu::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeUps (Request $request){
        $data = new MklbUps;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editUps($id){
        // return 'asdasd';
        $data = MklbUps::find($id);
        return view('p4.mklb.editUps', compact('data'));
    }
    public function updateUps(Request $request, $id)
    {
        $data = MklbUps::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyUps($id)
    {
        $data = MklbUps::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeSecurity (Request $request){
        $data = new MklbSecurity;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editSecurity($id){
        // return 'asdasd';
        $data = MklbSecurity::find($id);
        return view('p4.mklb.editSecurity', compact('data'));
    }
    public function updateSecurity(Request $request, $id)
    {
        $data = MklbSecurity::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySecurity($id)
    {
        $data = MklbSecurity::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFire (Request $request){
        $data = new MklbFire;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('p4/mklb');
    }

    public function editFire($id){
        // return 'asdasd';
        $data = MklbFire::find($id);
        return view('p4.mklb.edit', compact('data'));
    }
    public function updateFire(Request $request, $id)
    {
        $data = MklbFire::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFire($id)
    {
        $data = MklbFire::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }



    public function storeSwitchrouter (Request $request){
        $data = new MklbSwitchrouter;

        $data->unit = $request->unit;
        // $data->perjawatan = $request-> perjawatan;
        // $data->notentera= $request->notentera;
        // $data->pangkat= $request->pangkat;
        // $data->tred= $request->tred;
        // $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mklb');
    }

    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = MklbSwitchrouter::find($id);
        return view('p4.mklb.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = MklbSwitchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = MklbSwitchrouter::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeScanner(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MklbScanner;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mklb');
    }

    public function editScanner($id){
        // return 'asdasd';
        $data = MklbScanner::find($id);
        return view('p4.mklb.editScanner', compact('data'));
    }
    public function updateScanner(Request $request, $id)
    {
        $data = MklbScanner::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyScanner($id)
    {
        $data = Mklb::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeStandbygenerator(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MklbStandbygenerator;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->tahun= $request-> tahun;
        $data->status = $request-> status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mklb');
    }

    public function editStandbygenerator($id){
        // return 'asdasd';
        $data = MklbStandbygenerator::find($id);
        return view('p4.mklb.editStandbygenerator', compact('data'));
    }
    public function updateStandbygenerator(Request $request, $id)
    {
        $data = MklbStandbygenerator::find($id);
        $data->update($request->all());

        return redirect('/p4/mklb')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyStandbygenerator($id)
    {
        $data = MklbStandbygenerator::find($id);
        $data->delete();

        return redirect('/p4/mklb')->with('error', 'Maklumat Berjaya Dipadam');
    }


}
