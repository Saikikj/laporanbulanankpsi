<?php

namespace App\Http\Controllers;

use App\Models\PeralatanSImpkk;
use Illuminate\Http\Request;

class PeralatanSImpkkController extends Controller
{
    public function index()
    {
        $datas = PeralatanSImpkk::all();
        return view('si.wilayahtimur.mpkk', compact('datas'));
    }

    public function create(){
        return view('si.wilayahtimur.mpkk.addnew');
    }

    public function store(Request $request){
        //$data = new (namaModel)
        $data = new PeralatanSImpkk;

        //$data->(nama column) = $request-> (column dalam table)
        $data->markas = 'Markas Pangkalan Kota Kinabalu';
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
        return redirect('/si/wilayahtimur/mpkk');
    }
    public function edit($id){
        // return 'asdasd';
        $data = PeralatanSImpkk::find($id);
        return view('si.wilayahtimur.mpkk.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = PeralatanSImpkk::find($id);
        $data->update($request->all());

        return redirect('si/wilayahtimur/mpkk')->with('success', 'Maklumat Berjaya Dikemaskini');
    }
    public function destroy($id)
    {
        $data = PeralatanSImpkk::find($id);
        $data->delete();

        return redirect('/si/wilayahtimur/mpkk')->with('error', 'Maklumat Berjaya Dipadam');
    }}
