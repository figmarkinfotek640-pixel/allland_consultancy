<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;

/*
|--------------------------------------------------------------------------
| Public Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// International Career Placements (Germany, UK, Saudi Arabia & Gulf)
Route::get('/germany-placement', [PlacementController::class, 'germany'])->name('placement.germany');
Route::get('/uk-placement', [PlacementController::class, 'uk'])->name('placement.uk');
Route::get('/saudi-arabia-placement', [PlacementController::class, 'saudiArabia'])->name('placement.saudi-arabia');
Route::get('/gulf-placement', fn() => redirect()->route('placement.saudi-arabia'));
Route::get('/placement/germany', fn() => redirect()->route('placement.germany'));
Route::get('/placement/uk', fn() => redirect()->route('placement.uk'));
Route::get('/placement/saudi-arabia', fn() => redirect()->route('placement.saudi-arabia'));
Route::get('/services/placement-assistance/germany', fn() => redirect()->route('placement.germany'));
Route::get('/services/placement-assistance/uk', fn() => redirect()->route('placement.uk'));
Route::get('/services/placement-assistance/saudi-arabia', fn() => redirect()->route('placement.saudi-arabia'));

// Study Abroad & Destinations
Route::get('/study-abroad', function () {
    $first = \App\Models\Destination::active()->first();
    return $first ? redirect()->route('destinations.show', $first->slug) : redirect()->route('home');
})->name('study-abroad');
Route::get('/study-abroad/{slug}', [DestinationController::class, 'show'])->name('destinations.show');
Route::get('/destinations/{slug}', fn($slug) => redirect()->route('destinations.show', $slug));
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');

// Exclusives (Ausbildung, NHS, Chancenkarte)
Route::get('/exclusives', [PageController::class, 'exclusives'])->name('exclusives');

// Events & Webinars
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

// Blog & Updates
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Contact & Lead Generation
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/inquire', [ContactController::class, 'submit'])->name('inquire.submit');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Authenticated Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    // Destinations CRUD
    Route::resource('destinations', AdminDestinationController::class);

    // Services CRUD
    Route::resource('services', AdminServiceController::class);

    // Courses CRUD
    Route::resource('courses', AdminCourseController::class);

    // Events CRUD
    Route::resource('events', AdminEventController::class);

    // Blogs CRUD
    Route::resource('blogs', AdminBlogController::class);

    // Inquiries Management
    Route::get('inquiries', [AdminInquiryController::class, 'index'])->name('inquiries.index');
    Route::get('inquiries/{inquiry}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
    Route::patch('inquiries/{inquiry}/status', [AdminInquiryController::class, 'updateStatus'])->name('inquiries.status');
    Route::delete('inquiries/{inquiry}', [AdminInquiryController::class, 'destroy'])->name('inquiries.destroy');
});
