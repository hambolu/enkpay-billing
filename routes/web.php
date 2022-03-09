<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\Billing2Controller;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AgentsController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('buyairtime',[BillingController::class, 'buyairtime'])->name('buyairtime');
Route::get('qtrx',[BillingController::class, 'qtrx'])->name('qtrx');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::post('gotv',[Billing2Controller::class, 'gotv'])->name('gotv');
Route::get('/agents/dashboard', [AgentsController::class, 'transactions'])->name('transactions');
Route::get('/', [RoutingController::class, 'Authcheck'])->name('Authcheck');
Route::get('/admin/index', [RoutingController::class, 'Authcheck2'])->name('Authcheck2');
Route::get('/agents/dashboard', [AuthenticationController::class, 'users'])->name('users');
Route::post('users', [AuthenticationController::class, 'users'])->name('users');