<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('kom/index', function () {
    return view('kom/index');
});

Route::get('kom/centrixs', function () {
    return view('kom/centrixs');
});

Route::get('markas/centrixs', function () {
    return view('markas/centrixs');
});

Route::get('markas/fbb', function () {
    return view('markas/fbb');
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

// Route::resource('markas/centrixs', 'CentrixsController');