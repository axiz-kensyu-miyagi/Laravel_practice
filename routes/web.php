<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PstudentController;

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


//
Route::get('/index', function(){
    return view('index');
});

Route::get('/a', function(){
    return view('a');
});

Route::post('/sum', [IndexController::class, 'sum']);
//Route::methodの形式('読込先', [読み込み先のファイル名,'関数名']);

//
Route::get('/insert', function(){
    return view('insert');
});

Route::post('/animal-insert',[IndexController::class, 'insert']);


Route::get('/list',[AnimalController::class, 'index']);

Route::post('/regist',[AnimalController::class, 'regist']);


//演習問題2
Route::get('/pinsert', function(){
    return view('pinsert');
});
Route::get('/pinsert',[PstudentController::class, 'index']);

Route::post('/student_regist',[PstudentController::class, 'student_regist']);





// 不要なやつ
//Route::get('/list', [CalcController::class, 'filter']);
//Route::get('/detail/{id}', [CalcController::class, 'detail']);