<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admins/nhs-login',[NHS_QUAN_TRIController::class,'nhslogin'])->name('admins.nhsLogin');
Route::post('/admins/nhs-login',[NHS_QUAN_TRIController::class,'nhsLoginSubmit'])->name('admins.nhsLoginSubmit');