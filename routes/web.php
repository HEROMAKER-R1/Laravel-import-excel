<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExcelController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import_excel', 'App\Http\Controllers\ImportExcelController@index');
Route::post('/import_excel/import', 'App\Http\Controllers\ImportExcelController@import');
