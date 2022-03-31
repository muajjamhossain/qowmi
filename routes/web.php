<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Fontend\FontendController;
use App\Http\Controllers\Fontend\LanguageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GellaryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// --------------------------------- Fontend Route ------------------------------
Route::get('/', [FontendController::class, 'index']);
Route::get('/about', [FontendController::class, 'about'])->name('about');
Route::get('/course', [FontendController::class, 'course'])->name('course');
Route::get('course-details/{id}/{slug}', [FontendController::class, 'courseDetails']);


Route::get('/teacher', [FontendController::class, 'teacher'])->name('teacher');
Route::get('/teacher-details', [FontendController::class, 'teacherDetails'])->name('teacher-details');
Route::get('/shop', [FontendController::class, 'shop'])->name('shop');
Route::get('/shop-details', [FontendController::class, 'shopDetails'])->name('shop-details');
Route::get('/research', [FontendController::class, 'research'])->name('research');
Route::get('/research-details', [FontendController::class, 'researchDetails'])->name('research-details');
Route::get('/gellary', [FontendController::class, 'gellary'])->name('gellary');
Route::get('/contact', [FontendController::class, 'contact'])->name('contact');
// Language Controller
Route::get('language/bangla', [LanguageController::class, 'bangla'])->name('bangla.language');
Route::get('language/english', [LanguageController::class, 'english'])->name('english.language');

// --------------------------------- Fontend Route ------------------------------

Auth::routes();
// --------------------------------- Admin Route ------------------------------
Route::group(['prefix'=>'admin','middleware' => ['auth','admin']], function() {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Banner Route
    Route::resource('banner', BannerController::class);
    // Teachers
    Route::resource('teachers',TeachersController::class);
    // Course
    Route::resource('course',CourseController::class);
    Route::get('course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
    // Course
    Route::resource('gellary',GellaryController::class);
    Route::get('gellary/delete/{id}', [GellaryController::class, 'delete'])->name('gellary.delete');
    // About Authore
    Route::get('about/author', [AuthorController::class, 'findInfo'])->name('findAuthAbout');
    Route::post('update/about/author', [AuthorController::class, 'updateInfo'])->name('update-author.info');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* cache clear route */
Route::get('/clear-cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'FINISHED';
});
