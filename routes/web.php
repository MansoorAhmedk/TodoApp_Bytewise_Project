<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', function(){
    Auth::logout();
    redirect('/');
});

Route::get('/login',[ItemController::class,'showItems']);
Route::get('/add',[ItemController::class,'addItems']);
Route::get('/delete',[ItemController::class,'deleteItems']);

Route::get('excel',function(){
    return view('excel');
});
Route::get('export-items',[\App\Http\Controllers\ItemsController::class,'exportitems'])->name('export-items');
Route::post('import-items',[\App\Http\Controllers\ItemsController::class,'importitems'])->name('import-items');
