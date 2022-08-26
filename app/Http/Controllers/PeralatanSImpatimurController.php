<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImpatimur;
use Illuminate\Http\Request;

class PeralatanSImpatimurController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImpatimur::all();
        return view('si.wilayahtimur.mpatimur', compact('datas'));
    }

    public function create(){
        return view('si.wilayahtimur.mpatimur.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImpatimur;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pemerintahan Armada Timur';
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
        return redirect('/si/wilayahtimur/mpatimur');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImpatimur::find($id);
        return view('si.wilayahtimur.mpatimur.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImpatimur::find($id);
        $data->update($request->all());

        return redirect('si/wilayahtimur/mpatimur')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImpatimur::find($id);
        $data->delete();

        return redirect('/si/wilayahtimur/mpatimur')->with('error', 'Maklumat Berjaya Dipadam');
    }}
