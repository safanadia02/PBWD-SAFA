<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\prodiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     $mahasiswa = "SAFA";
    $umur = "20";
    return view ('index')->with('m', $mahasiswa) ->with('u', $umur);
 });

//  Route::get('home', function (){
//     //return "Ini adalah halaman Home";
//     return view('home');
//  });

// Route::get('mahasiswa', function (){
//     return "Ini adalah halaman Mahasiswa";
//     return view ('mahasiswa');
//  });

// Route::get('utspbwd', function (){
//     return view ('UTS_PBWD.utspbwd');
//  });

// Route::get('form', function (){
//     return view ('UTS_PBWD.form');
//  });

// Route::get('popice', function() {
//     return view('UTS_PBWD.popice');
// });

// Route::get('inputan', function() {
//     return view('UTS_PBWD.formpop');
// });

Route::get('mahasiswa', [mahasiswaController::class, 'index']);
Route::get('mahasiswa/create', [mahasiswaController::class, 'create']);
Route::post('/mahasiswa', [mahasiswaController::class, 'store']);

Route::get('prodi', [prodiController::class, 'index']);
Route::get('prodi/create', [prodiController::class, 'create']);
Route::post('/prodi', [prodiController::class, 'store']);

