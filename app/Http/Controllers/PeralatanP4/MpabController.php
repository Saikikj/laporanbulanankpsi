<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mpab;
use App\Models\PeralatanP4\MpabFacsimile;
use App\Models\PeralatanP4\MpabLaptop;
use App\Models\PeralatanP4\MpabPrinter;
use Illuminate\Http\Request;

class MpabController extends Controller
{
    public function index()
    {
        $datapc = Mpab::all();
        $datalaptop = MpabLaptop::all();
        $dataprinter = MpabPrinter::all();
        $datafacsimile = MpabFacsimile::all();

        // $datas = MpabLaptop::all();
        return view('p4.mpab', compact('datalaptop','datapc', 'dataprinter', 'datafacsimile'));

    }

    public function create(){
        return view('p4.mpab.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mpab;

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
        $data->namauser= $request->namauser;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mpab');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mpab::find($id);
        return view('p4.mpab.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mpab::find($id);
        $data->update($request->all());

        return redirect('/p4/mpab')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mpab::find($id);
        $data->delete();

        return redirect('/p4/mpab')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MpabLaptop;

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
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;


        $data->save();
        return redirect('/p4/mpab');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = MpabLaptop::find($id);
        return view('p4.mpab.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = MpabLaptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mpab')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = MpabLaptop::find($id);
        $data->delete();

        return redirect('/p4/mpab')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MpabPrinter;

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
        return redirect('/p4/mpab');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MpabPrinter::find($id);
        return view('p4.mpab.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MpabPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mpab')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MpabPrinter::find($id);
        $data->delete();

        return redirect('/p4/mpab')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFacsimile (Request $request){
        $data = new MpabFacsimile;

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
        return redirect('/p4/mpab');
    }
    public function editFacsimile($id){
        // return 'asdasd';
        $data = MpabFacsimile::find($id);
        return view('p4.mpab.editFacsimile', compact('data'));
    }
    public function updateFacsimile(Request $request, $id)
    {
        $data = MpabFacsimile::find($id);
        $data->update($request->all());

        return redirect('/p4/mpab')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFacsimile($id)
    {
        $data = MpabFacsimile::find($id);
        $data->delete();

        return redirect('/p4/mpab')->with('error', 'Maklumat Berjaya Dipadam');
    }


}
