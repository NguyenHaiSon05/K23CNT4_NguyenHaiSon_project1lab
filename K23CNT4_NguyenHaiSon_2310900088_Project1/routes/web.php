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

#Admin - route
Route::get('/nhs-admin',function(){
    return view('nhsAdmins.index');
});

Route::get('/nhs-admins/nhs-loai-san-pham',[NHS_LOAI_SAN_PHAMController::class,'nhsList'])
     ->name('nhsadmins.nhsloaisanpham');
Route::get('/nhs-admins/nhs-loai-san-pham/nhs-create',[NHS_LOAI_SAN_PHAMController::class,'nhsCreate'])
     ->name('nhsadmins.nhsloaisanpham.nhscreate');
Route::get('/nhs-admins/nhs-loai-san-pham/nhs-create',[NHS_LOAI_SAN_PHAMController::class,'nhsCreateSubmit'])
     ->name('nhsadmins.nhsloaisanpham.nhscreatesubmit');
# edit LOAI_SAN_PHAM
Route::get('/nhs-admins/nhs-loai-san-pham/nhs-edit/{id}',[NHS_LOAI_SAN_PHAMController::class,'nhsEdit'])
     ->name('nhsadmins.nhsloaisanpham.nhsedit');
