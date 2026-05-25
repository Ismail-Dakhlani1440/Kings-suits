<?php

use App\Http\Controllers\Admin\AdminAppointmentController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

// Public client routes
Route::get('/', function () {
    return view('home');
});

Route::get('/collections', function () {
    return view('collections');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Public form handler
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Redirect /admin to /admin/dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

// Protected admin routing group
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments');
    Route::post('/appointments/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])->name('admin.appointments.update');
    Route::post('/appointments/{appointment}/contact', [AdminAppointmentController::class, 'markContacted'])->name('admin.appointments.contact');
});

// Load admin authentication routes
require __DIR__.'/auth.php';
