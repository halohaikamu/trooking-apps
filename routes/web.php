<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\PricelistController;
use App\Http\Controllers\Admin\PaymentsController;
use App\Http\Controllers\Admin\TrackingController;
use App\Http\Controllers\Admin\HistoryOrderController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\User\ChangeEmailController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\InformasiUserController;
use App\Http\Controllers\User\HistoryOrderUserController;
use App\Http\Controllers\User\CekOngkirController;
use App\Http\Controllers\User\LandingPageController;
use App\Http\Controllers\User\PesananUserController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\User\GoogleUserController;
use App\Http\Controllers\Affiliator\RegisterAffiliatorController;
use App\Http\Controllers\Affiliator\DashboardAffiliatorController;
use App\Http\Controllers\Affiliator\LoginAffiliatorController;
use App\Http\Controllers\Affiliator\DataAffiliatorController;
use App\Http\Controllers\Agent\LoginAgentController;
use App\Http\Controllers\Vendor\LoginVendorController;
use App\Http\Controllers\Vendor\DataVendorController;
use App\Http\Controllers\Vendor\GoogleVendorController;
use App\Http\Controllers\Affiliator\DatadiriAffiliatorController;

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});


//menu admin
Route::get('/login/admin', function () {
    return view('admin.login');
});
Route::post('/create/admin', [LoginAdminController::class, 'create'])->name('login.create.admin');
Route::get('/logout/admin', [LoginAdminController::class, 'logout'])->name('logout.admin');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin-pesanan', PesananController::class);
    Route::resource('admin-informasi', InformasiController::class);
    Route::resource('user', UserAdminController::class);
    Route::resource('admin-pricelist', PricelistController::class);
    Route::resource('admin-payments', PaymentsController::class);
    Route::resource('admin-history-order', HistoryOrderController::class);
});

//menu agent
Route::get('/login/agent', function () {
    return view('agent.login');
});
Route::post('/create/agent', [LoginAgentController::class, 'create'])->name('login.create.agent');
Route::get('/logout/agent', [LoginAgentController::class, 'logout'])->name('logout.agent');
Route::group(['prefix' => 'agent', 'middleware' => 'auth:agent', 'verified'], function () {
    Route::get('/dashboard', [DashboardController::class, 'agent'])->name('agent.dashboard');
});

//menu affiliator
Route::get('/login/affiliator', function () {
    return view('affiliator.login');
});
Route::post('/create/affiliator', [LoginAffiliatorController::class, 'create'])->name('login.create.affiliator');
Route::get('/logout/affiliator', [LoginAffiliatorController::class, 'logout'])->name('logout.affiliator');
Route::get('/register/affiliator', function () {
    return view('affiliator.register');
});
Route::post('/store/affiliator', [RegisterAffiliatorController::class, 'store'])->name('register.create.affiliator');
Route::group(['prefix' => 'affiliator', 'middleware' => 'auth:affiliator', 'verified'], function () {
    Route::get('/dashboard', [DashboardAffiliatorController::class, 'index'])->name('affiliator.dashboard');
<<<<<<< HEAD
    Route::resource('affiliator-data-diri', DataAffiliatorController::class);
=======
    Route::resource('datadiri', DatadiriAffiliatorController::class);
>>>>>>> 43f9a4851b5564829bcc10a5e3b9044fa73c80bb
});

//menu user
Route::get('/login/user', function () {
    return view('user.login');
});
Route::post('/create/user', [LoginUserController::class, 'create'])->name('login.create.user');
Route::get('/logout/user', [LoginUserController::class, 'logout'])->name('logout.user');
Route::get('/register/user', function () {
    return view('user.register');
});
Route::post('/store/user', [RegisterUserController::class, 'store'])->name('register.create.user');
Route::get('/landing-page', function () {
    return view('user.landingPage');
});
Route::get('user/auth/google', [GoogleUserController::class, 'redirectToGoogle']);
Route::get('user/callback/google', [GoogleUserController::class, 'handleCallback']);
Route::group(['prefix' => 'user', 'middleware' => 'auth:user', 'verified'], function () {
    Route::get('/dashboard', [DashboardUserController::class, 'index'])->name('user.dashboard');
    Route::get('forgot-password', [ChangePasswordController::class, 'forgotPassword'])->name('user.dashboard.forgot-password');
    Route::post('forgot-password', [ChangePasswordController::class, 'resetPassword'])->name('user.dashboard.forgot-password');
    Route::get('forgot-email', [ChangeEmailController::class, 'forgotEmail'])->name('user.dashboard.forgot-email');
    Route::post('forgot-email', [ChangeEmailController::class, 'resetEmail'])->name('user.dashboard.forgot-email');
    Route::resource('informasi', InformasiUserController::class);
    Route::resource('history-order', HistoryOrderUserController::class);
    Route::resource('pesanan', PesananUserController::class);
    Route::resource('cek-ongkir', CekOngkirController::class);
});
Route::get('forgot-password/{token}', [ChangePasswordController::class, 'forgotPasswordValidate']);
Route::put('reset-password', [ChangePasswordController::class, 'updatePassword'])->name('user.dashboard.reset-password');
Route::get('forgot-email/{token}', [ChangeEmailController::class, 'forgotEmailValidate']);
Route::put('reset-email', [ChangeEmailController::class, 'updateEmail'])->name('user.dashboard.reset-email');
//menu vendor
Route::get('/login/vendor', function () {
    return view('vendor.login');
});
Route::get('vendor/auth/google', [GoogleVendorController::class, 'redirectToGoogle']);
Route::get('vendor/callback/google', [GoogleVendorController::class, 'handleCallback']);
Route::post('/create/vendor', [LoginVendorController::class, 'create'])->name('login.create.vendor');
Route::get('/logout/vendor', [LoginVendorController::class, 'logout'])->name('logout.vendor');
Route::group(['prefix' => 'vendor', 'middleware' => 'auth:vendor'], function () {
    Route::get('/dashboard', [DashboardController::class, 'vendor'])->name('vendor.dashboard');
    Route::resource('data-diri', DataVendorController::class);
});

//auth google
// Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('callback/google', [GoogleController::class, 'handleCallback']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});
