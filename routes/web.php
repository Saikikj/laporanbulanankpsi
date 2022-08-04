<?php

use App\Http\Controllers\KompMejaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;
use App\Http\Controllers\PeralatanSIController;
use App\Http\Controllers\TestController;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('si/index', function () {
    return view('si/index');
});
Route::get('panduan', function () {
    return view('panduan');
});

Route::get('kom/index', function () {
    return view('kom/index');
});

Route::get('ppe/index', function () {
    return view('ppe/index');
});

Route::get('kom/centrixs', function () {
    return view('kom/centrixs');
});

Route::get('kom/trc5200', function () {
    return view('kom/trc5200');
});

Route::get('kom/c4itacx', function () {
    return view('kom/c4itacx');
});

Route::get('kom/nco', function () {
    return view('kom/nco');
});

Route::get('kom/emel', function () {
    return view('kom/emel');
});

Route::get('kom/dems', function () {
    return view('kom/dems');
});

Route::get('kom/sistemict', function () {
    return view('kom/sistemict');
});

Route::get('markas/centrixs', function () {
    return view('markas/centrixs');
});

Route::get('markas/c4itacxkapal', function () {
    return view('markas/c4itacxkapal');
});

Route::get('markas/radiokapal', function () {
    return view('markas/radiokapal');
});

Route::get('markas/dems', function () {
    return view('markas/dems');
});

Route::get('markas/centrixs/addnew', function () {
    return view('markas/centrixs/addnew');
});

Route::get('markas/fbb', function () {
    return view('markas/fbb');
});

Route::get('markas/fbb/simkad', function () {
    return view('markas/fbb/simkad');
});

Route::get('/markas/rmpnet/mpab', function () {
    return view('/markas/rmpnet/mpab');
});
Route::get('/markas/rmpnet/mpat', function () {
    return view('/markas/rmpnet/mpat');
});

Route::get('kom/fbb', function () {
    return view('kom/fbb');
});

Route::get('kom/xband', function () {
    return view('kom/xband');
});

Route::get('kom/peralatankom', function () {
    return view('kom/peralatankom');
});

Route::get('kom/dashboard', function () {
    return view('kom/dashboard');
});

Route::get('p4/index', function () {
    return view('p4/index');
});

Route::get('kom/rmpnet', function () {
    return view('kom/rmpnet');
});

Route::get('markas/centrixs/centrixsbarat', function () {
    return view('markas/centrixs/centrixsbarat');
});

Route::get('markas/centrixs/centrixsmpks', function () {
    return view('markas/centrixs/centrixsmpks');
});

Route::get('markas/rmpnet/fobtelukramunia', function () {
    return view('markas/rmpnet/fobtelukramunia');
});

Route::get('markas/rmpnet/fmbkdsi', function () {
    return view('markas/rmpnet/fmbkdsi');
});

Route::get('markas/rmpnet/fmbppmportklang', function () {
    return view('markas/rmpnet/fmbppmportklang');
});

Route::get('markas/rmpnet/fobbatupahat', function () {
    return view('markas/rmpnet/fobbatupahat');
});

Route::get('markas/rmpnet/fobkualalinggi', function () {
    return view('markas/rmpnet/fobkualalinggi');
});

Route::get('markas/rmpnet/fobkukup', function () {
    return view('markas/rmpnet/fobkukup');
});

Route::get('markas/rmpnet/mwl1', function () {
    return view('markas/rmpnet/mwl1');
});

Route::get('markas/rmpnet/mwl2', function () {
    return view('markas/rmpnet/mwl2');
});

Route::get('markas/rmpnet/mwl3', function () {
    return view('markas/rmpnet/mwl3');
});


//wkwkwkwk
    Route::get('kom/radio', function () {
        return view('kom/radio');
    });
    Route::get('kom/kat', function () {
        return view('kom/kat');
    });
    Route::get('kom/satcom', function () {
        return view('kom/satcom');
    });

    Route::get('kom/telefon', function () {
        return view('kom/telefon');
    });

    Route::get('kom/girn', function(){
        return view ('kom/girn');
    });

    Route::get('markas/girn', function(){
        return view ('markas/girn');
    });

    Route::get('markas/telefonibusawat', function(){
        return view ('markas/telefonibusawat');
    });

