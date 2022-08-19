<?php

use App\Http\Controllers\PDF\ItemController;
use App\Http\Controllers\SendDataController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $data = $data = DB::table('main_pages')->where('lang', '=', 'ru')->get();
    return view('indexMain')->with('data', $data);
});



Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/send-data', [SendDataController::class, 'index'])->name('sendData');

Route::get('/switch-lang/{lang}', [\App\Http\Controllers\SwitchLangController::class, 'index'])->name('switch-lang');

Route::get('/send-message', [\App\Http\Controllers\SendEmailController::class, 'index'] )->name('send-message');
