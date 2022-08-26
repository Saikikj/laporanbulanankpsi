<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mpat;
use App\Models\PeralatanP4\MpatFacsimile;
use App\Models\PeralatanP4\MpatLaptop;
use App\Models\PeralatanP4\MpatPrinter;
use Illuminate\Http\Request;

class MpatController extends Controller
{
    public function index()
    {
        $datapc = Mpat::all();
        $datalaptop = MpatLaptop::all();
        $dataprinter = MpatPrinter::all();
        $datafacsimile = MpatFacsimile::all();

        // $datas = MpatLaptop::all();
        return view('p4.mpat', compact('datalaptop','datapc', 'dataprinter', 'datafacsimile'));

    }

    public function create(){
        return view('p4.mpat.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mpat;

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
        $data->jenama= $request->Jenama;
        $data->tahun= $request->Tahun;
        $data->status= $request->Status;
        $data->linep4= $request->linep4;
        $data->namauser= $request->namauser;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->Catatan;


        $data->save();
        return redirect('/p4/mpat');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mpat::find($id);
        return view('p4.mpat.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mpat::find($id);
        $data->update($request->all());

        return redirect('/p4/mpat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mpat::find($id);
        $data->delete();

        return redirect('/p4/mpat')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new MpatLaptop;

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
        $data->jenama= $request-> Jenama;
        $data->tahun= $request-> Tahun;
        $data->status = $request-> Status;
        $data->sistem = $request-> sistem;
        $data->namauser = $request-> namauser;
        $data->processor = $request->processor;
        $data->ram = $request->ram;
        $data->operatingsystem = $request->operatingsystem;
        $data->msoffice = $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->Catatan;


        $data->save();
        return redirect('/p4/mpat');
    }
    public function editLaptop($id){
        // return 'asdasd';
        $data = MpatLaptop::find($id);
        return view('p4.mpat.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = MpatLaptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mpat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = MpatLaptop::find($id);
        $data->delete();

        return redirect('/p4/mpat')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new MpatPrinter;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> Jenama;
        $data->toner= $request-> toner;
        $data->tahun= $request-> Tahun;
        $data->status = $request-> Status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->Catatan;
        $data->save();
        return redirect('/p4/mpat');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MpatPrinter::find($id);
        return view('p4.mpat.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MpatPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mpat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MpatPrinter::find($id);
        $data->delete();

        return redirect('/p4/mpat')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFacsimile (Request $request){
        $data = new MpatFacsimile;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> Jenama;
        $data->toner= $request-> toner;
        $data->tahun= $request-> Tahun;
        $data->status = $request-> Status;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->Catatan;
        $data->save();
        return redirect('/p4/mpat');
    }
    public function editFacsimile($id){
        // return 'asdasd';
        $data = MpatFacsimile::find($id);
        return view('p4.mpat.editFacsimile', compact('data'));
    }
    public function updateFacsimile(Request $request, $id)
    {
        $data = MpatFacsimile::find($id);
        $data->update($request->all());

        return redirect('/p4/mpat')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFacsimile($id)
    {
        $data = MpatFacsimile::find($id);
        $data->delete();

        return redirect('/p4/mpat')->with('error', 'Maklumat Berjaya Dipadam');
    }


}