//-----------------------------SI HOME PAGE ---------------------------
    Route::get('si/wilayahbarat', function(){
        return view ('si/wilayahbarat');
    });

    Route::get('si/wilayahtimur', function(){
        return view ('si/wilayahtimur');
    });


    Route::get('si/markasunit/kompribamktl', function(){
        return view ('si/markasunit/kompribamktl');
    });

    Route::get('si/wilayahbarat/mpabarat', function(){
        return view ('si/wilayahbarat/mpabarat');
    });

    Route::get('si/wilayahbarat/mwl1', function(){
        return view ('si/wilayahbarat/mwl1');
    });

    Route::get('si/wilayahbarat/phn', function(){
        return view ('si/wilayahbarat/phn');
    });

    Route::get('si/wilayahbarat/mppl', function(){
        return view ('si/wilayahbarat/mppl');
    });

    Route::get('si/wilayahbarat/mkpl', function(){
        return view ('si/wilayahbarat/mkpl');
    });

    Route::get('si/wilayahbarat/mutldm', function(){
        return view ('si/wilayahbarat/mutldm');
    });

    Route::get('si/wilayahbarat/mklb', function(){
        return view ('si/wilayahbarat/mklb');
    });

    Route::get('si/wilayahbarat/mksppa', function(){
        return view ('si/wilayahbarat/mksppa');
    });

    Route::get('si/wilayahbarat/mkpaskal', function(){
        return view ('si/wilayahbarat/mkpaskal');
    });

    Route::get('si/wilayahbarat/mwl3', function(){
        return view ('si/wilayahbarat/mwl3');
    });

    Route::get('si/wilayahbarat/mksimp', function(){
        return view ('si/wilayahbarat/mksimp');
    });



//-------------------- WILAYAH TIMUR -----------------

    Route::get('si/wilayahtimur/mpatimur', function(){
        return view ('si/wilayahtimur/mpatimur');
    });

    Route::get('si/wilayahtimur/mwl2', function(){
        return view ('si/wilayahtimur/mwl2');
    });

    Route::get('si/wilayahtimur/mklt', function(){
        return view ('si/wilayahtimur/mklt');
    });

    Route::get('si/wilayahtimur/mpks', function(){
        return view ('si/wilayahtimur/mpks');
    });

    Route::get('si/wilayahtimur/mpkk', function(){
        return view ('si/wilayahtimur/mpkk');
    });

//--------------MKTL UNITS------------------
    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/pejabatptl', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/pejabatptl');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/pejabattimbptl', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/pejabattimbptl');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/undang-undang', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/undang-undang');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/bsm', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/bsm');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/tadbir', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/tadbir');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/protelakl', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/protelakl');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/kdsg', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/kdsg');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/risla', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/risla');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/bos', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/bos');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/rmnspc', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/rmnspc');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/mat', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/mat');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/jutra', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/jutra');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/pp', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/pp');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/kpsi', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/kpsi');
    });

    Route::get('si/wilayahbarat/peralatanmktl/mktlunits/bij', function(){
        return view ('si/wilayahbarat/peralatanmktl/mktlunits/bij');
    });

// -----------------MPA BARAT UNITS--------------------

Route::get('/si/wilayahbarat/mpabarat/kemaskiniperalatanmpabarat', function(){
    return view ('/si/wilayahbarat/mpabarat/kemaskiniperalatanmpabarat');
});

Route::get('/si/wilayahbarat/mpabarat/addnew', function(){
    return view ('/si/wilayahbarat/mpabarat/addnew');
});


Route::get('si/wilayahbarat/mpabarat/mpabarat', function(){
    return view ('si/wilayahbarat/mpabarat/mpabarat');
});

Route::get('si/wilayahbarat/mpabarat/pustakmar', function(){
    return view ('si/wilayahbarat/mpabarat/pustakmar');
});

Route::get('si/wilayahbarat/mpabarat/ppetldm', function(){
    return view ('si/wilayahbarat/mpabarat/ppetldm');
});

Route::get('si/wilayahbarat/mpabarat/sktldmlumut', function(){
    return view ('si/wilayahbarat/mpabarat/sktldmlumut');
});

Route::get('si/wilayahbarat/mpabarat/sktldmparit', function(){
    return view ('si/wilayahbarat/mpabarat/sktldmparit');
});

Route::get('si/wilayahbarat/mpabarat/sktldmsetiawan', function(){
    return view ('si/wilayahbarat/mpabarat/sktldmsetiawan');
});

Route::get('si/wilayahbarat/mpabarat/kptldm', function(){
    return view ('si/wilayahbarat/mpabarat/kptldm');
});


//-----------Markas Wilayah Laut 1 Units(MWL1)---------------------

Route::get('si/wilayahbarat/mwl1/kemaskiniperalatanmwl1', function(){
    return view ('si/wilayahbarat/mwl1/kemaskiniperalatanmwl1');
});

Route::get('si/wilayahbarat/mwl1/addnew', function(){
    return view ('si/wilayahbarat/mwl1/addnew');
});
Route::get('si/wilayahbarat/mwl1units/markas', function(){
    return view ('si/wilayahbarat/mwl1units/markas');
});

