<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginAffiliatorController;
use App\Http\Controllers\LoginAgentController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\LoginVendorController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});


//menu admin
Route::get('/login/admin', function () {
    return view('admin.login');
});
Route::post('/create/admin', [LoginAdminController::class, 'create'])->name('login.create.admin');
Route::get('/logout/admin', [LoginAdminController::class, 'logout'])->name('logout.admin');
Route::group(['middleware' => 'auth:admin'], function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});

//menu agent
Route::get('/login/agent', function () {
    return view('agent.login');
});
Route::post('/create/agent', [LoginAgentController::class, 'create'])->name('login.create.agent');
Route::get('/logout/agent', [LoginAgentController::class, 'logout'])->name('logout.agent');
Route::group(['middleware' => 'auth:agent'], function(){
    Route::get('/agent/dashboard', [DashboardController::class, 'agent'])->name('agent.dashboard');
});

//menu affiliator
Route::get('/login/affiliator', function () {
    return view('affiliator.login');
});
Route::post('/create/affiliator', [LoginAffiliatorController::class, 'create'])->name('login.create.affiliator');
Route::get('/logout/affiliator', [LoginAffiliatorController::class, 'logout'])->name('logout.affiliator');
Route::group(['middleware' => 'auth:affiliator'], function(){
    Route::get('/affiliator/dashboard', [DashboardController::class, 'affiliator'])->name('affiliator.dashboard');
});

//menu user
Route::get('/login/user', function () {
    return view('user.login');
});
Route::post('/create/user', [LoginUserController::class, 'create'])->name('login.create.user');
Route::get('/logout/user', [LoginUserController::class, 'logout'])->name('logout.user');
Route::group(['middleware' => 'auth:user'], function(){
    Route::get('/user/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');
});

//menu vendor
Route::get('/login/vendor', function () {
    return view('vendor.login');
});
Route::post('/create/vendor', [LoginVendorController::class, 'create'])->name('login.create.vendor');
Route::get('/logout/vendor', [LoginVendorController::class, 'logout'])->name('logout.vendor');
Route::group(['middleware' => 'auth:vendor'], function(){
    Route::get('/vendor/dashboard', [DashboardController::class, 'vendor'])->name('vendor.dashboard');
});