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

use App\Http\Controllers\HomeController;



use App\Filament\Pages\ChangePassword;


use App\Http\Controllers\Auth\AdminLogoutController;

Route::post('/admin/logout', function () {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/admin/login');
})->name('filament.admin.auth.logout');

// Home page
Route::get('/', [HomeController::class, 'home'])->name('home');

// About page
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// ==================== NEWS ROUTES ====================
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');




// Department programs route - using ID
Route::get('/programs/department/{id}', [ProgramsController::class, 'byDepartment'])->name('programs.department');

Route::get('/programs/{id}', [ProgramsController::class,'show'])->name('programs.show');




// ==================== OTHER MAIN PAGES ====================
Route::get('/research', [ResearchController::class, 'index'])->name('research');
Route::get('/students', [StudentsController::class, 'index'])->name('students');
Route::get('/library', [LibraryController::class, 'index'])->name('library');
Route::post('/library/enquiry', [LibraryController::class, 'storeEnquiry'])->name('library.enquiry.store');

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
    return view('pages.resources.resources');
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


Route::delete('/admin/news/{record}/delete-image', function ($record) {
    $news = News::findOrFail($record);
    $news->image = null;
    $news->save();
    return response()->json(['success' => true]);
})->name('filament.admin.resources.news.delete-image');