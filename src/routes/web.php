<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;

// ---------------------
// Main Domain Routes
// ---------------------
Route::get('/', fn() => view('dashboardpages.home'))->name('home');
Route::get('/games', fn() => view('dashboardpages.games'));
Route::get('/simulation', fn() => view('dashboardpages.simulation'));
Route::get('/resources', fn() => view('dashboardpages.sources'))->name('sources');
Route::get('/assessment', fn() => view('dashboardpages.assessment'))->name('assessment');

// Profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::post('/profile/update-username', [ProfileController::class, 'updateUsername'])->name('profile.updateUsername');
Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

// Login / Registration (main domain)
Route::get('/loginregis', [AuthController::class, 'showloginregis'])->name('login');
Route::post('/loginregis', [AuthController::class, 'loginOrRegister'])->name('loginOrRegister');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/forgetpassword', fn() => view('forgetpass'))->name('password.request');
    Route::post('/forgetpassword', [ResetPasswordController::class, 'passwordEmail']);
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');
});

// Include other route files
require __DIR__.'/admin.php';
require __DIR__.'/assessment.php';
require __DIR__.'/games.php';
require __DIR__.'/simulation.php';
require __DIR__.'/submission.php';

// ---------------------
// Subdomain Routes (explicitly defined)
// ---------------------

// renew-microsoft-billing-secure.127.0.0.1.nip.io
Route::domain('renew-microsoft-billing-secure.127.0.0.1.nip.io')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.microsoft.login');
    })->name('microsoft.login');

    Route::get('/pwd', function () {
        return view('sim-template.microsoft.pwd');
    })->name('microsoft.pwd');
});

// netflix-billing-check.127.0.0.1.nip.io
Route::domain('netflix-billing-check.127.0.0.1.nip.io')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.netflix.login');
    })->name('netflix.login');
});

// fedex-shipment-confirm.127.0.0.1.nip.io
Route::domain('fedex-shipment-confirm.127.0.0.1.nip.io')->group(function () {
    Route::get('/secure-login', function () {
        return view('sim-template.fedex.login');
    })->name('fedex.login');
});

// drive-googles-docviewer.127.0.0.1.nip.io
Route::domain('drive-googles-docviewer.127.0.0.1.nip.io')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.googledrive.login');
    })->name('googledrive.login');

    Route::get('/pwd', function () {
        return view('sim-template.googledrive.pwd');
    })->name('googledrive.pwd');

    Route::get('/verification', function () {
        return view('sim-template.googledrive.verification');
    })->name('googledrive.verification');
});

// appleid.127.0.0.1.nip.io
Route::domain('appleid.127.0.0.1.nip.io')->group(function () {
    Route::get('/login', function () {
        return view('sim-template.apple.login');
    })->name('apple.login');
});

// amazon-win.127.0.0.1.nip.io
Route::domain('amazon-win.127.0.0.1.nip.io')->group(function () {
    Route::get('/signin', function () {
        return view('sim-template.amazon.login');
    })->name('amazon.login');

    Route::get('/ap/signin', function () {
        return view('sim-template.amazon.signin');
    })->name('amazon.password');
});
