<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nhsSessionController;
use App\Http\Controllers\nhsAccountController;

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

#test session
Route::get('/nhs-session/get',[nhsSessionController::class,'nhsGetSessionData'])->name('nhssession.get');
Route::get('/nhs-session/set',[nhsSessionController::class,'nhsStoreSessionData'])->name('nhssession.set');
Route::get('/nhs-session/del',[nhsSessionController::class,'nhsDeleteSessionData'])->name('nhssession.del');

#Account
Route::get('/nhs-login',[nhsAccountController::class,'nhsLogin'])->name('nhsaccount.nhslogin');
Route::post('/nhs-login',[nhsAccountController::class,'nhsLoginSumit'])->name('nhsaccount.nhsloginsumit');