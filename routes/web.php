<?php

use App\Http\Controllers\CsrController;
use App\Http\Controllers\CsrEvaluationController;
use App\Http\Controllers\CsrTabulationController;
use App\Http\Controllers\SqdCsrEvaluationController;
use App\Http\Controllers\SrfController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    

    Route::resource('srf', SrfController::class);
    Route::resource('csr', CsrController::class);
    Route::resource('csr-tabulation', CsrTabulationController::class);
    Route::resource('cc-csr-evaluation', CsrEvaluationController::class);
    Route::resource('sqd-csr-evaluation', SqdCsrEvaluationController::class);
});

