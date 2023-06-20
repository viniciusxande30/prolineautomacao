<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'homeIndex'])->name('homeIndex');
Route::get('/contato', function () {
    return view('contato');
});


Route::get('/automacao', function () {
    return view('automacao');
});
Route::get('/aspiracao', function () {
    return view('aspiracao');
});
Route::get('/hometheater', function () {
    return view('hometheater');
});
Route::get('/monitoramento', function () {
    return view('monitoramento');
});
Route::get('/sonorizacao', function () {
    return view('sonorizacao');
});
Route::get('/wifi', function () {
    return view('wifi');
});
Route::get('/corporativo', function () {
    return view('corporativo');
});


Route::post('/envio-cotacao',[Controller::class,'quotationApi'])->name('quotationApi');
