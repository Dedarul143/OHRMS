<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RentCollectionController;    
use App\Http\Controllers\FlatSetupController;
use App\Http\Controllers\HousesetupController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/dashboard',[DashboardController::class,'view'])->name('dashboard');
 Route::get('/admin',[ AdminController::class,'help'])->name('admin');
 Route::get('/Rent-Collection',[RentCollectionController::class,'column'])->name('Rent-Collection');
 Route::get('/Flat-Setup',[FlatSetupController::class,'flor'])->name('Flat-Setup');
 Route::get('/House-setup',[HousesetupController::class,'Houses'])->name('House-setup');
 Route::get('/Tenant',[TenantController::class,'Houses'])->name('Tenant');
 Route::get('/Service',[ServiceController::class,'Houses'])->name('Service');
 Route::get('/Complain',[ComplainController::class,'Houses'])->name('Complain');
 Route::get('/Notice',[NoticeController::class,'Houses'])->name('Notice');
 Route::get('/Rules',[RulesController::class,'Houses'])->name('Rules');
 Route::get('/Report',[ReportController::class,'Houses'])->name('Report');