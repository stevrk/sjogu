<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentPortalController;



// University website routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



// Student Portal Routes (no backend - demo)

Route::prefix('portal')->group(function () {

    Route::get('/', [StudentPortalController::class,'dashboard'])->name('portal.dashboard');
    Route::get('/courses', [StudentPortalController::class, 'courses'])->name('portal.courses');
    Route::get('/grades', [StudentPortalController::class, 'grades'])->name('portal.grades');
    Route::get('/attendance', [StudentPortalController::class, 'attendance'])->name('portal.attendance');
});





// Student Portal Routes
Route::prefix('portal')->group(function () {
    
    Route::get('/login', [StudentPortalController::class,'login'])->name('portal.login');
    Route::get('/Dashboard', [StudentPortalController::class, 'dashboard'])->name('portal.dashboard');
    Route::get('/courses', [StudentPortalController::class, 'courses'])->name('portal.courses');
    Route::get('/grades', [StudentPortalController::class, 'grades'])->name('portal.grades');
    Route::get('/attendance', [StudentPortalController::class, 'attendance'])->name('portal.attendance');
    Route::get('/fees', [StudentPortalController::class, 'fees'])->name('portal.fees');
    Route::get('/profile', [StudentPortalController::class, 'profile'])->name('portal.profile');
   
   Route::get('/staff-login', function () {
    return view('portal.staff_login');
    })->name('staff.login');

    Route::get('/staff-dashboard', [StudentPortalController::class, 'staffDashboard'])->name('staff.dashboard');
    });

