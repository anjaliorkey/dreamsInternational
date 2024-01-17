<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::get('/homeDash', function () {
    return view('home');
});

Route::get('/onlineForm', function () {
    return view('onlineForm');
});

Route::get('/agreTable', function () {
    return view('AggriUsertable');
});

Route::get('/blogs', [HomeController::class, 'indexHomeViewDashboard'])->name('blogs');


Route::get('/HomeContact', function () {
    return view('ContactDashboard');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save', [App\Http\Controllers\HomeController::class, 'formSave'])->name('save');
Route::get('/table', [App\Http\Controllers\HomeController::class, 'formtable'])->name('table');
Route::get('/{ids}', [App\Http\Controllers\HomeController::class, 'formedit'])->name('edit');
Route::post('/Update', [App\Http\Controllers\HomeController::class, 'formupdate'])->name('Update');
Route::get('/delete/{ids}', [App\Http\Controllers\HomeController::class, 'formdelete'])->name('delete');
Route::get('/onlineForm', [App\Http\Controllers\HomeController::class, 'formOnline'])->name('onlineForm');
Route::post('/onlineFormSave', [App\Http\Controllers\HomeController::class, 'rentForm'])->name('onlineFormSave');
Route::get('/agreTable', [App\Http\Controllers\HomeController::class, 'AggrimentUsertable'])->name('agreTable');
Route::get('/editDemo/{idsDemo}/{id}', [App\Http\Controllers\HomeController::class, 'Agreeformedit'])->name('editDemo');
Route::post('/UpdateDemo', [App\Http\Controllers\HomeController::class, 'formupdateDemo'])->name('UpdateDemo');
Route::get('/deleteDemo/{idsText}/{id}', [App\Http\Controllers\HomeController::class, 'Agreeformdelete'])->name('delete');


 