Route::get('si/wilayahbarat/mwl1units/dlw1', function(){
    return view ('si/wilayahbarat/mwl1units/dlw1');
});

Route::get('si/wilayahbarat/mwl1units/protelakuantan', function(){
    return view ('si/wilayahbarat/mwl1units/protelakuantan');
});

Route::get('si/wilayahbarat/mwl1units/pstlkuantan', function(){
    return view ('si/wilayahbarat/mwl1units/pstlkuantan');
});

Route::get('si/wilayahbarat/mwl1units/pstlsetiu', function(){
    return view ('si/wilayahbarat/mwl1units/pstlsetiu');
});

Route::get('si/wilayahbarat/mwl1units/kdsrikuantan', function(){
    return view ('si/wilayahbarat/mwl1units/kdsrikuantan');
});

// --------------------PUSAT HIDROGRAFI NASIONAL----------

Route::get('si/wilayahbarat/phnunits/kdsultanazizishah', function(){
    return view ('si/wilayahbarat/phnunits/kdsultanazizishah');
});
Route::get('si/wilayahbarat/phn/kemaskiniperalatanphn', function(){
    return view ('si/wilayahbarat/phn/kemaskiniperalatanphn');
});
Route::get('si/wilayahbarat/phn/addnew', function(){
    return view ('si/wilayahbarat/phn/addnew');
});

Route::get('si/wilayahbarat/phnunits/pusathidro', function(){
    return view ('si/wilayahbarat/phnunits/pusathidro');
});

Route::get('si/wilayahbarat/phnunits/kdsriklang', function(){
    return view ('si/wilayahbarat/phnunits/kdsriklang');
});

// ------------MPPL UNITS-----------------
Route::get('si/wilayahbarat/mppl/kemaskiniperalatanmppl', function(){
    return view ('si/wilayahbarat/mppl/kemaskiniperalatanmppl');
});

Route::get('si/wilayahbarat/mppl/addnew', function(){
    return view ('si/wilayahbarat/mppl/addnew');
});

Route::get('si/wilayahbarat/mpplunits/mppl', function(){
    return view ('si/wilayahbarat/mpplunits/mppl');
});

Route::get('si/wilayahbarat/mpplunits/kdsi1', function(){
    return view ('si/wilayahbarat/mpplunits/kdsi1');
});

Route::get('si/wilayahbarat/mpplunits/kdp', function(){
    return view ('si/wilayahbarat/mpplunits/kdp');
});

Route::get('si/wilayahbarat/mpplunits/pktldm', function(){
    return view ('si/wilayahbarat/mpplunits/pktldm');
});

Route::get('si/wilayahbarat/mpplunits/kdsultanismail', function(){
    return view ('si/wilayahbarat/mpplunits/kdsultanismail');
});

//-------------MARKAS PANGKALAN LUMUT UNITS--------------
Route::get('si/wilayahbarat/mkpl/kemaskiniperalatanmkpl', function(){
    return view ('si/wilayahbarat/mkpl/kemaskiniperalatanmkpl');
});

Route::get('si/wilayahbarat/mkpl/addnew', function(){
    return view ('si/wilayahbarat/mkpl/addnew');
});

Route::get('si/wilayahbarat/mkplunits/mkpl', function(){
    return view ('si/wilayahbarat/mkplunits/mkpl');
});

Route::get('si/wilayahbarat/mkplunits/kdsrimanjung', function(){
    return view ('si/wilayahbarat/mkplunits/kdsrimanjung');
});

Route::get('si/wilayahbarat/mkplunits/protelalumut', function(){
    return view ('si/wilayahbarat/mkplunits/protelalumut');
});

Route::get('si/wilayahbarat/mkplunits/kdmalaya', function(){
    return view ('si/wilayahbarat/mkplunits/kdmalaya');
});

Route::get('si/wilayahbarat/mkplunits/wismasamudera', function(){
    return view ('si/wilayahbarat/mkplunits/wismasamudera');
});

Route::get('si/wilayahbarat/mkplunits/smkhidllp', function(){
    return view ('si/wilayahbarat/mkplunits/smkhidllp');
});


// ---------------------MARKAS UDARA TLDM UNITS----------------
Route::get('si/wilayahbarat/mutldm/kemaskiniperalatanmutldm', function(){
    return view ('si/wilayahbarat/mutldm/kemaskiniperalatanmutldm');
});

Route::get('si/wilayahbarat/mutldm/addnew', function(){
    return view ('si/wilayahbarat/mutldm/addnew');
});

Route::get('si/wilayahbarat/mutldmunits/mutldm', function(){
    return view ('si/wilayahbarat/mutldmunits/mutldm');
});

