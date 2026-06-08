<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentPortalController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ContactController;

// ==================== MAIN WEBSITE ROUTES ====================

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// About page
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// ==================== NEWS ROUTES ====================
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// ==================== PROGRAMS ROUTES ====================
// Main programs listing
Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');

// Department program listings
Route::get('/programs/clinical-medicine', [ProgramsController::class, 'clinicalMedicine'])->name('programs.clinical-medicine');
Route::get('/programs/nursing-midwifery', [ProgramsController::class, 'nursingMidwifery'])->name('programs.nursing-midwifery');
Route::get('/programs/psycho-social-counselling', [ProgramsController::class, 'psychoSocialCounselling'])->name('programs.psycho-social-counselling');

// Individual program details (must be last to avoid conflict with department routes)
Route::get('/programs/{slug}', [ProgramsController::class, 'show'])->name('programs.show');

// ==================== OTHER MAIN PAGES ====================
Route::get('/research', [ResearchController::class, 'index'])->name('research');
Route::get('/students', [StudentsController::class, 'index'])->name('students');
Route::get('/library', [LibraryController::class, 'index'])->name('library');

// ==================== ENROLLMENT ROUTES ====================
Route::get('/enroll', [EnrollController::class, 'index'])->name('enroll');
Route::post('/enroll/submit', [EnrollController::class, 'submitApplication'])->name('enroll.submit');

// ==================== ADMINISTRATION ROUTES ====================
// Staff directory
//Route::get('/staff', [StaffController::class, 'index'])->name('staff');

// Executive team route (add this if not exists)
Route::get('/executive-team', function () {
    return view('pages.staff.executive-team');
})->name('executive-team');

Route::get('/staff', function () {
    return view('pages.staff.general-staff');
})->name('staff');

// ==================== RESOURCES ROUTES ====================
Route::get('/downloads', function () {
    return view('pages.downloads.resources');
})->name('downloads');



// ==================== SEARCH ROUTES ====================
Route::get('/search', function () {
    $query = request()->get('q');
    return view('search-results', compact('query'));
})->name('search');

// ==================== NEWSLETTER ROUTES ====================
Route::post('/newsletter/subscribe', function () {
    return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
})->name('newsletter.subscribe');