<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceProviderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\WaitingListController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',function(){
return view('dashboard.index');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Users Management
    Route::resource('users', UserController::class)->names('admin.users');

    // Service Providers Management
    Route::resource('service-providers', ServiceProviderController::class)->names('admin.service-providers');

    // Services Management
    Route::resource('services', ServiceController::class)->names('admin.services');

    // Appointments Management
    Route::resource('appointments', AppointmentController::class)->names('admin.appointments');

    // Categories Management
    Route::resource('categories', CategoryController::class)->names('admin.categories');

    // Payments Management
    Route::resource('payments', PaymentController::class)->names('admin.payments');

    // Reviews Management
    Route::resource('reviews', ReviewController::class)->names('admin.reviews');

    // Notifications Management
    Route::resource('notifications', NotificationController::class)->names('admin.notifications');

    // Reports & Analytics
    Route::get('reports', [ReportController::class, 'index'])->name('admin.reports');

    // Settings
    Route::get('settings', [SettingController::class, 'index'])->name('admin.settings');

    // Waiting List
    Route::resource('waiting-list', WaitingListController::class)->names('admin.waiting-list');

    // Coupons & Discounts
    Route::resource('coupons', CouponController::class)->names('admin.coupons');

    // Admin Management
    Route::resource('admins', AdminController::class)->names('admin.admins');

    Route::resource('availabilities', AvailabilityController::class);

});