Route::get('si/wilayahbarat/mutldmunits/kdrajawali', function(){
    return view ('si/wilayahbarat/mutldmunits/kdrajawali');
});

Route::get('si/wilayahbarat/mutldmunits/skn501', function(){
    return view ('si/wilayahbarat/mutldmunits/skn501');
});

Route::get('si/wilayahbarat/mutldmunits/skn502', function(){
    return view ('si/wilayahbarat/mutldmunits/skn502');
});

// ----------MARKAS LOGISTIK BARAT UNITS-------------
Route::get('si/wilayahbarat/mklb/kemaskiniperalatanmklb', function(){
    return view ('si/wilayahbarat/mklb/kemaskiniperalatanmklb');
});

Route::get('si/wilayahbarat/mklb/addnew', function(){
    return view ('si/wilayahbarat/mklb/addnew');
});

Route::get('si/wilayahbarat/mklbunits/mklb', function(){
    return view ('si/wilayahbarat/mklbunits/mklb');
});

Route::get('si/wilayahbarat/mklbunits/dbab', function(){
    return view ('si/wilayahbarat/mklbunits/dbab');
});

Route::get('si/wilayahbarat/mklbunits/dsab', function(){
    return view ('si/wilayahbarat/mklbunits/dsab');
});

Route::get('si/wilayahbarat/mklbunits/cpka', function(){
    return view ('si/wilayahbarat/mklbunits/cpka');
});

Route::get('si/wilayahbarat/mklbunits/dbb', function(){
    return view ('si/wilayahbarat/mklbunits/dbb');
});

Route::get('si/wilayahbarat/mklbunits/depotpelurubarat', function(){
    return view ('si/wilayahbarat/mklbunits/depotpelurubarat');
});

Route::get('si/wilayahbarat/mklbunits/depotkenderaanbarat', function(){
    return view ('si/wilayahbarat/mklbunits/depotkenderaanbarat');
});

Route::get('si/wilayahbarat/mklbunits/unitpengawasansenggaraantldm', function(){
    return view ('si/wilayahbarat/mklbunits/unitpengawasansenggaraantldm');
});

Route::get('si/wilayahbarat/mklbunits/pplcstldm', function(){
    return view ('si/wilayahbarat/mklbunits/pplcstldm');
});

// -----------Markas PASKAL UNITS--------------
Route::get('si/wilayahbarat/mkpaskal/kemaskiniperalatanmkpaskal', function(){
    return view ('si/wilayahbarat/mkpaskal/kemaskiniperalatanmkpaskal');
});

Route::get('si/wilayahbarat/mkpaskal/addnew', function(){
    return view ('si/wilayahbarat/mkpaskal/addnew');
});

Route::get('si/wilayahbarat/mkpaskalunits/markas', function(){
    return view ('si/wilayahbarat/mkpaskalunits/markas');
});

Route::get('si/wilayahbarat/mkpaskalunits/kdpanglimahitam', function(){
    return view ('si/wilayahbarat/mkpaskalunits/kdpanglimahitam');
});

Route::get('si/wilayahbarat/mkpaskalunits/kdpanglimagarang', function(){
    return view ('si/wilayahbarat/mkpaskalunits/kdpanglimagarang');
});

// -----------------MARKAS WILAYAH LAUT 3 UNITS------------------
Route::get('si/wilayahbarat/mwl3/addnew', function(){
    return view ('si/wilayahbarat/mwl3/addnew');
});

Route::get('si/wilayahbarat/mwl3/kemaskiniperalatanmwl3', function(){
    return view ('si/wilayahbarat/mwl3/kemaskiniperalatanmwl3');
});

Route::get('si/wilayahbarat/mwl3units/depotlogistikwilayah3', function(){
    return view ('si/wilayahbarat/mwl3units/depotlogistikwilayah3');
});

Route::get('si/wilayahbarat/mwl3units/kdsultanbadlishah', function(){
    return view ('si/wilayahbarat/mwl3units/kdsultanbadlishah');
});

Route::get('si/wilayahbarat/mwl3units/markaswilayahlaut3', function(){
    return view ('si/wilayahbarat/mwl3units/markaswilayahlaut3');
});

Route::get('si/wilayahbarat/mwl3units/protelalangkawi', function(){
    return view ('si/wilayahbarat/mwl3units/protelalangkawi');
});

Route::get('si/wilayahbarat/mwl3units/kdsripinang', function(){
    return view ('si/wilayahbarat/mwl3units/kdsripinang');
});

Route::get('si/wilayahbarat/mwl3units/pwtlpulaupinang', function(){
    return view ('si/wilayahbarat/mwl3units/pwtlpulaupinang');
});

