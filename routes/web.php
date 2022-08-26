<?php

use App\Http\Controllers\Kom\C4itacxController;
use App\Http\Controllers\Kom\CentrixsController;
use App\Http\Controllers\Kom\DemsController;
use App\Http\Controllers\Kom\EmelController;
use App\Http\Controllers\Kom\FBBController;
use App\Http\Controllers\Kom\GirnController;
use App\Http\Controllers\Kom\KatController;
use App\Http\Controllers\Kom\NcoController;
use App\Http\Controllers\Kom\RadioController;
use App\Http\Controllers\Kom\RmpnetController;
use App\Http\Controllers\Kom\SatcomController;
use App\Http\Controllers\Kom\SistemICTController;
use App\Http\Controllers\Kom\TelefonController;
use App\Http\Controllers\Kom\Trc5200Controller;
use App\Http\Controllers\Kom\XbandController;
use App\Http\Controllers\KompMejaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;
use App\Http\Controllers\PeralatanP4\Mawilla1Controller;
use App\Http\Controllers\PeralatanP4\Mawilla3Controller;
use App\Http\Controllers\PeralatanP4\MarkasSimpananController;
use App\Http\Controllers\PeralatanP4\Mawilla2Controller;
use App\Http\Controllers\PeralatanP4\MklbController;
use App\Http\Controllers\PeralatanP4\MkplController;
use App\Http\Controllers\PeralatanP4\MktlController;
use App\Http\Controllers\PeralatanP4\MpabController;
use App\Http\Controllers\PeralatanP4\MpatController;
use App\Http\Controllers\PeralatanP4\MpksController;
use App\Http\Controllers\PeralatanP4\PhnController;
use App\Http\Controllers\PeralatanSIController;
use App\Http\Controllers\PeralatanSImpabController;
use App\Http\Controllers\PeralatanSImwl1Controller;
use App\Http\Controllers\PeralatanSIphnController;
use App\Http\Controllers\PeralatanSImpplController;
use App\Http\Controllers\PeralatanSImklbController;
use App\Http\Controllers\PeralatanSImkpaskalController;
use App\Http\Controllers\PeralatanSImkplController;
use App\Http\Controllers\PeralatanSImksimpController;
use App\Http\Controllers\PeralatanSImksppaController;
use App\Http\Controllers\PeralatanSImutldmController;
use App\Http\Controllers\PeralatanSImwl3Controller;

use App\Http\Controllers\PeralatanSImkltController;
use App\Http\Controllers\PeralatanSImpatimurController;
use App\Http\Controllers\PeralatanSImpkkController;
use App\Http\Controllers\PeralatanSImpksController;
use App\Http\Controllers\PeralatanSImwl2Controller;
use App\Http\Controllers\PeralatanSIarmadapohController;
use App\Http\Controllers\PPE\KdBadikController;
use App\Http\Controllers\PPE\KdJebatController;
use App\Http\Controllers\PPE\KdKasturiController;
use App\Http\Controllers\PPE\KdKedahController;
use App\Http\Controllers\PPE\KdKelantanController;
use App\Http\Controllers\PPE\KdKerisController;
use App\Http\Controllers\PPE\KdLekirController;
use App\Http\Controllers\PPE\KdLekiuController;
use App\Http\Controllers\PPE\KdMahawangsaController;
use App\Http\Controllers\PPE\KdPahangController;
use App\Http\Controllers\PPE\KdPerakController;
use App\Http\Controllers\PPE\KdRencongController;
use App\Http\Controllers\PPE\KdSelangorController;
use App\Http\Controllers\PPE\KdSriInderasaktiController;
use App\Http\Controllers\PPE\kdSundangController;
use App\Http\Controllers\PPE\KdTarController;
use App\Http\Controllers\PPE\KdTerengganuController;
use App\Http\Controllers\PPE\KdTrzController;
use App\Http\Controllers\PPE\PpeTLDMController;
use App\Http\Controllers\PPE\Skuadron501Controller;
use App\Http\Controllers\PPE\Skuadron502Controller;
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
Route::get('si/wilayahbarat', function () {
    return view('si/wilayahbarat');
});
Route::get('si/wilayahtimur', function () {
    return view('si/wilayahtimur');
});
Route::get('si/index', function () {
    return view('si/index');
});
Route::get('p4/index', function () {
    return view('p4/index');
});
Route::get('ppe/index', function () {
    return view('ppe/index');
});
Route::get('kom/index', function () {
    return view('kom/index');
});
Route::get('panduan', function () {
    return view('panduan');
});

