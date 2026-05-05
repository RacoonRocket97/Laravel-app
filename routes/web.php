<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

// --- Public Routes ---
Route::get('/',         fn() => view('home'))->name('home');
Route::get('/stats',    fn() => view('stats'))->name('stats');
Route::get('/access-denied', [DashboardController::class, 'accessDenied'])->name('access.denied');
Route::get('/lang/{locale}', [LocaleController::class, 'switch'])->name('lang.switch');

// New Public Pages (Navbar)
Route::view('/social-media', 'social-media')->name('social.media');
Route::view('/terms-and-conditions', 'terms-and-contitions')->name('terms'); // Note: Matched your file spelling

// --- Guest/Auth Routes ---
Route::middleware('guest')->group(function () {
    Route::get('/login',     [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',    [AuthController::class, 'login']);
    Route::get('/register',  [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// --- Authenticated Routes ---
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Uploads & Contact
    Route::get('/upload',    [UploadController::class, 'index'])->name('upload.index');
    Route::post('/upload',   [UploadController::class, 'store'])->name('upload.store');
    Route::get('/contact',   [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact',  [ContactController::class, 'send'])->name('contact.send');
    
    // New Protected Pages
    Route::get('/price-list', [DashboardController::class, 'priceList'])->name('price.list');
    Route::get('/vip-price-list', [DashboardController::class, 'vipPriceList'])->name('price.vip');
    Route::get('/faq', [DashboardController::class, 'faq'])->name('faq');
    Route::get('/biography', [DashboardController::class, 'biography'])->name('biography');

    // Logout
    Route::post('/logout',   [AuthController::class, 'logout'])->name('logout');
});

// --- Role-Protected (Admin Only) ---
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin',     [DashboardController::class, 'adminPanel'])->name('admin.panel');
});