Route::get('si/wilayahbarat/mwl3units/ubutldm', function(){
    return view ('si/wilayahbarat/mwl3units/ubutldm');
});

//----------------MARKAS SIMPANAN UNITS----------------
Route::get('si/wilayahbarat/mksimp/kemaskiniperalatanmksimp', function(){
    return view ('si/wilayahbarat/mksimp/kemaskiniperalatanmksimp');
});

Route::get('si/wilayahbarat/mksimp/addnew', function(){
    return view ('si/wilayahbarat/mksimp/addnew');
});

Route::get('si/wilayahbarat/mksimpunits/mksimpanan', function(){
    return view ('si/wilayahbarat/mksimpunits/mksimpanan');
});

Route::get('si/wilayahbarat/mksimpunits/kdsrimedini', function(){
    return view ('si/wilayahbarat/mksimpunits/kdsrimedini');
});

// -----------MPA TIMUR UNITS----------------
Route::get('si/wilayahtimur/mpatimur/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/mpatimur/kemaskiniperalatan');
});

Route::get('si/wilayahtimur/mpatimur/addnew', function(){
    return view ('si/wilayahtimur/mpatimur/addnew');
});

Route::get('si/wilayahtimur/mpatimurunits/mpatimur', function(){
    return view ('si/wilayahtimur/mpatimurunits/mpatimur');
});

Route::get('si/wilayahtimur/mpatimurunits/skn601', function(){
    return view ('si/wilayahtimur/mpatimurunits/skn601');
});

Route::get('si/wilayahtimur/mpatimurunits/stnlima', function(){
    return view ('si/wilayahtimur/mpatimurunits/stnlima');
});

Route::get('si/wilayahtimur/mpatimurunits/stnuniform', function(){
    return view ('si/wilayahtimur/mpatimurunits/stnuniform');
});

Route::get('si/wilayahtimur/mpatimurunits/stnmike', function(){
    return view ('si/wilayahtimur/mpatimurunits/stnmike');
});

Route::get('si/wilayahtimur/mpatimurunits/stnsierra', function(){
    return view ('si/wilayahtimur/mpatimurunits/stnsierra');
});

Route::get('si/wilayahtimur/mpatimurunits/stnpapa', function(){
    return view ('si/wilayahtimur/mpatimurunits/stnpapa');
});

Route::get('si/wilayahtimur/mpatimurunits/pwtlkuching', function(){
    return view ('si/wilayahtimur/mpatimurunits/pwtlkuching');
});


//---------- MARKAS WILAYAH LAUT 2 =--------------
Route::get('si/wilayahtimur/mwl2/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/mwl2/kemaskiniperalatan');
});
Route::get('si/wilayahtimur/mwl2/addnew', function(){
    return view ('si/wilayahtimur/mwl2/addnew');
});
Route::get('si/wilayahtimur/mwl2units/mwl2', function(){
    return view ('si/wilayahtimur/mwl2units/mwl2');
});

Route::get('si/wilayahtimur/mwl2units/depotlogistikwilayah2', function(){
    return view ('si/wilayahtimur/mwl2units/depotlogistikwilayah2');
});

Route::get('si/wilayahtimur/mwl2units/kdsrisandakan', function(){
    return view ('si/wilayahtimur/mwl2units/kdsrisandakan');
});

Route::get('si/wilayahtimur/mwl2units/protelasandakan', function(){
    return view ('si/wilayahtimur/mwl2units/protelasandakan');
});

Route::get('si/wilayahtimur/mwl2units/pstlsandakan', function(){
    return view ('si/wilayahtimur/mwl2units/pstlsandakan');
});

Route::get('si/wilayahtimur/mwl2units/kdsrisemporna', function(){
    return view ('si/wilayahtimur/mwl2units/kdsrisemporna');
});

Route::get('si/wilayahtimur/mwl2units/kdsritawau', function(){
    return view ('si/wilayahtimur/mwl2units/kdsritawau');
});

Route::get('si/wilayahtimur/mwl2units/pstltawau', function(){
    return view ('si/wilayahtimur/mwl2units/pstltawau');
});

Route::get('si/wilayahtimur/mwl2units/pstllabuan', function(){
    return view ('si/wilayahtimur/mwl2units/pstllabuan');
});


//------------MARKAS LOGISTIK TIMUR-------------
Route::get('si/wilayahtimur/mklt/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/mklt/kemaskiniperalatan');
});
Route::get('si/wilayahtimur/mklt/addnew', function(){
    return view ('si/wilayahtimur/mklt/addnew');
});
Route::get('si/wilayahtimur/mkltunits/markas', function(){
    return view ('si/wilayahtimur/mkltunits/markas');
});

