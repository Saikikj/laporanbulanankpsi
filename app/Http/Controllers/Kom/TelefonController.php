<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Telefon;
use App\Models\KOM\TelefonIbusawat;
use Illuminate\Http\Request;

class TelefonController extends Controller
{
    public function index()
    {
        $dataoperasi = Telefon::all();
        $dataibusawat = TelefonIbusawat::all();
        return view('kom.telefon', compact('dataoperasi', 'dataibusawat'));
    }
    public function create(){
        return view('kom.telefon.addnew');
    }

    public function storeOperasi(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Telefon;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->lokasi = $request->lokasi;
        $data->negerizon= $request->negerizon;
        $data->jumlahtalian = $request->jumlahtalian;
        $data->taliansimpanan= $request->taliansimpanan;
        $data->kata = $request->kata;
        $data->katb= $request->katb;
        $data->katc = $request->katc;
        $data->faks = $request->faks;
        $data->baik= $request->baik;
        $data->rosak= $request->rosak;
        $data->catatan = $request->catatan;

        $data->save();
        return redirect('/kom/telefon');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Telefon::find($id);
        return view('kom.telefon.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Telefon::find($id);
        $data->update($request->all());

        return redirect('/kom/telefon')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Telefon::find($id);
        $data->delete();

        return redirect('/kom/telefon')->with('error', 'Maklumat Berjaya Dipadam');
    }
    public function storeIbusawat (Request $request){
        $data = new TelefonIbusawat;

        $data->zon= $request->zon;
        $data->pasukanmarkas= $request->pasukanmarkas;
        $data->taliansimpanan= $request->taliansimpanan;
        $data->negeri = $request->negeri;
        $data->ibusawat= $request->ibusawat;
        $data->console = $request->console;
        $data->catatan = $request->catatan;
        $data->save();
        return redirect('kom/telefon');
    }
    public function editIbusawat($id){
        // return 'asdasd';
        $data = TelefonIbusawat::find($id);
        return view('kom.telefon.editIbusawat', compact('data'));
    }
    public function updateIbusawat(Request $request, $id)
    {
        $data = TelefonIbusawat::find($id);
        $data->update($request->all());

        return redirect('/kom/telefon')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyIbusawat($id)
    {
        $data = TelefonIbusawat::find($id);
        $data->delete();

        return redirect('/kom/telefon')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
