<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\PharmacistController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\User\OrderController; // We'll create this controller
use App\Models\Order;


// Public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/choose', [HomeController::class, 'choose'])->name('choose');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Authentication routes
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.submit');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.submit');

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');

// Profile routes
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('pharmacist', PharmacistController::class);
    Route::resource('medicine', MedicineController::class);
    Route::get('report', [ReportController::class, 'index'])->name('report.index');
});

// User routes
Route::prefix('user')->name('user.')->group(function () {
    Route::get('order-medicine', [OrderController::class, 'create'])->name('order_medicine');
    Route::post('order-medicine', [OrderController::class, 'store'])->name('order_medicine.submit');
    Route::get('view-orders', [OrderController::class, 'index'])->name('view_orders');
    Route::get('order-history', [OrderController::class, 'history'])->name('order_history');
});
Route::get('order-receipt/{order}', [OrderController::class, 'receipt'])->name('order_receipt');


