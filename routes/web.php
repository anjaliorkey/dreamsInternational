<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save', [App\Http\Controllers\HomeController::class, 'formSave'])->name('save');
Route::get('/table', [App\Http\Controllers\HomeController::class, 'formtable'])->name('table');
Route::get('/{ids}', [App\Http\Controllers\HomeController::class, 'formedit'])->name('edit');
Route::get('/{ids}', [App\Http\Controllers\HomeController::class, 'formedit'])->name('edit');
Route::post('/Update', [App\Http\Controllers\HomeController::class, 'formupdate'])->name('Update');
Route::get('/delete/{ids}', [App\Http\Controllers\HomeController::class, 'formdelete'])->name('delete');