Route::get('si/wilayahtimur/mkltunits/upstimur', function(){
    return view ('si/wilayahtimur/mkltunits/upstimur');
});

Route::get('si/wilayahtimur/mkltunits/dbat', function(){
    return view ('si/wilayahtimur/mkltunits/dbat');
});

Route::get('si/wilayahtimur/mkltunits/dsat', function(){
    return view ('si/wilayahtimur/mkltunits/dsat');
});

Route::get('si/wilayahtimur/mkltunits/dpbltimur', function(){
    return view ('si/wilayahtimur/mkltunits/dpbltimur');
});

Route::get('si/wilayahtimur/mkltunits/depotbantuantimur', function(){
    return view ('si/wilayahtimur/mkltunits/depotbantuantimur');
});



//----------------------- MARKAS PEPERANGAN KAPAL SELAM UNITS------------------------
Route::get('si/wilayahtimur/mpks/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/mpks/kemaskiniperalatan');
});
Route::get('si/wilayahtimur/mpks/addnew', function(){
    return view ('si/wilayahtimur/mpks/addnew');
});
Route::get('si/wilayahtimur/mpksunits/mpks', function(){
    return view ('si/wilayahtimur/mpksunits/mpks');
});

Route::get('si/wilayahtimur/mpksunits/plks', function(){
    return view ('si/wilayahtimur/mpksunits/plks');
});

Route::get('si/wilayahtimur/mpksunits/kdtar', function(){
    return view ('si/wilayahtimur/mpksunits/kdtar');
});

Route::get('si/wilayahtimur/mpksunits/kdtunabdulrazak', function(){
    return view ('si/wilayahtimur/mpksunits/kdtunabdulrazak');
});

// ----------------MARKAS PANGKALAN KOTA KINABALU UNITS--------------
Route::get('si/wilayahtimur/mpkk/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/mpkk/kemaskiniperalatan');
});

Route::get('si/wilayahtimur/mpkk/addnew', function(){
    return view ('si/wilayahtimur/mpkk/addnew');
});

Route::get('si/wilayahtimur/mpkkunits/mpkk', function(){
    return view ('si/wilayahtimur/mpkkunits/mpkk');
});

Route::get('si/wilayahtimur/mpkkunits/kdsritawau', function(){
    return view ('si/wilayahtimur/mpkkunits/kdsritawau');
});

Route::get('si/wilayahtimur/mpkkunits/pstltawau', function(){
    return view ('si/wilayahtimur/mpkkunits/pstltawau');
});

Route::get('si/wilayahtimur/mpkkunits/upstldmtimur', function(){
    return view ('si/wilayahtimur/mpkkunits/upstldmtimur');
});

Route::get('si/kemaskiniperalatan', function(){
    return view ('si/kemaskiniperalatan');
});

Route::get('si/addnew', function(){
    return view ('si/addnew');
});



Route::get('si/wilayahtimur/armadapohtimur', function(){
    return view ('si/wilayahtimur/armadapohtimur');
});

Route::get('si/wilayahtimur/armadapohtimurunits/kemaskiniperalatan', function(){
    return view ('si/wilayahtimur/armadapohtimurunits/kemaskiniperalatan');
});

Route::get('si/wilayahtimur/armadapohtimurunits/addnew', function(){
    return view ('si/wilayahtimur/armadapohtimurunits/addnew');
});

Route::get('si/wilayahbarat/armadapohbarat', function(){
    return view ('si/wilayahbarat/armadapohbarat');
});

Route::get('si/armadapoh', function(){
    return view ('si/armadapoh');
});
Route::get('si/wilayahbarat/armadapohbaratunits/kemaskiniperalatan', function(){
    return view ('si/wilayahbarat/armadapohbarat/kemaskiniperalatan');
});

Route::get('si/wilayahbarat/armadapohbaratunits/addnew', function(){
    return view ('si/wilayahbarat/armadapohbaratunits/addnew');
});








// ---------------MKTL PERALATAN-------------------

Route::get('si/wilayahbarat/mktl',  [PeralatanSIController::class, 'index']);
Route::get('/si/wilayahbarat/mktl/addnew',  [PeralatanSIController::class, 'create']);
Route::post('/si/wilayahbarat/mktl',  [PeralatanSIController::class, 'store']);

Route::get('si/wilayahbarat/mktl/kemaskiniperalatanmktl', function(){
    return view ('si/wilayahbarat/mktl/kemaskiniperalatanmktl');
});
// Route::get('si/wilayahbarat/peralatanmktl/mktlunits/jenisperalatan/kompmeja', function(){
//     return view ('si/wilayahbarat/peralatanmktl/mktlunits/jenisperalatan/kompmeja');
// });

