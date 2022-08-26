<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Trc5200;
use Illuminate\Http\Request;

class Trc5200Controller extends Controller
{
    public function index()
    {
        $datas = Trc5200::all();
        return view('kom.trc5200', compact('datas'));
    }
    public function create(){
        return view('kom.trc5200.addnew');
    }

    public function store(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Trc5200;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->namakapalunit = $request->namakapalunit;
        $data->penempatan = $request->penempatan;
        $data->bft = $request->bft;
        $data->handheld= $request->handheld;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/trc5200');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Trc5200::find($id);
        return view('kom.trc5200.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Trc5200::find($id);
        $data->update($request->all());

        return redirect('/kom/trc5200')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Trc5200::find($id);
        $data->delete();

        return redirect('/kom/trc5200')->with('error', 'Maklumat Berjaya Dipadam');
    }
}
