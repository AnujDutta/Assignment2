<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyContoller;
use App\Http\Controllers\MyControllertest;
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
    return view('welcome');
});

Route::get('/1',  [ MyControllertest::class,'index']);
Route::post('/2',  [ MyControllertest::class,'store']);
Route::get('1/admission_data',  [ MyControllertest::class,'showDataTable']);