Route::get('si/wilayahbarat/peralatanmktl/mktlunits/jenisperalatan/kompmeja', [KompMejaController::class, 'index']);



Route::get('/si/wilayahbarat/mksppa/kemaskiniperalatanmksppa', function(){
    return view ('/si/wilayahbarat/mksppa/kemaskiniperalatanmksppa');
});
Route::get('/si/wilayahbarat/mksppa/addnew', function(){
    return view ('/si/wilayahbarat/mksppa/addnew');
});

//------------------PeralatanP4----------------------
Route::get('/p4/mawilla1', function(){
    return view ('/p4/mawilla1');
});

Route::get('/p4/mawilla1/kemaskiniperalatan', function(){
    return view ('/p4/mawilla1/kemaskiniperalatan');
});

Route::get('/p4/mawilla1/addnew', function(){
    return view ('/p4/mawilla1/addnew');
});

Route::get('/p4/mawilla2', function(){
    return view ('/p4/mawilla2');
});

Route::get('/p4/mawilla2/kemaskiniperalatan', function(){
    return view ('/p4/mawilla2/kemaskiniperalatan');
});

Route::get('/p4/mawilla2/addnew', function(){
    return view ('/p4/mawilla2/addnew');
});

Route::get('/p4/mawilla3', function(){
    return view ('/p4/mawilla3');
});

Route::get('/p4/mawilla3/kemaskiniperalatan', function(){
    return view ('/p4/mawilla3/kemaskiniperalatan');
});

Route::get('/p4/mawilla3/addnew', function(){
    return view ('/p4/mawilla3/addnew');
});

Route::get('/p4/mksimpanan', function(){
    return view ('/p4/mksimpanan');
});

Route::get('/p4/mksimpanan/kemaskiniperalatan', function(){
    return view ('/p4/mksimpanan/kemaskiniperalatan');
});

Route::get('/p4/mksimpanan/addnew', function(){
    return view ('/p4/mksimpanan/addnew');
});

Route::get('/p4/mkpl', function(){
    return view ('/p4/mkpl');
});

Route::get('/p4/mkpl/kemaskiniperalatan', function(){
    return view ('/p4/mkpl/kemaskiniperalatan');
});

Route::get('/p4/mkpl/addnew', function(){
    return view ('/p4/mkpl/addnew');
});

Route::get('/p4/mktl', function(){
    return view ('/p4/mktl');
});

Route::get('/p4/mktl/kemaskiniperalatan', function(){
    return view ('/p4/mktl/kemaskiniperalatan');
});

Route::get('/p4/mktl/addnew', function(){
    return view ('/p4/mktl/addnew');
});

Route::get('/p4/mklb', function(){
    return view ('/p4/mklb');
});

Route::get('/p4/mklb/kemaskiniperalatan', function(){
    return view ('/p4/mklb/kemaskiniperalatan');
});

Route::get('/p4/mklb/addnew', function(){
    return view ('/p4/mklb/addnew');
});

Route::get('/p4/mpab', function(){
    return view ('/p4/mpab');
});

Route::get('/p4/mpab/kemaskiniperalatan', function(){
    return view ('/p4/mpab/kemaskiniperalatan');
});

Route::get('/p4/mpab/addnew', function(){
    return view ('/p4/mpab/addnew');
});

Route::get('/p4/mpat', function(){
    return view ('/p4/mpat');
});

Route::get('/p4/mpat/kemaskiniperalatan', function(){
    return view ('/p4/mpat/kemaskiniperalatan');
});

Route::get('/p4/mpat/addnew', function(){
    return view ('/p4/mpat/addnew');
});

Route::get('/p4/mpks', function(){
    return view ('/p4/mpks');
});

Route::get('/p4/mpks/kemaskiniperalatan', function(){
    return view ('/p4/mpks/kemaskiniperalatan');
});

Route::get('/p4/mpks/addnew', function(){
    return view ('/p4/mpks/addnew');
});

Route::get('/p4/phn', function(){
    return view ('/p4/phn');
});

Route::get('/p4/phn/kemaskiniperalatan', function(){
    return view ('/p4/phn/kemaskiniperalatan');
});

Route::get('/p4/phn/addnew', function(){
    return view ('/p4/phn/addnew');
});

// ----------------------PPE---------------------------

Route::get('/ppe/ppetldm', function(){
    return view ('/ppe/ppetldm');
});

Route::get('/ppe/ppetldm/addnew', function(){
    return view ('/ppe/ppetldm/addnew');
});

Route::get('/ppe/kdbadik', function(){
    return view ('/ppe/kdbadik');
});

Route::get('/ppe/kdbadik/addnew', function(){
    return view ('/ppe/kdbadik/addnew');
});