//peralatansi
//mktl
Route::get('/si/wilayahbarat/mktl/edit', function () {
    return view('/si/wilayahbarat/mktl/edit');
});
Route::get('si/wilayahbarat/mktl',  [PeralatanSIController::class, 'index']);
Route::get('/si/wilayahbarat/mktl/addnew',  [PeralatanSIController::class, 'create']);
Route::post('/si/wilayahbarat/mktl',  [PeralatanSIController::class, 'store']);
Route::get('si/wilayahbarat/mktl/{id}',  [PeralatanSIController::class, 'edit']);
Route::post('/si/wilayahbarat/mktl/update/{id}', [PeralatanSIController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mktl/delete/{id}',  [PeralatanSIController::class, 'destroy'])->name('delete');
// Route::delete('/si/wilayahbarat/mktl/{id}',  [PeralatanSIController::class, 'destroy']);


//MPAB
Route::get('si/wilayahbarat/mpabarat', [PeralatanSImpabController::class, 'index']);
Route::get('/si/wilayahbarat/mpabarat/addnew', [PeralatanSImpabController::class, 'create']);
Route::post('/si/wilayahbarat/mpabarat', [PeralatanSImpabController::class, 'store']);
Route::get('si/wilayahbarat/mpabarat/{id}',  [PeralatanSImpabController::class, 'edit']);
Route::post('si/wilayahbarat/mpabarat/update/{id}',  [PeralatanSImpabController::class, 'update']);
Route::get('si/wilayahbarat/mpabarat/delete/{id}',  [PeralatanSImpabController::class, 'destroy']);

//mwl1
Route::get('si/wilayahbarat/mwl1', [PeralatanSImwl1Controller::class, 'index']);
Route::get('/si/wilayahbarat/mwl1/addnew', [PeralatanSImwl1Controller::class, 'create']);
Route::post('/si/wilayahbarat/mwl1', [PeralatanSImwl1Controller::class, 'store']);
Route::get('si/wilayahbarat/mwl1/{id}',  [PeralatanSImwl1Controller::class, 'edit']);
Route::post('/si/wilayahbarat/mwl1/update/{id}', [PeralatanSImwl1Controller::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mwl1/delete/{id}',  [PeralatanSImwl1Controller::class, 'destroy'])->name('delete');

//phn
Route::get('si/wilayahbarat/phn', [PeralatanSIphnController::class, 'index']);
Route::get('/si/wilayahbarat/phn/addnew', [PeralatanSIphnController::class, 'create']);
Route::post('/si/wilayahbarat/phn', [PeralatanSIphnController::class, 'store']);
Route::get('si/wilayahbarat/phn/{id}',  [PeralatanSIphnController::class, 'edit']);
Route::post('/si/wilayahbarat/phn/update/{id}', [PeralatanSIphnController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/phn/delete/{id}',  [PeralatanSIphnController::class, 'destroy'])->name('delete');

//mklb
Route::get('si/wilayahbarat/mklb', [PeralatanSImklbController::class, 'index']);
Route::get('/si/wilayahbarat/mklb/addnew', [PeralatanSImklbController::class, 'create']);
Route::post('/si/wilayahbarat/mklb', [PeralatanSImklbController::class, 'store']);
Route::get('si/wilayahbarat/mklb/{id}',  [PeralatanSImklbController::class, 'edit']);
Route::post('/si/wilayahbarat/mklb/update/{id}', [PeralatanSImklbController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mklb/delete/{id}',  [PeralatanSImklbController::class, 'destroy'])->name('delete');

//mkpaskal
Route::get('si/wilayahbarat/mkpaskal', [PeralatanSImkpaskalController::class, 'index']);
Route::get('/si/wilayahbarat/mkpaskal/addnew', [PeralatanSImkpaskalController::class, 'create']);
Route::post('/si/wilayahbarat/mkpaskal', [PeralatanSImkpaskalController::class, 'store']);
Route::get('si/wilayahbarat/mkpaskal/{id}',  [PeralatanSImkpaskalController::class, 'edit']);
Route::post('/si/wilayahbarat/mkpaskal/update/{id}', [PeralatanSImkpaskalController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mkpaskal/delete/{id}',  [PeralatanSImkpaskalController::class, 'destroy'])->name('delete');

//mkpl
Route::get('si/wilayahbarat/mkpl', [PeralatanSImkplController::class, 'index']);
Route::get('/si/wilayahbarat/mkpl/addnew', [PeralatanSImkplController::class, 'create']);
Route::post('/si/wilayahbarat/mkpl', [PeralatanSImkplController::class, 'store']);
Route::get('si/wilayahbarat/mkpl/{id}',  [PeralatanSImkplController::class, 'edit']);
Route::post('/si/wilayahbarat/mkpl/update/{id}', [PeralatanSImkplController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mkpl/delete/{id}',  [PeralatanSImkplController::class, 'destroy'])->name('delete');

//mksimp
Route::get('si/wilayahbarat/mksimp', [PeralatanSImksimpController::class, 'index']);
Route::get('/si/wilayahbarat/mksimp/addnew', [PeralatanSImksimpController::class, 'create']);
Route::post('/si/wilayahbarat/mksimp', [PeralatanSImksimpController::class, 'store']);
Route::get('si/wilayahbarat/mksimp/{id}',  [PeralatanSImksimpController::class, 'edit']);
Route::post('/si/wilayahbarat/mksimp/update/{id}', [PeralatanSImksimpController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mksimp/delete/{id}',  [PeralatanSImksimpController::class, 'destroy'])->name('delete');

//mksppa
Route::get('si/wilayahbarat/mksppa', [PeralatanSImksppaController::class, 'index']);
Route::get('/si/wilayahbarat/mksppa/addnew', [PeralatanSImksppaController::class, 'create']);
Route::post('/si/wilayahbarat/mksppa', [PeralatanSImksppaController::class, 'store']);
Route::get('si/wilayahbarat/mksppa/{id}',  [PeralatanSImksppaController::class, 'edit']);
Route::post('/si/wilayahbarat/mksppa/update/{id}', [PeralatanSImksppaController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mksppa/delete/{id}',  [PeralatanSImksppaController::class, 'destroy'])->name('delete');

//mppl
Route::get('si/wilayahbarat/mppl', [PeralatanSImpplController::class, 'index']);
Route::get('/si/wilayahbarat/mppl/addnew', [PeralatanSImpplController::class, 'create']);
Route::post('/si/wilayahbarat/mppl', [PeralatanSImpplController::class, 'store']);
Route::get('si/wilayahbarat/mppl/{id}',  [PeralatanSImpplController::class, 'edit']);
Route::post('/si/wilayahbarat/mppl/update/{id}', [PeralatanSImpplController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mppl/delete/{id}',  [PeralatanSImpplController::class, 'destroy'])->name('delete');

//mutldm
Route::get('si/wilayahbarat/mutldm', [PeralatanSImutldmController::class, 'index']);
Route::get('/si/wilayahbarat/mutldm/addnew', [PeralatanSImutldmController::class, 'create']);
Route::post('/si/wilayahbarat/mutldm', [PeralatanSImutldmController::class, 'store']);
Route::get('si/wilayahbarat/mutldm/{id}',  [PeralatanSImutldmController::class, 'edit']);
Route::post('/si/wilayahbarat/mutldm/update/{id}', [PeralatanSImutldmController::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mutldm/delete/{id}',  [PeralatanSImutldmController::class, 'destroy'])->name('delete');

//mwl3
Route::get('si/wilayahbarat/mwl3', [PeralatanSImwl3Controller::class, 'index']);
Route::get('/si/wilayahbarat/mwl3/addnew', [PeralatanSImwl3Controller::class, 'create']);
Route::post('/si/wilayahbarat/mwl3', [PeralatanSImwl3Controller::class, 'store']);
Route::get('si/wilayahbarat/mwl3/{id}',  [PeralatanSImwl3Controller::class, 'edit']);
Route::post('/si/wilayahbarat/mwl3/update/{id}', [PeralatanSImwl3Controller::class, 'update'])->name('update');
Route::get('/si/wilayahbarat/mwl3/delete/{id}',  [PeralatanSImwl3Controller::class, 'destroy'])->name('delete');
//_----------------------Wilayah Timur----------------

//mklt
Route::get('si/wilayahtimur/mklt', [PeralatanSImkltController::class, 'index']);
Route::get('/si/wilayahtimur/mklt/addnew', [PeralatanSImkltController::class, 'create']);
Route::post('/si/wilayahtimur/mklt', [PeralatanSImkltController::class, 'store']);
Route::get('si/wilayahtimur/mklt/{id}',  [PeralatanSImkltController::class, 'edit']);
Route::post('/si/wilayahtimur/mklt/update/{id}', [PeralatanSImkltController::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mklt/delete/{id}',  [PeralatanSImkltController::class, 'destroy'])->name('delete');

//mpatimur
Route::get('si/wilayahtimur/mpatimur', [PeralatanSImpatimurController::class, 'index']);
Route::get('/si/wilayahtimur/mpatimur/addnew', [PeralatanSImpatimurController::class, 'create']);
Route::post('/si/wilayahtimur/mpatimur', [PeralatanSImpatimurController::class, 'store']);
Route::get('si/wilayahtimur/mpatimur/{id}',  [PeralatanSImpatimurController::class, 'edit']);
Route::post('/si/wilayahtimur/mpatimur/update/{id}', [PeralatanSImpatimurController::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mpatimur/delete/{id}',  [PeralatanSImpatimurController::class, 'destroy'])->name('delete');

//mpkk
Route::get('si/wilayahtimur/mpkk', [PeralatanSImpkkController::class, 'index']);
Route::get('/si/wilayahtimur/mpkk/addnew', [PeralatanSImpkkController::class, 'create']);
Route::post('/si/wilayahtimur/mpkk', [PeralatanSImpkkController::class, 'store']);
Route::get('si/wilayahtimur/mpkk/{id}',  [PeralatanSImpkkController::class, 'edit']);
Route::post('/si/wilayahtimur/mpkk/update/{id}', [PeralatanSImpkkController::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mpkk/delete/{id}',  [PeralatanSImpkkController::class, 'destroy'])->name('delete');
//mpks
Route::get('si/wilayahtimur/mpks', [PeralatanSImpksController::class, 'index']);
Route::get('/si/wilayahtimur/mpks/addnew', [PeralatanSImpksController::class, 'create']);
Route::post('/si/wilayahtimur/mpks', [PeralatanSImpksController::class, 'store']);
Route::get('si/wilayahtimur/mpks/{id}',  [PeralatanSImpksController::class, 'edit']);
Route::post('/si/wilayahtimur/mpks/update/{id}', [PeralatanSImpksController::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mpks/delete/{id}',  [PeralatanSImpksController::class, 'destroy'])->name('delete');
//mwl2
Route::get('si/wilayahtimur/mwl2', [PeralatanSImwl2Controller::class, 'index']);
Route::get('/si/wilayahtimur/mwl2/addnew', [PeralatanSImwl2Controller::class, 'create']);
Route::post('/si/wilayahtimur/mwl2', [PeralatanSImwl2Controller::class, 'store']);
Route::get('si/wilayahtimur/mwl2/{id}',  [PeralatanSImwl2Controller::class, 'edit']);
Route::post('/si/wilayahtimur/mwl2/update/{id}', [PeralatanSImwl2Controller::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mwl2/delete/{id}',  [PeralatanSImwl2Controller::class, 'destroy'])->name('delete');


//Armadapoh
Route::get('si/armadapoh/armadapoh', [PeralatanSIarmadapohController::class, 'index']);
Route::get('/si/armadapoh/addnew', [PeralatanSIarmadapohController::class, 'create']);
Route::post('/si/armadapoh/armadapoh', [PeralatanSIarmadapohController::class, 'store']);
Route::get('si/armadapoh/armadapoh/{id}',  [PeralatanSIarmadapohController::class, 'edit']);
Route::post('/si/wilayahtimur/mktl/update/{id}', [PeralatanSIarmadapohController::class, 'update'])->name('update');
Route::get('/si/wilayahtimur/mktl/delete/{id}',  [PeralatanSIaarmadapohController::class, 'destroy'])->name('delete');

//P4
//mawilla1
Route::get('p4/mawilla1', [Mawilla1Controller::class, 'index']);
Route::get('/p4/mawilla1/addnew', [Mawilla1Controller::class, 'create']);
Route::post('/p4/mawilla1/pc', [Mawilla1Controller::class, 'storePC']);
Route::post('/p4/mawilla1/laptop', [Mawilla1Controller::class, 'storeLaptop']);
Route::post('/p4/mawilla1/printer', [Mawilla1Controller::class, 'storePrinter']);
Route::post('/p4/mawilla1/vtc', [Mawilla1Controller::class, 'storeVtc']);
Route::post('/p4/mawilla1/switchrouter', [Mawilla1Controller::class, 'storeSwitchrouter']);
Route::post('/p4/mawilla1/ancillaries', [Mawilla1Controller::class, 'storeAncillaries']);
Route::post('/p4/mawilla1/comm', [Mawilla1Controller::class, 'storeComm']);
Route::get('p4/mawilla1/edit/{id}',  [Mawilla1Controller::class, 'edit']);
// Route::get('/p4/mawilla1/delete/{id}',  [Mawilla1Controller::class, 'delete'])  ->name('delete');
// Route::delete('/p4/mawilla1/{id}',  [Mawilla1Controller::class, 'destroy']);
Route::post('/p4/mawilla1/update/{id}', [Mawilla1Controller::class, 'update'])->name('update');
Route::get('/p4/mawilla1/delete/{id}',  [Mawilla1Controller::class, 'destroy'])->name('delete');

Route::get('p4/mawilla1/editLaptop/{id}',  [Mawilla1Controller::class, 'editLaptop']);
Route::post('/p4/mawilla1/updateLaptop/{id}', [Mawilla1Controller::class, 'updateLaptop'])->name('updateLaptop');
Route::get('/p4/mawilla1/deleteLaptop/{id}',  [Mawilla1Controller::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mawilla1/editPrinter/{id}',  [Mawilla1Controller::class, 'editPrinter']);
Route::post('/p4/mawilla1/updatePrinter/{id}', [Mawilla1Controller::class, 'updatePrinter'])->name('updatePrinter');
Route::get('/p4/mawilla1/deletePrinter/{id}',  [Mawilla1Controller::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mawilla1/editVtc/{id}',  [Mawilla1Controller::class, 'editVtc']);
Route::post('/p4/mawilla1/updateVtc/{id}', [Mawilla1Controller::class, 'updateVtc'])->name('updateVtc');
Route::get('/p4/mawilla1/deleteVtc/{id}',  [Mawilla1Controller::class, 'destroyVtc'])->name('deleteVtc');

Route::get('p4/mawilla1/editSwitchrouter/{id}',  [Mawilla1Controller::class, 'editSwitchrouter']);
Route::post('/p4/mawilla1/updateSwitchrouter/{id}', [Mawilla1Controller::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('/p4/mawilla1/deleteSwitchrouter/{id}',  [Mawilla1Controller::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mawilla1/editAncillaries/{id}',  [Mawilla1Controller::class, 'editAncillaries']);
Route::post('/p4/mawilla1/updateAncillaries/{id}', [Mawilla1Controller::class, 'updateAncillaries'])->name('updateAncillaries');
Route::get('/p4/mawilla1/deleteAncillaries/{id}',  [Mawilla1Controller::class, 'destroyAncillaries'])->name('deleteAncillaries');

Route::get('p4/mawilla1/editComm/{id}',  [Mawilla1Controller::class, 'editComm']);
Route::post('/p4/mawilla1/updateComm/{id}', [Mawilla1Controller::class, 'updateComm'])->name('updateComm');
Route::get('/p4/mawilla1/deleteComm/{id}',  [Mawilla1Controller::class, 'destroyComm'])->name('deleteComm');


//mawilla2
Route::get('p4/mawilla2', [Mawilla2Controller::class, 'index']);
Route::get('/p4/mawilla2/addnew', [Mawilla2Controller::class, 'create']);
Route::post('/p4/mawilla2/pc', [Mawilla2Controller::class, 'storePC']);
Route::post('/p4/mawilla2/laptop', [Mawilla2Controller::class, 'storeLaptop']);
Route::post('/p4/mawilla2/printer', [Mawilla2Controller::class, 'storePrinter']);
Route::post('/p4/mawilla2/peralatansokong', [Mawilla2Controller::class, 'storePeralatanSokong']);
Route::get('p4/mawilla2/edit/{id}',  [Mawilla2Controller::class, 'edit']);
Route::post('/p4/mawilla2/update/{id}', [Mawilla2Controller::class, 'update'])->name('update');
Route::get('p4/mawilla2/delete/{id}',  [Mawilla2Controller::class, 'destroy'])->name('delete');


Route::get('p4/mawilla2/editLaptop/{id}',  [Mawilla2Controller::class, 'editLaptop']);
Route::post('/p4/mawilla2/updateLaptop/{id}', [Mawilla2Controller::class, 'updateLaptop'])->name('updateLaptop');
Route::get('/p4/mawilla2/deleteLaptop/{id}',  [Mawilla2Controller::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mawilla2/editPrinter/{id}',  [Mawilla2Controller::class, 'editPrinter']);
Route::post('/p4/mawilla2/updatePrinter/{id}', [Mawilla2Controller::class, 'updatePrinter'])->name('updatePrinter');
Route::get('/p4/mawilla2/deletePrinter/{id}',  [Mawilla2Controller::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mawilla2/editPeralatansokong/{id}',  [Mawilla2Controller::class, 'editPeralatansokong']);
Route::post('/p4/mawilla2/updatePeralatansokong/{id}', [Mawilla2Controller::class, 'updatePeralatansokong'])->name('updatePeralatansokong');
Route::get('/p4/mawilla2/deletePeralatansokong/{id}',  [Mawilla2Controller::class, 'destroyPeralatansokong'])->name('deletePeralatansokong');

//mawilla3
Route::get('p4/mawilla3', [Mawilla3Controller::class, 'index']);
Route::get('/p4/mawilla3/addnew', [Mawilla3Controller::class, 'create']);
Route::post('/p4/mawilla3/pc', [Mawilla3Controller::class, 'storePC']);
Route::post('/p4/mawilla3/laptop', [Mawilla3Controller::class, 'storeLaptop']);
Route::post('/p4/mawilla3/printer', [Mawilla3Controller::class, 'storePrinter']);
Route::post('/p4/mawilla3/vtc', [Mawilla3Controller::class, 'storeVtc']);
Route::post('/p4/mawilla3/switchrouter', [Mawilla3Controller::class, 'storeSwitchrouter']);
Route::post('/p4/mawilla3/ancillaries', [Mawilla3Controller::class, 'storeAncillaries']);
Route::post('/p4/mawilla3/telephone', [Mawilla3Controller::class, 'storeTelephone']);
Route::get('p4/mawilla3/edit/{id}',  [Mawilla3Controller::class, 'edit']);
Route::post('/p4/mawilla3/update/{id}', [Mawilla3Controller::class, 'update'])->name('update');
Route::get('p4/mawilla3/delete/{id}',  [Mawilla3Controller::class, 'destroy'])->name('delete');

Route::get('p4/mawilla3/editLaptop/{id}',  [Mawilla3Controller::class, 'editLaptop']);
Route::post('/p4/mawilla3/updateLaptop/{id}', [Mawilla3Controller::class, 'updateLaptop'])->name('updateLaptop');
Route::get('/p4/mawilla3/deleteLaptop/{id}',  [Mawilla3Controller::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mawilla3/editPrinter/{id}',  [Mawilla3Controller::class, 'editPrinter']);
Route::post('/p4/mawilla3/updatePrinter/{id}', [Mawilla3Controller::class, 'updatePrinter'])->name('updatePrinter');
Route::get('/p4/mawilla3/deletePrinter/{id}',  [Mawilla3Controller::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mawilla3/editVtc/{id}',  [Mawilla3Controller::class, 'editVtc']);
Route::post('/p4/mawilla3/updateVtc/{id}', [Mawilla3Controller::class, 'updateVtc'])->name('updateVtc');
Route::get('/p4/mawilla3/deleteVtc/{id}',  [Mawilla3Controller::class, 'destroyVtc'])->name('deleteVtc');

Route::get('p4/mawilla3/editSwitchrouter/{id}',  [Mawilla3Controller::class, 'editSwitchrouter']);
Route::post('/p4/mawilla3/updateSwitchrouter/{id}', [Mawilla3Controller::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('/p4/mawilla3/deleteSwitchrouter/{id}',  [Mawilla3Controller::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mawilla3/editAncillaries/{id}',  [Mawilla3Controller::class, 'editAncillaries']);
Route::post('/p4/mawilla3/updateAncillaries/{id}', [Mawilla3Controller::class, 'updateAncillaries'])->name('updateAncillaries');
Route::get('/p4/mawilla3/deleteAncillaries/{id}',  [Mawilla3Controller::class, 'destroyAncillaries'])->name('deleteAncillaries');

Route::get('p4/mawilla3/editTelephone/{id}',  [Mawilla3Controller::class, 'editTelephone']);
Route::post('/p4/mawilla3/updateTelephone/{id}', [Mawilla3Controller::class, 'updateTelephone'])->name('updateTelephone');
Route::get('/p4/mawilla3/deleteTelephone/{id}',  [Mawilla3Controller::class, 'destroyTelephone'])->name('deleteTelephone');

//mksimpanan
Route::get('p4/mksimpanan', [MarkasSimpananController::class, 'index']);
Route::get('/p4/mksimpanan/addnew', [MarkasSimpananController::class, 'create']);
Route::post('/p4/mksimpanan/pc', [MarkasSimpananController::class, 'storePC']);
Route::post('/p4/mksimpanan/laptop', [MarkasSimpananController::class, 'storeLaptop']);
Route::post('/p4/mksimpanan/printer', [MarkasSimpananController::class, 'storePrinter']);
Route::post('/p4/mksimpanan/vtc', [MarkasSimpananController::class, 'storeVtc']);
Route::post('/p4/mksimpanan/switchrouter', [MarkasSimpananController::class, 'storeSwitchrouter']);
Route::post('/p4/mksimpanan/ancillaries', [MarkasSimpananController::class, 'storeAncillaries']);
Route::post('/p4/mksimpanan/comm', [MarkasSimpananController::class, 'storeComm']);
Route::get('p4/mksimpanan/edit/{id}',  [MarkasSimpananController::class, 'edit']);
Route::post('/p4/mksimpanan/update/{id}', [MarkasSimpananController::class, 'update'])->name('update');
Route::get('p4/mksimpanan/delete/{id}',  [MarkasSimpananController::class, 'destroy'])->name('delete');

Route::get('p4/mksimpanan/editLaptop/{id}',  [MarkasSimpananController::class, 'editLaptop']);
Route::post('/p4/mksimpanan/updateLaptop/{id}', [MarkasSimpananController::class, 'updateLaptop'])->name('updateLaptop');
Route::get('/p4/mksimpanan/deleteLaptop/{id}',  [MarkasSimpananController::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mksimpanan/editPrinter/{id}',  [MarkasSimpananController::class, 'editPrinter']);
Route::post('/p4/mksimpanan/updatePrinter/{id}', [MarkasSimpananController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('/p4/mksimpanan/deletePrinter/{id}',  [MarkasSimpananController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mksimpanan/editVtc/{id}',  [MarkasSimpananController::class, 'editVtc']);
Route::post('/p4/mksimpanan/updateVtc/{id}', [MarkasSimpananController::class, 'updateVtc'])->name('updateVtc');
Route::get('/p4/mksimpanan/deleteVtc/{id}',  [MarkasSimpananController::class, 'destroyVtc'])->name('deleteVtc');

Route::get('p4/mksimpanan/editSwitchrouter/{id}',  [MarkasSimpananController::class, 'editSwitchrouter']);
Route::post('/p4/mksimpanan/updateSwitchrouter/{id}', [MarkasSimpananController::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('/p4/mksimpanan/deleteSwitchrouter/{id}',  [MarkasSimpananController::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mksimpanan/editAncillaries/{id}',  [MarkasSimpananController::class, 'editAncillaries']);
Route::post('/p4/mksimpanan/updateAncillaries/{id}', [MarkasSimpananController::class, 'updateAncillaries'])->name('updateAncillaries');
Route::get('/p4/mksimpanan/deleteAncillaries/{id}',  [MarkasSimpananController::class, 'destroyAncillaries'])->name('deleteAncillaries');

Route::get('p4/mksimpanan/editComm/{id}',  [MarkasSimpananController::class, 'editComm']);
Route::post('/p4/mksimpanan/updateComm/{id}', [MarkasSimpananController::class, 'updateComm'])->name('updateComm');
Route::get('/p4/mksimpanan/deleteComm/{id}',  [MarkasSimpananController::class, 'destroyComm'])->name('deleteComm');

//mkpl
Route::get('p4/mkpl', [MkplController::class, 'index']);
Route::get('/p4/mkpl/addnew', [MkplController::class, 'create']);
Route::post('/p4/mkpl/pc', [MkplController::class, 'storePC']);
Route::post('/p4/mkpl/printer', [MkplController::class, 'storePrinter']);
Route::get('p4/mkpl/edit/{id}',  [MkplController::class, 'edit']);
Route::post('/p4/mkpl/update/{id}', [MkplController::class, 'update'])->name('update');
Route::get('p4/mkpl/delete/{id}',  [MkplController::class, 'destroy'])->name('delete');

Route::get('p4/mkpl/editPrinter/{id}',  [MkplController::class, 'editPrinter']);
Route::post('/p4/mkpl/updatePrinter/{id}', [MkplController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mkpl/deletePrinter/{id}',  [MkplController::class, 'destroyPrinter'])->name('deletePrinter');

//mktl
Route::get('p4/mktl', [MktlController::class, 'index']);
Route::get('/p4/mktl/addnew', [MktlController::class, 'create']);
Route::post('/p4/mktl/pc', [MktlController::class, 'storePC']);
Route::post('/p4/mktl/laptop', [MktlController::class, 'storeLaptop']);
Route::post('/p4/mktl/printer', [MktlController::class, 'storePrinter']);
Route::post('/p4/mktl/vtc', [MktlController::class, 'storeVtc']);
Route::post('/p4/mktl/switchrouter', [MktlController::class, 'storeSwitchrouter']);
Route::post('/p4/mktl/ancillaries', [MktlController::class, 'storeAncillaries']);
Route::post('/p4/mktl/comm', [MktlController::class, 'storeComm']);
Route::get('p4/mktl/edit/{id}',  [MktlController::class, 'edit']);
Route::post('/p4/mktl/update/{id}', [MktlController::class, 'update'])->name('update');
Route::get('p4/mktl/delete/{id}',  [MktlController::class, 'destroy'])->name('delete');

Route::get('p4/mktl/editLaptop/{id}',  [MktlController::class, 'editLaptop']);
Route::post('/p4/mktl/updateLaptop/{id}', [MktlController::class, 'updateLaptop'])->name('updateLaptop');
Route::get('p4/mktl/deleteLaptop/{id}',  [MktlController::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mktl/editPrinter/{id}',  [MktlController::class, 'editPrinter']);
Route::post('/p4/mktl/updatePrinter/{id}', [MktlController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mktl/deletePrinter/{id}',  [MktlController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mktl/editVtc/{id}',  [MktlController::class, 'editVtc']);
Route::post('/p4/mktl/updateVtc/{id}', [MktlController::class, 'updateVtc'])->name('updateVtc');
Route::get('p4/mktl/deleteVtc/{id}',  [MktlController::class, 'destroyVtc'])->name('deleteVtc');

Route::get('p4/mktl/editSwitchrouter/{id}',  [MktlController::class, 'editSwitchrouter']);
Route::post('/p4/mktl/updateSwitchrouter/{id}', [MktlController::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('p4/mktl/deleteSwitchrouter/{id}',  [MktlController::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mktl/editAncillaries/{id}',  [MktlController::class, 'editAncillaries']);
Route::post('/p4/mktl/updateAncillaries/{id}', [MktlController::class, 'updateAncillaries'])->name('updateAncillaries');
Route::get('p4/mktl/deleteAncillaries/{id}',  [MktlController::class, 'destroyAncillaries'])->name('deleteAncillaries');

Route::get('p4/mktl/editComm/{id}',  [MktlController::class, 'editComm']);
Route::post('/p4/mktl/updateComm/{id}', [MktlController::class, 'updateComm'])->name('updateComm');
Route::get('p4/mktl/deleteComm/{id}',  [MktlController::class, 'destroyComm'])->name('deleteComm');


//mpab
Route::get('p4/mpab', [MpabController::class, 'index']);
Route::get('p4/mpab/addnew', [MpabController::class, 'create']);
Route::post('/p4/mpab/pc', [MpabController::class, 'storePC']);
Route::post('/p4/mpab/laptop', [MpabController::class, 'storeLaptop']);
Route::post('/p4/mpab/printer', [MpabController::class, 'storePrinter']);
Route::post('/p4/mpab/facsimile', [MpabController::class, 'storeFacsimile']);
Route::get('p4/mpab/edit/{id}',  [MpabController::class, 'edit']);
Route::post('/p4/mpab/update/{id}', [MpabController::class, 'update'])->name('update');
Route::get('p4/mpab/delete/{id}',  [MpabController::class, 'destroy'])->name('delete');

Route::get('p4/mpab/editLaptop/{id}',  [MpabController::class, 'editLaptop']);
Route::post('/p4/mpab/updateLaptop/{id}', [MpabController::class, 'updateLaptop'])->name('updateLaptop');
Route::get('p4/mpab/deleteLaptop/{id}',  [MpabController::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mpab/editPrinter/{id}',  [MpabController::class, 'editPrinter']);
Route::post('/p4/mpab/updatePrinter/{id}', [MpabController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mpab/deletePrinter/{id}',  [MpabController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mpab/editFacsimile/{id}',  [MpabController::class, 'editFacsimile']);
Route::post('/p4/mpab/updateFacsimile/{id}', [MpabController::class, 'updateFacsimile'])->name('updateFacsimile');
Route::get('p4/mpab/deleteFacsimile/{id}',  [MpabController::class, 'destroyFacsimile'])->name('deleteFacsimile');

//mpat
Route::get('p4/mpat', [MpatController::class, 'index']);
Route::get('p4/mpat/addnew', [MpatController::class, 'create']);
Route::post('/p4/mpat/pc', [MpatController::class, 'storePC']);
Route::post('/p4/mpat/laptop', [MpatController::class, 'storeLaptop']);
Route::post('/p4/mpat/printer', [MpatController::class, 'storePrinter']);
Route::post('/p4/mpat/facsimile', [MpatController::class, 'storeFacsimile']);
Route::get('p4/mpat/edit/{id}',  [MpatController::class, 'edit']);
Route::post('/p4/mpat/update/{id}', [MpatController::class, 'update'])->name('update');
Route::get('p4/mpat/delete/{id}',  [MpatController::class, 'destroy'])->name('delete');

Route::get('p4/mpat/editLaptop/{id}',  [MpatController::class, 'editLaptop']);
Route::post('/p4/mpat/updateLaptop/{id}', [MpatController::class, 'updateLaptop'])->name('updateLaptop');
Route::get('p4/mpat/deleteLaptop/{id}',  [MpatController::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mpat/editPrinter/{id}',  [MpatController::class, 'editPrinter']);
Route::post('/p4/mpat/updatePrinter/{id}', [MpatController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mpat/deletePrinter/{id}',  [MpatController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mpat/editFacsimile/{id}',  [MpatController::class, 'editFacsimile']);
Route::post('/p4/mpat/updateFacsimile/{id}', [MpatController::class, 'updateFacsimile'])->name('updateFacsimile');
Route::get('p4/mpat/deleteFacsimile/{id}',  [MpatController::class, 'destroyFacsimile'])->name('deleteFacsimile');

//mpks
Route::get('p4/mpks', [MpksController::class, 'index']);
Route::get('p4/mpks/addnew', [MpksController::class, 'create']);
Route::post('/p4/mpks/pc', [MpksController::class, 'storePC']);
Route::post('/p4/mpks/printer', [MpksController::class, 'storePrinter']);
Route::post('/p4/mpks/facsimile', [MpksController::class, 'storeFacsimile']);
Route::post('/p4/mpks/telephone', [MpksController::class, 'storeTelephone']);
Route::post('/p4/mpks/switchrouter', [MpksController::class, 'storeSwitchrouter']);
Route::post('/p4/mpks/vc', [MpksController::class, 'storeVc']);
Route::post('/p4/mpks/lainperalatan', [MpksController::class, 'storeLainPeralatan']);
Route::get('p4/mpks/edit/{id}',  [MpksController::class, 'edit']);
Route::post('/p4/mpks/update/{id}', [MpksController::class, 'update'])->name('update');
Route::get('p4/mpks/delete/{id}',  [MpksController::class, 'destroy'])->name('delete');

Route::get('p4/mpks/editPrinter/{id}',  [MpksController::class, 'editPrinter']);
Route::post('/p4/mpks/updatePrinter/{id}', [MpksController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mpks/deletePrinter/{id}',  [MpksController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mpks/editFacsimile/{id}',  [MpksController::class, 'editFacsimile']);
Route::post('/p4/mpks/updateFacsimile/{id}', [MpksController::class, 'updateFacsimile'])->name('updateFacsimile');
Route::get('p4/mpks/deleteFacsimile/{id}',  [MpksController::class, 'destroyFacsimile'])->name('deleteFacsimile');

Route::get('p4/mpks/editTelephone/{id}',  [MpksController::class, 'editTelephone']);
Route::post('/p4/mpks/updateTelephone/{id}', [MpksController::class, 'updateTelephone'])->name('updateTelephone');
Route::get('p4/mpks/deleteTelephone/{id}',  [MpksController::class, 'destroyTelephone'])->name('deleteTelephone');

Route::get('p4/mpks/editTelephone/{id}',  [MpksController::class, 'editTelephone']);
Route::post('/p4/mpks/updateTelephone/{id}', [MpksController::class, 'updateTelephone'])->name('updateTelephone');
Route::get('p4/mpks/deleteTelephone/{id}',  [MpksController::class, 'destroyTelephone'])->name('deleteTelephone');

Route::get('p4/mpks/editSwitchrouter/{id}',  [MpksController::class, 'editSwitchrouter']);
Route::post('/p4/mpks/updateSwitchrouter/{id}', [MpksController::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('p4/mpks/deleteSwitchrouter/{id}',  [MpksController::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mpks/editVc/{id}',  [MpksController::class, 'editVc']);
Route::post('/p4/mpks/updateVc/{id}', [MpksController::class, 'updateVc'])->name('updateVc');
Route::get('p4/mpks/deleteVc/{id}',  [MpksController::class, 'destroyVc'])->name('deleteVc');

Route::get('p4/mpks/editLainperalatan/{id}',  [MpksController::class, 'editLainperalatan']);
Route::post('/p4/mpks/updateLainperalatan/{id}', [MpksController::class, 'updateLainperalatan'])->name('updateLainperalatan');
Route::get('p4/mpks/deleteLainperalatan/{id}',  [MpksController::class, 'destroyLainperalatan'])->name('deleteLainperalatan');

//phn
Route::get('p4/phn', [PhnController::class, 'index']);
Route::get('p4/phn/addnew', [PhnController::class, 'create']);
Route::post('/p4/phn/pc', [PhnController::class, 'storePC']);
Route::post('/p4/phn/printer', [PhnController::class, 'storePrinter']);
Route::get('p4/phn/edit/{id}',  [PhnController::class, 'edit']);
Route::post('/p4/phn/update/{id}', [PhnController::class, 'update'])->name('update');
Route::get('p4/phn/delete/{id}',  [PhnController::class, 'destroy'])->name('delete');

Route::get('p4/phn/editPrinter/{id}',  [PhnController::class, 'editPrinter']);
Route::post('/p4/phn/updatePrinter/{id}', [PhnController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/phn/deletePrinter/{id}',  [PhnController::class, 'destroyPrinter'])->name('deletePrinter');

//mklb
Route::get('/p4/mklb', [MklbController::class, 'index']);
Route::get('p4/mklb/addnew', [MklbController::class, 'create']);
Route::post('/p4/mklb/pc', [MklbController::class, 'storePC']);
Route::post('/p4/mklb/laptop', [MklbController::class, 'storeLaptop']);
Route::post('/p4/mklb/printer', [MklbController::class, 'storePrinter']);
Route::post('/p4/mklb/scanner', [MklbController::class, 'storeScanner']);
Route::post('/p4/mklb/facsimile', [MklbController::class, 'storeFacsimile']);
Route::post('/p4/mklb/switchrouter', [MklbController::class, 'storeSwitchrouter']);
Route::post('/p4/mklb/fiber', [MklbController::class, 'storeFiber']);
Route::post('/p4/mklb/acu', [MklbController::class, 'storeAcu']);
Route::post('/p4/mklb/ups', [MklbController::class, 'storeUps']);
Route::post('/p4/mklb/security', [MklbController::class, 'storeSecurity']);
Route::post('/p4/mklb/fire', [MklbController::class, 'storeFire']);
Route::post('/p4/mklb/standbygenerator', [MklbController::class, 'storeStandbygenerator']);
Route::get('p4/mklb/edit/{id}',  [MklbController::class, 'edit']);
Route::post('/p4/mklb/update/{id}', [MklbController::class, 'update'])->name('update');
Route::get('p4/mklb/delete/{id}',  [MklbController::class, 'destroy'])->name('delete');

Route::get('p4/mklb/editLaptop/{id}',  [MklbController::class, 'editLaptop']);
Route::post('/p4/mklb/updateLaptop/{id}', [MklbController::class, 'updateLaptop'])->name('updateLaptop');
Route::get('p4/mklb/deleteLaptop/{id}',  [MklbController::class, 'destroyLaptop'])->name('deleteLaptop');

Route::get('p4/mklb/editPrinter/{id}',  [MklbController::class, 'editPrinter']);
Route::post('/p4/mklb/updatePrinter/{id}', [MklbController::class, 'updatePrinter'])->name('updatePrinter');
Route::get('p4/mklb/deletePrinter/{id}',  [MklbController::class, 'destroyPrinter'])->name('deletePrinter');

Route::get('p4/mklb/editScanner/{id}',  [MklbController::class, 'editScanner']);
Route::post('/p4/mklb/updateScanner/{id}', [MklbController::class, 'updateScanner'])->name('updateScanner');
Route::get('p4/mklb/deleteScanner/{id}',  [MklbController::class, 'destroyScanner'])->name('deleteScanner');

Route::get('p4/mklb/editFacsimile/{id}',  [MklbController::class, 'editFacsimile']);
Route::post('/p4/mklb/updateFacsimile/{id}', [MklbController::class, 'updateFacsimile'])->name('updateFacsimile');
Route::get('p4/mklb/deleteFacsimile/{id}',  [MklbController::class, 'destroyFacsimile'])->name('deleteFacsimile');

Route::get('p4/mklb/editSwitchrouter/{id}',  [MklbController::class, 'editSwitchrouter']);
Route::post('/p4/mklb/updateSwitchrouter/{id}', [MklbController::class, 'updateSwitchrouter'])->name('updateSwitchrouter');
Route::get('p4/mklb/deleteSwitchrouter/{id}',  [MklbController::class, 'destroySwitchrouter'])->name('deleteSwitchrouter');

Route::get('p4/mklb/editFiber/{id}',  [MklbController::class, 'editFiber']);
Route::post('/p4/mklb/updateFiber/{id}', [MklbController::class, 'updateFiber'])->name('updateFiber');
Route::get('p4/mklb/deleteFiber/{id}',  [MklbController::class, 'destroyFiber'])->name('deleteFiber');

Route::get('p4/mklb/editAcu/{id}',  [MklbController::class, 'editAcu']);
Route::post('/p4/mklb/updateAcu/{id}', [MklbController::class, 'updateAcu'])->name('updateAcu');
Route::get('p4/mklb/deleteAcu/{id}',  [MklbController::class, 'destroyAcu'])->name('deleteAcu');

Route::get('p4/mklb/editUps/{id}',  [MklbController::class, 'editUps']);
Route::post('/p4/mklb/updateUps/{id}', [MklbController::class, 'updateUps'])->name('updateUps');
Route::get('p4/mklb/deleteUps/{id}',  [MklbController::class, 'destroyUps'])->name('deleteUps');

Route::get('p4/mklb/editSecurity/{id}',  [MklbController::class, 'editSecurity']);
Route::post('/p4/mklb/updateSecurity/{id}', [MklbController::class, 'updateSecurity'])->name('updateSecurity');
Route::get('p4/mklb/deleteSecurity/{id}',  [MklbController::class, 'destroySecurity'])->name('deleteSecurity');

Route::get('p4/mklb/editFire/{id}',  [MklbController::class, 'editFire']);
Route::post('/p4/mklb/updateFire/{id}', [MklbController::class, 'updateFire'])->name('updateFire');
Route::get('p4/mklb/deleteFire/{id}',  [MklbController::class, 'destroyFire'])->name('deleteFire');

Route::get('p4/mklb/editStandbygenerator/{id}',  [MklbController::class, 'editStandbygenerator']);
Route::post('/p4/mklb/updateStandbygenerator/{id}', [MklbController::class, 'updateStandbygenerator'])->name('updateStandbygenerator');
Route::get('p4/mklb/deleteStandbygenerator/{id}',  [MklbController::class, 'destroyStandbygenerator'])->name('deleteStandbygenerator');

//PPE

//ppetldm
Route::get('ppe/ppetldm', [PpeTLDMController::class, 'index']);
Route::get('/ppe/ppetldm/addnew', [PpeTLDMController::class, 'create']);
Route::post('/ppe/ppetldm', [PpeTLDMController::class, 'store']);
Route::get('ppe/ppetldm/{id}',  [PpeTLDMController::class, 'edit']);
// Route::delete('ppe/ppetldm/{id}',  [PpeTLDMController::class, 'destroy']);
Route::post('/ppe/ppetldm/update/{id}', [PpeTLDMController::class, 'update'])->name('update');
Route::get('/ppe/ppetldm/delete/{id}',  [PpeTLDMController::class, 'destroy'])->name('delete');


//kdlekiu
Route::get('ppe/kdlekiu', [KdLekiuController::class, 'index']);
Route::get('/ppe/kdlekiu/addnew', [KdLekiuController::class, 'create']);
Route::post('/ppe/kdlekiu/', [KdLekiuController::class, 'store']);
Route::get('ppe/kdlekiu/{id}',  [KdLekiuController::class, 'edit']);
Route::post('/ppe/kdlekiu/update/{id}', [KdLekiuController::class, 'update'])->name('update');
Route::get('/ppe/kdlekiu/delete/{id}',  [KdLekiuController::class, 'destroy'])->name('delete');

//kdbadik
Route::get('ppe/kdbadik', [KdBadikController::class, 'index']);
Route::get('/ppe/kdbadik/addnew', [KdBadikController::class, 'create']);
Route::post('/ppe/kdbadik', [KdBadikController::class, 'store']);
Route::get('ppe/kdbadik/{id}',  [KdBadikController::class, 'edit']);
Route::post('/ppe/kdbadik/update/{id}', [KdBadikController::class, 'update'])->name('update');
Route::get('/ppe/kdbadik/delete/{id}',  [KdBadikController::class, 'destroy'])->name('delete');

//kdjebat
Route::get('ppe/kdjebat', [KdJebatController::class, 'index']);
Route::get('/ppe/kdjebat/addnew', [KdJebatController::class, 'create']);
Route::post('/ppe/kdjebat', [KdJebatController::class, 'store']);
Route::get('ppe/kdjebat/{id}',  [KdJebatController::class, 'edit']);
Route::post('/ppe/kdjebat/update/{id}', [KdJebatController::class, 'update'])->name('update');
Route::get('/ppe/kdjebat/delete/{id}',  [KdJebatController::class, 'destroy'])->name('delete');

//kdkasturi
Route::get('ppe/kdkasturi', [KdKasturiController::class, 'index']);
Route::get('/ppe/kdkasturi/addnew', [KdKasturiController::class, 'create']);
Route::post('/ppe/kdkasturi', [KdKasturiController::class, 'store']);
Route::get('ppe/kdkasturi/{id}',  [KdKasturiController::class, 'edit']);
Route::post('/ppe/kdkasturi/update/{id}', [KdKasturiController::class, 'update'])->name('update');
Route::get('/ppe/kdkasturi/delete/{id}',  [KdKasturiController::class, 'destroy'])->name('delete');

//kdkedah
Route::get('ppe/kdkedah', [KdKedahController::class, 'index']);
Route::get('/ppe/kdkedah/addnew', [KdKedahController::class, 'create']);
Route::post('/ppe/kdkedah', [KdKedahController::class, 'store']);
Route::get('ppe/kdkedah/{id}',  [KdKedahController::class, 'edit']);
Route::post('/ppe/kdkedah/update/{id}', [KdKedahController::class, 'update'])->name('update');
Route::get('/ppe/kdkedah/delete/{id}',  [KdKedahController::class, 'destroy'])->name('delete');

//kdkelantan
Route::get('ppe/kdkelantan', [KdKelantanController::class, 'index']);
Route::get('/ppe/kdkelantan/addnew', [KdKelantanController::class, 'create']);
Route::post('/ppe/kdkelantan', [KdKelantanController::class, 'store']);
Route::get('ppe/kdkelantan/{id}',  [KdKelantanController::class, 'edit']);
Route::post('/ppe/kdkelantan/update/{id}', [KdKelantanController::class, 'update'])->name('update');
Route::get('/ppe/kdkelantan/delete/{id}',  [KdKelantanController::class, 'destroy'])->name('delete');

//kdkeris
Route::get('ppe/kdkeris', [KdKerisController::class, 'index']);
Route::get('/ppe/kdkeris/addnew', [KdKerisController::class, 'create']);
Route::post('/ppe/kdkeris', [KdKerisController::class, 'store']);
Route::get('ppe/kdkeris/{id}',  [KdKerisController::class, 'edit']);
Route::post('/ppe/kdkeris/update/{id}', [KdKerisController::class, 'update'])->name('update');
Route::get('/ppe/kdkeris/delete/{id}',  [KdKerisController::class, 'destroy'])->name('delete');

//kdlekir
Route::get('ppe/kdlekir', [KdLekirController::class, 'index']);
Route::get('/ppe/kdlekir/addnew', [KdLekirController::class, 'create']);
Route::post('/ppe/kdlekir', [KdLekirController::class, 'store']);
Route::get('ppe/kdlekir/{id}',  [KdLekirController::class, 'edit']);
Route::post('/ppe/kdlekir/update/{id}', [KdLekirController::class, 'update'])->name('update');
Route::get('/ppe/kdlekir/delete/{id}',  [KdLekirController::class, 'destroy'])->name('delete');

//kdmahawangsa
Route::get('ppe/kdmahawangsa', [KdMahawangsaController::class, 'index']);
Route::get('/ppe/kdmahawangsa/addnew', [KdMahawangsaController::class, 'create']);
Route::post('/ppe/kdmahawangsa', [KdMahawangsaController::class, 'store']);
Route::get('ppe/kdmahawangsa/{id}',  [KdMahawangsaController::class, 'edit']);
Route::post('/ppe/kdmahawangsa/update/{id}', [KdMahawangsaController::class, 'update'])->name('update');
Route::get('/ppe/kdmahawangsa/delete/{id}',  [KdMahawangsaController::class, 'destroy'])->name('delete');

//kdpahang
Route::get('ppe/kdpahang', [KdPahangController::class, 'index']);
Route::get('/ppe/kdpahang/addnew', [KdPahangController::class, 'create']);
Route::post('/ppe/kdpahang', [KdPahangController::class, 'store']);
Route::get('ppe/kdpahang/{id}',  [KdPahangController::class, 'edit']);
Route::post('/ppe/kdpahang/update/{id}', [KdPahangController::class, 'update'])->name('update');
Route::get('/ppe/kdpahang/delete/{id}',  [KdPahangController::class, 'destroy'])->name('delete');

//kdperak
Route::get('ppe/kdperak', [KdPerakController::class, 'index']);
Route::get('/ppe/kdperak/addnew', [KdPerakController::class, 'create']);
Route::post('/ppe/kdperak', [KdPerakController::class, 'store']);
Route::get('ppe/kdperak/{id}',  [KdPerakController::class, 'edit']);
Route::post('/ppe/kdperak/update/{id}', [KdPerakController::class, 'update'])->name('update');
Route::get('/ppe/kdperak/delete/{id}',  [KdPerakController::class, 'destroy'])->name('delete');

//kdrencong
Route::get('ppe/kdrencong', [KdRencongController::class, 'index']);
Route::get('/ppe/kdrencong/addnew', [KdRencongController::class, 'create']);
Route::post('/ppe/kdrencong', [KdRencongController::class, 'store']);
Route::get('ppe/kdrencong/{id}',  [KdRencongController::class, 'edit']);
Route::post('/ppe/kdrencong/update/{id}', [KdRencongController::class, 'update'])->name('update');
Route::get('/ppe/kdrencong/delete/{id}',  [KdRencongController::class, 'destroy'])->name('delete');

//kdselangor
Route::get('ppe/kdselangor', [KdSelangorController::class, 'index']);
Route::get('/ppe/kdselangor/addnew', [KdSelangorController::class, 'create']);
Route::post('/ppe/kdselangor', [KdSelangorController::class, 'store']);
Route::get('ppe/kdselangor/{id}',  [KdSelangorController::class, 'edit']);
Route::post('/ppe/kdselangor/update/{id}', [KdSelangorController::class, 'update'])->name('update');
Route::get('/ppe/kdselangor/delete/{id}',  [KdSelangorController::class, 'destroy'])->name('delete');

//kdsriinderasakti
Route::get('ppe/kdsriinderasakti', [KdSriInderasaktiController::class, 'index']);
Route::get('/ppe/kdsriinderasakti/addnew', [KdSriInderasaktiController::class, 'create']);
Route::post('/ppe/kdsriinderasakti', [KdSriInderasaktiController::class, 'store']);
Route::get('ppe/kdsriinderasakti/{id}',  [KdSriInderasaktiController::class, 'edit']);
Route::post('/ppe/kdsriinderasakti/update/{id}', [KdSriInderasaktiController::class, 'update'])->name('update');
Route::get('/ppe/kdsriinderasakti/delete/{id}',  [KdSriInderasaktiController::class, 'destroy'])->name('delete');

//kdsundang
Route::get('ppe/kdsundang', [kdSundangController::class, 'index']);
Route::get('/ppe/kdsundang/addnew', [kdSundangController::class, 'create']);
Route::post('/ppe/kdsundang', [kdSundangController::class, 'store']);
Route::get('ppe/kdsundang/{id}',  [kdSundangController::class, 'edit']);
Route::post('/ppe/kdsundang/update/{id}', [kdSundangController::class, 'update'])->name('update');
Route::get('/ppe/kdsundang/delete/{id}',  [kdSundangController::class, 'destroy'])->name('delete');

//kdtar
Route::get('ppe/kdtar', [KdTarController::class, 'index']);
Route::get('/ppe/kdtar/addnew', [KdTarController::class, 'create']);
Route::post('/ppe/kdtar', [KdTarController::class, 'store']);
Route::get('ppe/kdtar/{id}',  [KdTarController::class, 'edit']);
Route::post('/ppe/kdtar/update/{id}', [KdTarController::class, 'update'])->name('update');
Route::get('/ppe/kdtar/delete/{id}',  [KdTarController::class, 'destroy'])->name('delete');

//kdterengganu
Route::get('ppe/kdterengganu', [KdTerengganuController::class, 'index']);
Route::get('/ppe/kdterengganu/addnew', [KdTerengganuController::class, 'create']);
Route::post('/ppe/kdterengganu', [KdTerengganuController::class, 'store']);
Route::get('ppe/kdterengganu/{id}',  [KdTerengganuController::class, 'edit']);
Route::post('/ppe/kdterengganu/update/{id}', [KdTerengganuController::class, 'update'])->name('update');
Route::get('/ppe/kdterengganu/delete/{id}',  [KdTerengganuController::class, 'destroy'])->name('delete');

//kdtrz
Route::get('ppe/kdtrz', [KdTrzController::class, 'index']);
Route::get('/ppe/kdtrz/addnew', [KdTrzController::class, 'create']);
Route::post('/ppe/kdtrz', [KdTrzController::class, 'store']);
Route::get('ppe/kdtrz/{id}',  [KdTrzController::class, 'edit']);
Route::post('/ppe/kdtrz/update/{id}', [KdTrzController::class, 'update'])->name('update');
Route::get('/ppe/kdtrz/delete/{id}',  [KdTrzController::class, 'destroy'])->name('delete');

//skuadron501
Route::get('ppe/skuadron501', [Skuadron501Controller::class, 'index']);
Route::get('/ppe/skuadron501/addnew', [Skuadron501Controller::class, 'create']);
Route::post('/ppe/skuadron501', [Skuadron501Controller::class, 'store']);
Route::get('ppe/skuadron501/{id}',  [Skuadron501Controller::class, 'edit']);
Route::post('/ppe/skuadron501/update/{id}', [Skuadron501Controller::class, 'update'])->name('update');
Route::get('/ppe/skuadron501/delete/{id}',  [Skuadron501Controller::class, 'destroy'])->name('delete');

//skuadron502
Route::get('ppe/skuadron502', [Skuadron502Controller::class, 'index']);
Route::get('/ppe/skuadron502/addnew', [Skuadron502Controller::class, 'create']);
Route::post('/ppe/skuadron502', [Skuadron502Controller::class, 'store']);
Route::get('ppe/skuadron502/{id}',  [Skuadron502Controller::class, 'edit']);
Route::post('/ppe/skuadron502/update/{id}', [Skuadron502Controller::class, 'update'])->name('update');
Route::get('/ppe/skuadron502/delete/{id}',  [Skuadron502Controller::class, 'destroy'])->name('delete');

//kom


//fbb
Route::get('kom/fbb', [FBBController::class, 'index']);
Route::get('/kom/fbb/addnew', [FBBController::class, 'create']);
Route::post('/kom/fbb/terminal', [FBBController::class, 'storeTerminal']);
Route::post('/kom/fbb/simkad', [FBBController::class, 'storeSimKad']);
Route::get('kom/fbb/edit/{id}',  [FBBController::class, 'edit']);
Route::post('/kom/fbb/update/{id}', [FBBController::class, 'update'])->name('update');
Route::get('/kom/fbb/delete/{id}',  [FBBController::class, 'destroy'])->name('delete');
Route::get('kom/fbb/editSimkad/{id}',  [FBBController::class, 'editSimkad']);
Route::post('/kom/fbb/updateSimkad/{id}', [FBBController::class, 'updateSimkad'])->name('updateSimkad');
Route::get('/kom/fbb/deleteSimkad/{id}',  [FBBController::class, 'destroySimkad'])->name('deleteSimkad');

//radio
Route::get('kom/radio', [RadioController::class, 'index']);
Route::get('/kom/radio/addnew', [RadioController::class, 'create']);
Route::post('/kom/radio/', [RadioController::class, 'store']);
Route::get('kom/radio/edit/{id}',  [RadioController::class, 'edit']);
Route::post('/kom/radio/update/{id}', [RadioController::class, 'update'])->name('update');
Route::get('/kom/radio/delete/{id}',  [RadioController::class, 'destroy'])->name('delete');

//girn
Route::get('kom/girn', [GirnController::class, 'index']);
Route::get('/kom/girn/addnew', [GirnController::class, 'create']);
Route::post('/kom/girn/girnunit', [GirnController::class, 'storeGirnunit']);
Route::post('/kom/girn/operasigirn', [GirnController::class, 'storeOperasigirn']);
Route::get('kom/girn/edit/{id}',  [GirnController::class, 'edit']);
Route::post('/kom/girn/update/{id}', [GirnController::class, 'update'])->name('update');
Route::get('/kom/girn/delete/{id}',  [GirnController::class, 'destroy'])->name('delete');
Route::get('kom/girn/editOperasigirn/{id}',  [GirnController::class, 'editOperasigirn']);
Route::post('/kom/girn/updateOperasigirn/{id}', [GirnController::class, 'updateOperasigirn'])->name('updateOperasigirn');
Route::get('/kom/girn/deleteOperasigirn/{id}',  [GirnController::class, 'destroyOperasigirn'])->name('deleteOperasigirn');

//trc5200
Route::get('kom/trc5200', [Trc5200Controller::class, 'index']);
Route::get('/kom/trc5200/addnew', [Trc5200Controller::class, 'create']);
Route::post('/kom/trc5200/', [Trc5200Controller::class, 'store']);
Route::get('kom/trc5200/edit/{id}',  [Trc5200Controller::class, 'edit']);
Route::post('/kom/trc5200/update/{id}', [Trc5200Controller::class, 'update'])->name('update');
Route::get('/kom/trc5200/delete/{id}',  [Trc5200Controller::class, 'destroy'])->name('delete');

//C4itacx
Route::get('kom/c4itacx', [C4itacxController::class, 'index']);
Route::get('/kom/c4itacx/addnew', [C4itacxController::class, 'create']);
Route::post('/kom/c4itacx/kapal', [C4itacxController::class, 'storeKapal']);
Route::post('/kom/c4itacx/pangkalan', [C4itacxController::class, 'storePangkalan']);
Route::get('kom/c4itacx/edit/{id}',  [C4itacxController::class, 'edit']);
Route::post('/kom/c4itacx/update/{id}', [C4itacxController::class, 'update'])->name('update');
Route::get('/kom/c4itacx/delete/{id}',  [C4itacxController::class, 'destroy'])->name('delete');
Route::get('kom/c4itacx/editKapal/{id}',  [C4itacxController::class, 'editKapal']);
Route::post('/kom/c4itacx/updateKapal/{id}', [C4itacxController::class, 'updateKapal'])->name('updateKapal');
Route::get('/kom/c4itacx/deleteKapal/{id}',  [C4itacxController::class, 'destroyKapal'])->name('deleteKapal');


//nco
Route::get('kom/nco', [NcoController::class, 'index']);
Route::get('/kom/nco/addnew', [NcoController::class, 'create']);
Route::post('/kom/nco/', [NcoController::class, 'store']);
Route::get('kom/nco/edit/{id}',  [NcoController::class, 'edit']);
Route::post('/kom/nco/update/{id}', [NcoController::class, 'update'])->name('update');
Route::get('/kom/nco/delete/{id}',  [NcoController::class, 'destroy'])->name('delete');

//emel
Route::get('kom/emel', [EmelController::class, 'index']);
Route::get('/kom/emel/addnew', [EmelController::class, 'create']);
Route::post('/kom/emel/', [EmelController::class, 'store']);
Route::get('kom/emel/edit/{id}',  [EmelController::class, 'edit']);
Route::post('/kom/emel/update/{id}', [EmelController::class, 'update'])->name('update');
Route::get('/kom/emel/delete/{id}',  [EmelController::class, 'destroy'])->name('delete');


//sistemict
Route::get('kom/sistemict', [SistemICTController::class, 'index']);
Route::get('/kom/sistemict/addnew', [SistemICTController::class, 'create']);
Route::post('/kom/sistemict/', [SistemICTController::class, 'store']);
Route::get('kom/sistemict/edit/{id}',  [SistemICTController::class, 'edit']);
Route::post('/kom/sistemict/update/{id}', [SistemICTController::class, 'update'])->name('update');
Route::get('/kom/sistemict/delete/{id}',  [SistemICTController::class, 'destroy'])->name('delete');

//peralatanDEMS
Route::get('kom/dems', [DemsController::class, 'index']);
Route::get('/kom/dems/addnew', [DemsController::class, 'create']);
Route::post('/kom/dems/peralatandems', [DemsController::class, 'storePeralatan']);
Route::post('/kom/dems/cadangan', [DemsController::class, 'storeCadangan']);
Route::get('kom/dems/edit/{id}',  [DemsController::class, 'edit']);
Route::post('/kom/dems/update/{id}', [DemsController::class, 'update'])->name('update');
Route::get('/kom/dems/delete/{id}',  [DemsController::class, 'destroy'])->name('delete');
Route::get('kom/dems/editCadangan/{id}',  [DemsController::class, 'editCadangan']);
Route::post('/kom/dems/updateCadangan/{id}', [DemsController::class, 'updateCadangan'])->name('updateCadangan');
Route::get('/kom/dems/deleteCadangan/{id}',  [DemsController::class, 'destroyCadangan'])->name('deleteCadangan');

//SATCOM
Route::get('kom/satcom', [SatcomController::class, 'index']);
Route::get('/kom/satcom/addnew', [SatcomController::class, 'create']);
Route::post('/kom/satcom/', [SatcomController::class, 'store']);
Route::get('kom/satcom/edit/{id}',  [SatcomController::class, 'edit']);
Route::post('/kom/satcom/update/{id}', [SatcomController::class, 'update'])->name('update');
Route::get('/kom/satcom/delete/{id}',  [SatcomController::class, 'destroy'])->name('delete');

//telefon
Route::get('kom/telefon', [TelefonController::class, 'index']);
Route::get('/kom/telefon/addnew', [TelefonController::class, 'create']);
Route::post('/kom/telefon/operasi', [TelefonController::class, 'storeOperasi']);
Route::post('/kom/telefon/ibusawat', [TelefonController::class, 'storeIbusawat']);
Route::get('kom/telefon/edit/{id}',  [TelefonController::class, 'edit']);
Route::post('/kom/telefon/update/{id}', [TelefonController::class, 'update'])->name('update');
Route::get('/kom/telefon/delete/{id}',  [TelefonController::class, 'destroy'])->name('delete');
Route::get('kom/telefon/editIbusawat/{id}',  [TelefonController::class, 'editIbusawat']);
Route::post('/kom/telefon/updateIbusawat/{id}', [TelefonController::class, 'updateIbusawat'])->name('updateIbusawat');
Route::get('/kom/telefon/deleteIbusawat/{id}',  [TelefonController::class, 'destroyIbusawat'])->name('deleteIbusawat');

//centrixs
Route::get('kom/centrixs', [CentrixsController::class, 'index']);
Route::get('/kom/centrixs/addnew', [CentrixsController::class, 'create']);
Route::post('/kom/centrixs/peralatan', [CentrixsController::class, 'storePeralatan']);
Route::post('/kom/centrixs/rekodpenggunaan', [CentrixsController::class, 'storeRekod']);
Route::get('kom/centrixs/edit/{id}',  [CentrixsController::class, 'edit']);
Route::post('/kom/centrixs/update/{id}', [CentrixsController::class, 'update'])->name('update');
Route::get('/kom/centrixs/delete/{id}',  [CentrixsController::class, 'destroy'])->name('delete');
Route::get('kom/centrixs/editRekod/{id}',  [CentrixsController::class, 'editRekod']);
Route::post('/kom/centrixs/updateRekod/{id}', [CentrixsController::class, 'updateRekod'])->name('updateRekod');
Route::get('/kom/centrixs/deleteRekod/{id}',  [CentrixsController::class, 'destroyRekod'])->name('deleteRekod');

//xband

Route::get('kom/xband', [XbandController::class, 'index']);
Route::get('/kom/xband/addnew', [XbandController::class, 'create']);
Route::post('/kom/xband/manpack', [XbandController::class, 'storeManpack']);
Route::post('/kom/xband/fixedterminal', [XbandController::class, 'storeFixedterminal']);
Route::post('/kom/xband/navalterminal', [XbandController::class, 'storeNavalterminal']);
Route::post('/kom/xband/cotp', [XbandController::class, 'storeCotp']);
Route::post('/kom/xband/cotm', [XbandController::class, 'storeCotm']);
Route::post('/kom/xband/flyawaykit', [XbandController::class, 'storeFlyawaykit']);
Route::get('kom/xband/edit/{id}',  [XbandController::class, 'edit']);
Route::post('/kom/xband/update/{id}', [XbandController::class, 'update'])->name('update');
Route::get('/kom/xband/delete/{id}',  [XbandController::class, 'destroy'])->name('delete');

Route::get('kom/xband/editFixedterminal/{id}',  [XbandController::class, 'editFixedterminal']);
Route::post('/kom/xband/updateFixedterminal/{id}', [XbandController::class, 'updateFixedterminal'])->name('updateFixedterminal');
Route::get('/kom/xband/deleteFixedterminal/{id}',  [XbandController::class, 'destroyFixedterminal'])->name('deleteFixedterminal');

Route::get('kom/xband/editNavalterminal/{id}',  [XbandController::class, 'editNavalterminal']);
Route::post('/kom/xband/updateNavalterminal/{id}', [XbandController::class, 'updateNavalterminal'])->name('updateNavalterminal');
Route::get('/kom/xband/deleteNavalterminal/{id}',  [XbandController::class, 'destroyNavalterminal'])->name('deleteNavalterminal');

Route::get('kom/xband/editCotp/{id}',  [XbandController::class, 'editCotp']);
Route::post('/kom/xband/updateCotp/{id}', [XbandController::class, 'updateCotp'])->name('updateCotp');
Route::get('/kom/xband/deleteCotp/{id}',  [XbandController::class, 'destroyCotp'])->name('deleteCotp');

Route::get('kom/xband/editCotm/{id}',  [XbandController::class, 'editCotm']);
Route::post('/kom/xband/updateCotm/{id}', [XbandController::class, 'updateCotm'])->name('updateCotm');
Route::get('/kom/xband/deleteCotm/{id}',  [XbandController::class, 'destroyCotm'])->name('deleteCotm');

Route::get('kom/xband/editFlyawaykit/{id}',  [XbandController::class, 'editFlyawaykit']);
Route::post('/kom/xband/updateFlyawaykit/{id}', [XbandController::class, 'updateFlyawaykit'])->name('updateFlyawaykit');
Route::get('/kom/xband/deleteFlyawaykit/{id}',  [XbandController::class, 'destroyFlyawaykit'])->name('deleteFlyawaykit');

//Kat
Route::get('kom/kat', [KatController::class, 'index']);
Route::get('/kom/kat/addnew', [KatController::class, 'create']);
Route::post('/kom/kat/', [KatController::class, 'store']);
Route::get('kom/kat/edit/{id}',  [KatController::class, 'edit']);
Route::post('/kom/kat/update/{id}', [KatController::class, 'update'])->name('update');
Route::get('/kom/kat/delete/{id}',  [KatController::class, 'destroy'])->name('delete');

//RMPNET

Route::get('kom/rmpnet', [RmpnetController::class, 'index']);
Route::get('/kom/rmpnet/addnew', [RmpnetController::class, 'create']);
Route::post('/kom/rmpnet/mpab', [RmpnetController::class, 'storeMpab']);
Route::post('/kom/rmpnet/mwl1', [RmpnetController::class, 'storeMwl1']);
Route::post('/kom/rmpnet/fmbppmportklang', [RmpnetController::class, 'storeFmbppmportklang']);
Route::post('/kom/rmpnet/fobkualalinggi', [RmpnetController::class, 'storeFobkualalinggi']);
Route::post('/kom/rmpnet/fobbatupahat', [RmpnetController::class, 'storeFobbatupahat']);
Route::post('/kom/rmpnet/fobkukup', [RmpnetController::class, 'storeFobkukup']);
Route::post('/kom/rmpnet/fmbkdsi', [RmpnetController::class, 'storeFmbkdsi']);
Route::post('/kom/rmpnet/fobtelukramunia', [RmpnetController::class, 'storeFobtelukramunia']);
Route::post('/kom/rmpnet/mpat', [RmpnetController::class, 'storeMpat']);
Route::post('/kom/rmpnet/mwl2', [RmpnetController::class, 'storeMwl2']);
Route::get('kom/rmpnet/edit/{id}',  [RmpnetController::class, 'edit']);
Route::post('/kom/rmpnet/update/{id}', [RmpnetController::class, 'update'])->name('update');
Route::get('/kom/rmpnet/delete/{id}',  [RmpnetController::class, 'destroy'])->name('delete');

Route::get('kom/rmpnet/editMwl1/{id}',  [RmpnetController::class, 'editMwl1']);
Route::post('/kom/rmpnet/updateMwl1/{id}', [RmpnetController::class, 'updateMwl1'])->name('updateMwl1');
Route::get('/kom/rmpnet/deleteMwl1/{id}',  [RmpnetController::class, 'destroyMwl1'])->name('deleteMwl1');

Route::get('kom/rmpnet/editFmbppmportklang/{id}',  [RmpnetController::class, 'editFmbppmportklang']);
Route::post('/kom/rmpnet/updateFmbppmportklang/{id}', [RmpnetController::class, 'updateFmbppmportklang'])->name('updateFmbppmportklang');
Route::get('/kom/rmpnet/deleteFmbppmportklang/{id}',  [RmpnetController::class, 'destroyFmbppmportklang'])->name('deleteFmbppmportklang');

Route::get('kom/rmpnet/editFobkualalinggi/{id}',  [RmpnetController::class, 'editFobkualalinggi']);
Route::post('/kom/rmpnet/updateFobkualalinggi/{id}', [RmpnetController::class, 'updateFobkualalinggi'])->name('updateFobkualalinggi');
Route::get('/kom/rmpnet/deleteFobkualalinggi/{id}',  [RmpnetController::class, 'destroyFobkualalinggi'])->name('deleteFobkualalinggi');

Route::get('kom/rmpnet/editFobbatupahat/{id}',  [RmpnetController::class, 'editFobbatupahat']);
Route::post('/kom/rmpnet/updateFobbatupahat/{id}', [RmpnetController::class, 'updateFobbatupahat'])->name('updateFobbatupahat');
Route::get('/kom/rmpnet/deleteFobbatupahat/{id}',  [RmpnetController::class, 'destroyFobbatupahat'])->name('deleteFobbatupahat');

Route::get('kom/rmpnet/editFobkukup/{id}',  [RmpnetController::class, 'editFobkukup']);
Route::post('/kom/rmpnet/updateFobkukup/{id}', [RmpnetController::class, 'updateFobkukup'])->name('updateFobkukup');
Route::get('/kom/rmpnet/deleteFobkukup/{id}',  [RmpnetController::class, 'destroyFobkukup'])->name('deleteFobkukup');

Route::get('kom/rmpnet/editFmbkdsi/{id}',  [RmpnetController::class, 'editFmbkdsi']);
Route::post('/kom/rmpnet/updateFmbkdsi/{id}', [RmpnetController::class, 'updateFmbkdsi'])->name('updateFmbkdsi');
Route::get('/kom/rmpnet/deleteFmbkdsi/{id}',  [RmpnetController::class, 'destroyFmbkdsi'])->name('deleteFmbkdsi');

Route::get('kom/rmpnet/editFobtelukramunia/{id}',  [RmpnetController::class, 'editFobtelukramunia']);
Route::post('/kom/rmpnet/updateFobtelukramunia/{id}', [RmpnetController::class, 'updateFobtelukramunia'])->name('updateFobtelukramunia');
Route::get('/kom/rmpnet/deleteFobtelukramunia/{id}',  [RmpnetController::class, 'destroyFobtelukramunia'])->name('deleteFobtelukramunia');

Route::get('kom/rmpnet/editMpat/{id}',  [RmpnetController::class, 'editMpat']);
Route::post('/kom/rmpnet/updateMpat/{id}', [RmpnetController::class, 'updateMpat'])->name('updateMpat');
Route::get('/kom/rmpnet/deleteMpat/{id}',  [RmpnetController::class, 'destroyMpat'])->name('deleteMpat');

Route::get('kom/rmpnet/editMwl2/{id}',  [RmpnetController::class, 'editMwl2']);
Route::post('/kom/rmpnet/updateMwl2/{id}', [RmpnetController::class, 'updateMwl2'])->name('updateMwl2');
Route::get('/kom/rmpnet/deleteMwl2/{id}',  [RmpnetController::class, 'destroyMwl2'])->name('deleteMwl2');

Route::get('p4/kembaranA', function () {
    return view('p4/kembaranA');
});
Route::get('p4/kembaranB', function () {
    return view('p4/kembaranB');
});
Route::get('p4/kembaranC', function () {
    return view('p4/kembaranC');
});
Route::get('p4/kembaranD', function () {
    return view('p4/kembaranD');
});


Route::get('test', [TestController::class, 'index']);
Route::resource('updatesis', UpdateSiController::class);

// Route::get('si/markasunit')
// Route::resource('markas/centrixs', 'CentrixsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
