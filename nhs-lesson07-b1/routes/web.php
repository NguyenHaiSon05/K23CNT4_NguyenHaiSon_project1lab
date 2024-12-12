<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nhsKhoaController;

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


#Khoa
Route::get('/khoas',
        [nhsKhoaController::class,'nhsGetAllKhoa'])->name('nhskhoa.nhsgetallkhoa');
#Khoa - detail
Route::get('/khoas/detail/{makh}',
        [nhsKhoaController::class,'nhsGetKhoa'])->name('nhskhoa.nhsgetKhoa');
#Khoa - edit
Route::get('/khoas/edit/{makh}',
        [nhsKhoaController::class,'nhsEdit'])->name('nhskhoa.nhsEdit');
Route::Post('/khoas/edit',
        [nhsKhoaController::class,'nhsEditSubmit'])->name('nhskhoa.nhsEditSubmit');