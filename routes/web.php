<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ContactController;

// Public
Route::get('/',             fn() => view('home'));
Route::get('/stats',        fn() => view('stats'));
Route::get('/access-denied', [DashboardController::class, 'accessDenied']);

// Auth
Route::get('/login',    [AuthController::class, 'showLogin']);
Route::post('/login',   [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register',[AuthController::class, 'register']);
Route::post('/logout',  [AuthController::class, 'logout'])->middleware('auth');

// Authenticated
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/upload',    [UploadController::class,    'index']);
    Route::post('/upload',   [UploadController::class,    'store']);
    Route::get('/contact',   [ContactController::class,   'index']);
    Route::post('/contact',  [ContactController::class,   'send']);
});

// Role-protected
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'adminPanel']);
});

Route::middleware(['auth', 'role:admin,journalist'])->group(function () {
    Route::get('/press', [DashboardController::class, 'pressRoom']);
});

Route::middleware(['auth', 'role:admin,vip_member'])->group(function () {
    Route::get('/vip', [DashboardController::class, 'vipLounge']);
});

Route::middleware(['auth', 'role:admin,journalist,vip_member,fan'])->group(function () {
    Route::get('/fanzone', [DashboardController::class, 'fanZone']);
});