<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\PharmacistController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\User\OrderController;

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
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

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
Route::prefix('user')->name('user.')->middleware('auth')->group(function () {
    Route::get('dashboard', [OrderController::class, 'dashboard'])->name('dashboard');
    Route::get('order-medicine', [OrderController::class, 'showOrderForm'])->name('order_medicine');
    Route::post('order-medicine', [OrderController::class, 'submitOrder'])->name('order_medicine.submit');
    Route::get('bill/{order}', [OrderController::class, 'showBill'])->name('bill');
    Route::get('view-orders', [OrderController::class, 'viewOrders'])->name('view_orders');
    Route::get('order-history', [OrderController::class, 'orderHistory'])->name('order_history');
    Route::get('payment/{order}', [OrderController::class, 'showPayment'])->name('payment');
    Route::post('payment/{order}/confirm', [OrderController::class, 'confirmPayment'])->name('confirm_payment');
    Route::get('payment/{order}/success', [OrderController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('receipt/{order}/download', [OrderController::class, 'downloadReceipt'])->name('receipt.download');

    
});