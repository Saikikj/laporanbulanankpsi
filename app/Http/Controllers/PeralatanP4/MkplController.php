<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mkpl;
use App\Models\PeralatanP4\MkplPrinter;
use Illuminate\Http\Request;

class MkplController extends Controller
{
    public function index()
    {
        $datapc = Mkpl::all();
        $dataprinter = MkplPrinter::all();
        // $datas = MkplLaptop::all();
        return view('p4.mkpl', compact('datapc', 'dataprinter'));

    }

    public function create(){
        return view('p4.mkpl.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mkpl;

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
        $data->p4= $request->p4;
        $data->namadaftar= $request->namadaftar;
        $data->processor= $request->processor;
        $data->ram= $request->ram;
        $data->operatingsystem= $request->operatingsystem;
        $data->msoffice= $request->msoffice;
        $data->antivirus= $request->antivirus;
        $data->rujukankewpa= $request->rujukankewpa;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/p4/mkpl');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Mkpl::find($id);
        return view('p4.mkpl.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mkpl::find($id);
        $data->update($request->all());

        return redirect('/p4/mkpl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mkpl::find($id);
        $data->delete();

        return redirect('/p4/mkpl')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storePrinter (Request $request){
        $data = new MkplPrinter;

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
        return redirect('/p4/mkpl');
    }
    public function editPrinter($id){
        // return 'asdasd';
        $data = MkplPrinter::find($id);
        return view('p4.mkpl.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = MkplPrinter::find($id);
        $data->update($request->all());

        return redirect('/p4/mkpl')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = MkplPrinter::find($id);
        $data->delete();

        return redirect('/p4/mkpl')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
