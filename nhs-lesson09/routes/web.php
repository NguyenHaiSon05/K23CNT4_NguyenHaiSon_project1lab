<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nhsSinhVienController;
use App\Http\Controllers\nhsLoginController;

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

#SinhVien-Model
Route::get('/nhs-sinhviens',[nhsSinhVienController::class,'nhsList'])->name('nhsSinhVien.nhsList');
Route::get('/nhs-sinhviens/create',[nhsSinhVienController::class,'nhsCreate'])->name('nhsSinhVien.nhsCreate');
Route::post('/nhs-sinhviens/create',[nhsSinhVienController::class,'nhsCreateSubmit'])->name('nhsSinhVien.nhsCreateSubmit');
