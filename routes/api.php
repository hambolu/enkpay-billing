<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\Billing2Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Clubconnect
Route::get('qtrx',[BillingController::class, 'qtrx'])->name('qtrx');
Route::get('balance',[BillingController::class, 'balance'])->name('balance');
Route::get('buyairtime',[BillingController::class, 'buyairtime'])->name('buyairtime');
Route::get('databundle',[BillingController::class, 'databundle'])->name('databundle');
Route::get('cablesub',[BillingController::class, 'cablesub'])->name('cablesub');
Route::post('vcard',[BillingController::class, 'vcard'])->name('vcard');
Route::get('checkip',[BillingController::class, 'checkip'])->name('checkip');



//VAS

Route::get('billers',[Billing2Controller::class, 'billers'])->name('billers');
Route::get('billersandproducts',[Billing2Controller::class, 'billersandproducts'])->name('billersandproducts');
Route::get('billingfield',[Billing2Controller::class, 'billingfield'])->name('billingfield');
//Route::post('process_trx',[Billing2Controller::class, 'process_trx'])->name('process_trx');


//VAS AIRTIME

Route::post('etisalatAirtime',[Billing2Controller::class, 'etisalatAirtime'])->name('etisalatAirtime');
Route::post('gloAirtime',[Billing2Controller::class, 'gloAirtime'])->name('gloAirtime');
Route::post('airtelAirtime',[Billing2Controller::class, 'airtelAirtime'])->name('airtelAirtime');
Route::post('mtnAirtime',[Billing2Controller::class, 'mtnAirtime'])->name('mtnAirtime');


//VAS DATA

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});