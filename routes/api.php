<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getregistered','App\Http\Controllers\RegisteredController@index');

//Cari
Route::get('/cari','App\Http\Controllers\RegisteredController@cari');

//Poli
Route::get('/getpoli','App\Http\Controllers\RegisteredController@Poliklinik');
Route::get('/poli/{kode}','App\Http\Controllers\RegisteredController@showpoli');
//Route::resource('/getregistered',RegisteredController::class);
//Antrian A
//Route::get('/panggil/{id}/{tglreg}/{noreg}','App\Http\Controllers\RegisteredController@show');
Route::post('/antrian/store','App\Http\Controllers\RegisteredController@store');
Route::post('/antrian/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@update');
//Route::get('/antrian/hapus/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@destroy');

//Antrian B
Route::post('/antrian/storeb','App\Http\Controllers\RegisteredController@storeb');
Route::post('/antrianb/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@updateb');

//Antrian C
Route::post('/antrian/storec','App\Http\Controllers\RegisteredController@storec');
Route::post('/antrianc/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@updatec');
//Antrian D
Route::post('/antrian/stored','App\Http\Controllers\RegisteredController@stored');
Route::post('/antriand/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@updated');
//Antrian E
Route::post('/antrian/storee','App\Http\Controllers\RegisteredController@storee');
Route::post('/antriane/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@updatee');
//Antrian F
Route::post('/antrian/storef','App\Http\Controllers\RegisteredController@storef');
Route::post('/antrianf/update/{tgl}/{norm}/{dokter}/{poli}','App\Http\Controllers\RegisteredController@updatef');

