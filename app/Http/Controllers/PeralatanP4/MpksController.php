<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mpks;
use App\Models\PeralatanP4\MpksFacsimile;
use App\Models\PeralatanP4\MpksLainPeralatan;
use App\Models\PeralatanP4\MpksPrinter;
use App\Models\PeralatanP4\MpksSwitchrouter;
use App\Models\PeralatanP4\MpksTelephone;
use App\Models\PeralatanP4\MpksVc;
use Illuminate\Http\Request;

class MpksController extends Controller
{
    public function index()
    {
        $datapc = Mpks::all();
        $dataprinter = MpksPrinter::all();
        $datafacsimile = MpksFacsimile::all();
        $datatelephone = MpksTelephone::all();
        $dataswitchrouter = MpksSwitchrouter::all();
        $datavc = MpksVc::all();
        $datalainperalatan = MpksLainPeralatan::all();

        // $datas = MpksLaptop::all();
        return view('p4.mpks', compact('datatelephone',
        'datapc', 'dataprinter',
         'datafacsimile', 'dataswitchrouter',
        'datavc', 'datalainperalatan'));

    }

    public function create(){
        return view('p4.mpks.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mpks;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->bilcpu= $request->bilcpu;
        $data->bilmonitor= $request->bilmonitor;
        $data->bilmouse= $request->bilmouse;
        $data->bilkeyboard= $request->bilkeyboard;
        $data->nosiricpu= $request->nosiricpu;
        $data->nosirimonitor= $request->nosirimonitor;
        $data->jenama= $request->jenama;
        $data->tahun= $request->tahun;
        $data->status= $request->status;
        $data->linep4= $request->linep4;
        $data->namadaftar= $request->namadaftar;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mpks');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mpks::find($id);
        return view('p4.mpks.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mpks::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mpks::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MpksPrinter;

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
        return redirect('p4/mpks');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MpksPrinter::find($id);
        return view('p4.mpks.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MpksPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MpksPrinter::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFacsimile (Request $request){
        $data = new MpksFacsimile;

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
        return redirect('p4/mpks');
    }
    public function editFacsimile($id){
        // return 'asdasd';
        $data = MpksFacsimile::find($id);
        return view('p4.mpks.editFacsimile', compact('data'));
    }
    public function updateFacsimile(Request $request, $id)
    {
        $data = MpksFacsimile::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFacsimile($id)
    {
        $data = MpksFacsimile::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeTelephone(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MpksTelephone;

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
        return redirect('/p4/mpks');
    }
    public function editTelephone($id){
        // return 'asdasd';
        $data = MpksTelephone::find($id);
        return view('p4.mpks.editTelephone', compact('data'));
    }
    public function updateTelephone(Request $request, $id)
    {
        $data = MpksTelephone::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyTelephone($id)
    {
        $data = MpksTelephone::find($id);
        $data->delete();
        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeSwitchrouter (Request $request){
        $data = new MpksSwitchrouter;

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
        return redirect('/p4/mpks');
    }
    public function editSwitchrouter($id){
        // return 'asdasd';
        $data = MpksSwitchrouter::find($id);
        return view('p4.mpks.editSwitchrouter', compact('data'));
    }
    public function updateSwitchrouter(Request $request, $id)
    {
        $data = MpksSwitchrouter::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroySwitchrouter($id)
    {
        $data = MpksSwitchrouter::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeVc (Request $request){
        $data = new MpksVc();

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
        return redirect('/p4/mpks');
    }
    public function editVc($id){
        // return 'asdasd';
        $data = MpksVc::find($id);
        return view('p4.mpks.editVc', compact('data'));
    }
    public function updateVc(Request $request, $id)
    {
        $data = MpksVc::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyVc($id)
    {
        $data = MpksVc::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLainPeralatan (Request $request){
        $data = new MpksLainPeralatan;

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
        return redirect('/p4/mpks');
    }
    public function editLainPeralatan($id){
        // return 'asdasd';
        $data = MpksLainPeralatan::find($id);
        return view('p4.mpks.editLainPeralatan', compact('data'));
    }
    public function updateLainPeralatan(Request $request, $id)
    {
        $data = MpksLainPeralatan::find($id);
        $data->update($request->all());

        return redirect('/p4/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLainPeralatan($id)
    {
        $data = MpksLainPeralatan::find($id);
        $data->delete();

        return redirect('mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }


}
