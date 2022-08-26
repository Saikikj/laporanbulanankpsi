<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImpks;
use Illuminate\Http\Request;

class PeralatanSImpksController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImpks::all();
        return view('si.wilayahtimur.mpks', compact('datas'));
    }

    public function create(){
        return view('si.wilayahtimur.mpks.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImpks;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Logistik Timur';
        $data->unit = $request->unit;
        $data->penempatan= $request-> penempatan;
        $data->jenisperalatan= $request->jenisperalatan;
        $data->jenama= $request->jenama;
        $data->cpu= $request->cpu;
        $data->monitor= $request->monitor;
        $data->tahun= $request->tahun;
        $data->nopendaftaranasetkewpa= $request->nopendaftaranasetkewpa;
        $data->status= $request->status;
        $data->cadangan= $request->cadangan;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/si/wilayahtimur/mpks');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImpks::find($id);
        return view('si.wilayahtimur.mpks.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImpks::find($id);
        $data->update($request->all());

        return redirect('si/wilayahtimur/mpks')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImpks::find($id);
        $data->delete();

        return redirect('/si/wilayahtimur/mpks')->with('error', 'Maklumat Berjaya Dipadam');
    }}
