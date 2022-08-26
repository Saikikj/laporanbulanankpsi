<?php

namespace App\Http\Controllers\Kom;

use App\Http\Controllers\Controller;
use App\Models\KOM\Rmpnet;
use App\Models\KOM\Rmpnetfmbkdsi;
use App\Models\KOM\Rmpnetfmbppmportklang;
use App\Models\KOM\Rmpnetfobbatupahat;
use App\Models\KOM\Rmpnetfobkualalinggi;
use App\Models\KOM\Rmpnetfobkukup;
use App\Models\KOM\Rmpnetfobtelukramunia;
use App\Models\KOM\Rmpnetmpat;
use App\Models\KOM\RmpnetMwl1;
use App\Models\KOM\Rmpnetmwl2;
use Illuminate\Http\Request;

class RmpnetController extends Controller
{
    public function index()
    {
        $datampab = Rmpnet::all();
        $datamwl1 = RmpnetMwl1::all();
        $datafmbppmportklang = Rmpnetfmbppmportklang::all();
        $datafobkualalinggi= Rmpnetfobkualalinggi::all();
        $datafobbatupahat = Rmpnetfobbatupahat::all();
        $datafobkukup = Rmpnetfobkukup::all();
        $datafmbkdsi= Rmpnetfmbkdsi::all();
        $datafobtelukramunia= Rmpnetfobtelukramunia::all();
        $datampat= Rmpnetmpat::all();
        $datamwl2= Rmpnetmwl2::all();

        // $datas = RmpnetLaptop::all();
        return view('kom.rmpnet', compact('datampab','datamwl1','datafmbppmportklang',
        'datafobkualalinggi',
            'datafobbatupahat','datafobkukup','datafmbkdsi','datafobtelukramunia',
            'datampat','datamwl2'));
    }

    public function create(){
        return view('kom.rmpnet.addnew');
    }

    public function storeMpab(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new Rmpnet;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;


        $data->save();
        return redirect('/kom/rmpnet');
    }
    public function edit($id){
        // return 'asdasd';
        $data = Rmpnet::find($id);
        return view('kom.rmpnet.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Rmpnet::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroy($id)
    {
        $data = Rmpnet::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeMwl1(Request $request){
        // return $request ->tahun;
        //$data = new (namaModel)
        $data = new RmpnetMwl1;

        //$data->(nama column) = $request-> (column dalam table)
        // $data->markas = 'Markas Wilayah Laut 1';
        // $data->jenis = $request->peralatan_select;
        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;

        $data->save();
        return redirect('/kom/rmpnet');
    }
    public function editMwl1($id){
        // return 'asdasd';
        $data = RmpnetMwl1::find($id);
        return view('kom.rmpnet.editMwl1', compact('data'));
    }
    public function updateMwl1(Request $request, $id)
    {
        $data = RmpnetMwl1::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyMwl1($id)
    {
        $data = RmpnetMwl1::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }

    public function storeFmbppmportklang (Request $request){
        $data = new Rmpnetfmbppmportklang;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFmbppmportklang($id){
        // return 'asdasd';
        $data = Rmpnetfmbppmportklang::find($id);
        return view('kom.rmpnet.editFmbppmportklang', compact('data'));
    }
    public function updateFmbppmportklang(Request $request, $id)
    {
        $data = Rmpnetfmbppmportklang::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFmbppmportklang($id)
    {
        $data = Rmpnetfmbppmportklang::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFobkualalinggi(Request $request){
        $data = new Rmpnetfobkualalinggi;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFobkualalinggi($id){
        // return 'asdasd';
        $data = Rmpnetfobkualalinggi::find($id);
        return view('kom.rmpnet.editFobkualalinggi', compact('data'));
    }
    public function updateFobkualalinggi(Request $request, $id)
    {
        $data = Rmpnetfobkualalinggi::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFobkualalinggi($id)
    {
        $data = Rmpnetfobkualalinggi::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFobbatupahat (Request $request){
        $data = new Rmpnetfobbatupahat;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFobbatupahat($id){
        // return 'asdasd';
        $data = Rmpnetfobbatupahat::find($id);
        return view('kom.rmpnet.editFobbatupahat', compact('data'));
    }
    public function updateFobbatupahat(Request $request, $id)
    {
        $data = Rmpnetfobbatupahat::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFobbatupahat($id)
    {
        $data = Rmpnetfobbatupahat::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFobkukup (Request $request){
        $data = new Rmpnetfobkukup;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFobkukup($id){
        // return 'asdasd';
        $data = Rmpnetfobkukup::find($id);
        return view('kom.rmpnet.editFobkukup', compact('data'));
    }
    public function updateFobkukup(Request $request, $id)
    {
        $data = Rmpnetfobkukup::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFobkukup($id)
    {
        $data = Rmpnetfobkukup::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFmbkdsi (Request $request){
        $data = new Rmpnetfmbkdsi;
        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFmbkdsi($id){
        // return 'asdasd';
        $data = Rmpnetfmbkdsi::find($id);
        return view('kom.rmpnet.editFmbkdsi', compact('data'));
    }
    public function updateFmbkdsi(Request $request, $id)
    {
        $data = Rmpnetfmbkdsi::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFmbkdsi($id)
    {
        $data = Rmpnetfmbkdsi::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeFobtelukramunia (Request $request){
        $data = new Rmpnetfobtelukramunia;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editFobtelukramunia($id){
        // return 'asdasd';
        $data = Rmpnetfobtelukramunia::find($id);
        return view('kom.rmpnet.editFobtelukramunia', compact('data'));
    }
    public function updateFobtelukramunia(Request $request, $id)
    {
        $data = Rmpnetfobtelukramunia::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyFobtelukramunia($id)
    {
        $data = Rmpnetfobtelukramunia::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeMpat (Request $request){
        $data = new Rmpnetmpat;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('kom/rmpnet');
    }
    public function editMpat($id){
        // return 'asdasd';
        $data = Rmpnetmpat::find($id);
        return view('kom.rmpnet.editMpat', compact('data'));
    }
    public function updateMpat(Request $request, $id)
    {
        $data = Rmpnetmpat::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyMpat($id)
    {
        $data = Rmpnetmpat::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }


    public function storeMwl2 (Request $request){
        $data = new Rmpnetmwl2;

        $data->markasunit = $request->markasunit;
        $data->fitted= $request-> fitted;
        $data->mobile= $request->mobile;
        $data->portable= $request->portable;
        $data->status= $request->status;
        $data->catatan= $request->catatan;
        $data->save();
        return redirect('/kom/rmpnet');
    }
    public function editMwl2($id){
        // return 'asdasd';
        $data = Rmpnetmwl2::find($id);
        return view('kom.rmpnetMwl2', compact('data'));
    }
    public function updateMwl2(Request $request, $id)
    {
        $data = Rmpnetmwl2::find($id);
        $data->update($request->all());

        return redirect('/kom/rmpnet')->with('success', 'Maklumat Berjaya Dikemaskini');
    }

    public function destroyMwl2($id)
    {
        $data = Rmpnetmwl2::find($id);
        $data->delete();

        return redirect('/kom/rmpnet')->with('error', 'Maklumat Berjaya Dipadam');
    }



}
