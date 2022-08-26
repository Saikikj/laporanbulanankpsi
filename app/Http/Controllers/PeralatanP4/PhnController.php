<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Phn;
use App\Models\PeralatanP4\PhnPrinter;
use Illuminate\Http\Request;

class PhnController extends Controller
{
    public function index()
    {
        $datapc = Phn::all();
        $dataprinter = PhnPrinter::all();
        return view('p4.phn', compact('datapc', 'dataprinter'));
    }
    public function create(){
        return view('p4.phn.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Phn;

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
        $data->tldmnet= $request->tldmnet;
        $data->namadaftar= $request->namadaftar;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/phn');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Phn::find($id);
        return view('p4.phn.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Phn::find($id);
        $data->update($request->all());

        return redirect('/p4/phn')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Phn::find($id);
        $data->delete();

        return redirect('phn')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storePrinter (Request $request){
        $data = new PhnPrinter;

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
        return redirect('p4/phn');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = PhnPrinter::find($id);
        return view('p4.phn.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = PhnPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/phn')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = PhnPrinter::find($id);
        $data->delete();

        return redirect('phn')->with('error', 'Maklumat Berjaya Dipadam');
    }



}
