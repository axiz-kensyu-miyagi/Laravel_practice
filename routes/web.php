<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use Illuminate\Http\Request;

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

// サンプル
Route::get('/', function () {
    return view('calc');
});
Route::post('/calc', [CalcController::class, 'calc']);







// 不要なやつ
Route::get('/list', [CalcController::class, 'filter']);
Route::get('/detail/{id}', [CalcController::class, 'detail']);