Route::get('/ppe/kdjebat', function(){
    return view ('/ppe/kdjebat');
});

Route::get('/ppe/kdjebat/addnew', function(){
    return view ('/ppe/kdjebat/addnew');
});

Route::get('/ppe/kdkasturi', function(){
    return view ('/ppe/kdkasturi');
});

Route::get('/ppe/kdkasturi/addnew', function(){
    return view ('/ppe/kdkasturi/addnew');
});

Route::get('/ppe/kdkedah', function(){
    return view ('/ppe/kdkedah');
});

Route::get('/ppe/kdkedah/addnew', function(){
    return view ('/ppe/kdkedah/addnew');
});

Route::get('/ppe/kdkelantan', function(){
    return view ('/ppe/kdkelantan');
});

Route::get('/ppe/kdkelantan/addnew', function(){
    return view ('/ppe/kdkelantan/addnew');
});

Route::get('/ppe/kdkeris', function(){
    return view ('/ppe/kdkeris');
});

Route::get('/ppe/kdkeris/addnew', function(){
    return view ('/ppe/kdkeris/addnew');
});

Route::get('/ppe/kdlekir', function(){
    return view ('/ppe/kdlekir');
});

Route::get('/ppe/kdlekir/addnew', function(){
    return view ('/ppe/kdlekir/addnew');
});

Route::get('/ppe/kdlekiu', function(){
    return view ('/ppe/kdlekiu');
});

Route::get('/ppe/kdlekiu/addnew', function(){
    return view ('/ppe/kdlekiu/addnew');
});

Route::get('/ppe/kdmahawangsa', function(){
    return view ('/ppe/kdmahawangsa');
});

Route::get('/ppe/kdmahawangsa/addnew', function(){
    return view ('/ppe/kdmahawangsa/addnew');
});

Route::get('/ppe/kdpahang', function(){
    return view ('/ppe/kdpahang');
});

Route::get('/ppe/kdpahang/addnew', function(){
    return view ('/ppe/kdpahang/addnew');
});

Route::get('/ppe/kdperak', function(){
    return view ('/ppe/kdperak');
});

Route::get('/ppe/kdperak/addnew', function(){
    return view ('/ppe/kdperak/addnew');
});

Route::get('/ppe/kdrencong', function(){
    return view ('/ppe/kdrencong');
});

Route::get('/ppe/kdrencong/addnew', function(){
    return view ('/ppe/kdrencong/addnew');
});

Route::get('/ppe/kdselangor', function(){
    return view ('/ppe/kdselangor');
});

Route::get('/ppe/kdselangor/addnew', function(){
    return view ('/ppe/kdselangor/addnew');
});

Route::get('/ppe/kdsriinderasakti', function(){
    return view ('/ppe/kdsriinderasakti');
});

Route::get('/ppe/kdsriinderasakti/addnew', function(){
    return view ('/ppe/kdsriinderasakti/addnew');
});

Route::get('/ppe/kdsundang', function(){
    return view ('/ppe/kdsundang');
});

Route::get('/ppe/kdsundang/addnew', function(){
    return view ('/ppe/kdsundang/addnew');
});

Route::get('/ppe/kdtar', function(){
    return view ('/ppe/kdtar');
});

Route::get('/ppe/kdtar/addnew', function(){
    return view ('/ppe/kdtar/addnew');
});

Route::get('/ppe/kdterengganu', function(){
    return view ('/ppe/kdterengganu');
});

Route::get('/ppe/kdterengganu/addnew', function(){
    return view ('/ppe/kdterengganu/addnew');
});

Route::get('/ppe/kdtrz', function(){
    return view ('/ppe/kdtrz');
});

Route::get('/ppe/kdtrz/addnew', function(){
    return view ('/ppe/kdtrz/addnew');
});

Route::get('/ppe/skuadron501', function(){
    return view ('/ppe/skuadron501');
});

Route::get('/ppe/skuadron501/addnew', function(){
    return view ('/ppe/skuadron501/addnew');
});

Route::get('/ppe/skuadron502', function(){
    return view ('/ppe/skuadron502');
});

Route::get('/ppe/skuadron502/addnew', function(){
    return view ('/ppe/skuadron502/addnew');
});
//------------------IMPORT & EXPORT ROUTE--------------

Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');



Route::get('test', [TestController::class, 'index']);
Route::resource('updatesis', UpdateSiController::class);


// Route::get('si/wilayahtimur/', function(){
//     return view ('si/wilayahtimur/');
// });


// Route::get('si/mwl1', function(){
//     return view ('si/mwl1');
// });



// Route::get('', function(){
//     return view ('');
// });










// Route::get('si/markasunit')
// Route::resource('markas/centrixs', 'CentrixsController');
