<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Login
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.Home')->middleware('is_admin');

//Bill Print
Route::get('/bill-print', [BillController::class, 'billPrint'])->name('bills.print');
//Bill Cal
Route::post('/bill-cal', [BillController::class, 'billCal'])->name('bills.cal');
//Bill Print
Route::get('/bill-view', [BillController::class, 'billView'])->name('bills.view');

//For adding an image
Route::get('/add-image', [ImageUploadController::class, 'addImage'])->name('images.add');
//For storing an image
Route::post('/store-image', [ImageUploadController::class, 'storeImage'])->name('images.store');
//For showing an image
Route::get('/view-image', [ImageUploadController::class, 'viewImage'])->name('images.view');