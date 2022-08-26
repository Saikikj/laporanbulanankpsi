<?php

namespace App\Http\Controllers\PeralatanP4;

use App\Http\Controllers\Controller;
use App\Models\PeralatanP4\Mawilla2PC;
use App\Models\PeralatanP4\Mawilla2Laptop;
use App\Models\PeralatanP4\Mawilla2Printer;
use App\Models\PeralatanP4\Mawilla2PeralatanSokong;
use Illuminate\Http\Request;

class Mawilla2Controller extends Controller
{
    public function index()
    {
        $datapc = Mawilla2PC::all();
        $datalaptop = Mawilla2Laptop::all();
        $dataprinter = Mawilla2Printer::all();
        $dataperalatansokong = Mawilla2PeralatanSokong::all();

        return view('p4.mawilla2', compact('datalaptop','datapc', 'dataprinter', 'dataperalatansokong'));
    }

    public function create(){
        return view('p4.mawilla2.addnew');
    }

    public function storePC(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla2PC;

        //$data->(nama column) = $request-> (column dalam table)
        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera = $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->nama= $request->nama;
        $data->bilmonitor= $request->bilmonitor;
        $data->bilmouse= $request->bilmouse;
        $data->bilkeyboard= $request->bilkeyboard;
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
        $data->antivirus= $request->antivirus;
        $data->msoffice= $request->msoffice;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/p4/mawilla2')->with('success','Maklumat Berjaya Ditambah');
    }

    public function edit($id){
        // return 'asdasd';
        $data = Mawilla2PC::find($id);
        return view('p4.mawilla2.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mawilla2PC::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla2')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Mawilla2PC::find($id);
        $data->delete();

        return redirect('/p4/mawilla2')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeLaptop(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Mawilla2Laptop;

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
        return redirect('/p4/mawilla2');
    }

    public function editLaptop($id){
        // return 'asdasd';
        $data = Mawilla2Laptop::find($id);
        return view('p4.mawilla2.editLaptop', compact('data'));
    }
    public function updateLaptop(Request $request, $id)
    {
        $data = Mawilla2Laptop::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla2')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyLaptop($id)
    {
        $data = Mawilla2Laptop::find($id);
        $data->delete();

        return redirect('mawilla2')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storePrinter (Request $request){
        $data = new Mawilla2Printer;

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
        return redirect('/p4/mawilla2');
    }

    public function editPrinter($id){
        // return 'asdasd';
        $data = Mawilla2Printer::find($id);
        return view('p4.mawilla2.editPrinter', compact('data'));
    }
    public function updatePrinter(Request $request, $id)
    {
        $data = Mawilla2Printer::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla2')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPrinter($id)
    {
        $data = Mawilla2Printer::find($id);
        $data->delete();

        return redirect('mawilla2')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storePeralatanSokong (Request $request){
        $data = new Mawilla2PeralatanSokong;

        $data->unit = $request->unit;
        $data->perjawatan = $request-> perjawatan;
        $data->notentera= $request->notentera;
        $data->pangkat= $request->pangkat;
        $data->tred= $request->tred;
        $data->kategoriperalatan= $request->kategoriperalatan;
        $data->lokasi= $request->lokasi;
        $data->nosiri= $request->nosiri;
        $data->jenama= $request-> jenama;
        $data->toner= $request-> toner;
        $data->tahun= $request-> tahun;
        $data->rujukankewpa = $request->rujukankewpa;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('/p4/mawilla2');
    }

    public function editPeralatansokong($id){
        // return 'asdasd';
        $data = Mawilla2PeralatanSokong::find($id);
        return view('p4.mawilla2.editPeralatansokong', compact('data'));
    }
    public function updatePeralatansokong(Request $request, $id)
    {
        $data = Mawilla2PeralatanSokong::find($id);
        $data->update($request->all());

        return redirect('/p4/mawilla2')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyPeralatanSokong($id)
    {
        $data = Mawilla2PeralatanSokong::find($id);
        $data->delete();

        return redirect('mawilla2')->with('error', 'Maklumat Berjaya Dipadam');
    }

}
