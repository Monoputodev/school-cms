<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PackageQuerryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'index'])->name('index');


Route::prefix('course')->group(function () {
    Route::get('/', [PublicController::class, 'allCourse'])->name('course.index');
    Route::get('/details/{course}', [PublicController::class, 'course'])->name('course.details');
});
Route::prefix('teacher')->group(function () {
    Route::get('/', [PublicController::class, 'allTeacher'])->name('teacher.index');
    Route::get('/details/{teacher}', [PublicController::class, 'teacher'])->name('teacher.details');
});
Route::prefix('news')->group(function () {
    Route::get('/', [PublicController::class, 'allNews'])->name('news.index');
    Route::get('/details/{news}', [PublicController::class, 'news'])->name('news.details');
});
Route::prefix('notice')->group(function () {
    Route::get('/', [PublicController::class, 'allNotice'])->name('notice.index');
    Route::get('/details/{notice}', [PublicController::class, 'notice'])->name('notice.details');
});

Route::prefix('admissions')->group(function () {
    // Hero-Routes


    Route::post('/', [AdmissionController::class, 'store'])->name('admissions.store');
});


Route::post('/package-query', [PackageQuerryController::class, 'store'])->name('package-query.store');

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('dashboard.profile.index');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('dashboard.profile.update');
    Route::get('/', [PublicController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/package-queries', [PackageQuerryController::class, 'index'])->name('package-queries.index');

    Route::prefix('admissions')->group(function () {
        // Hero-Routes
        Route::get('/', [AdmissionController::class, 'index'])->name('admissions.index');
        Route::get('/{admission}', [AdmissionController::class, 'destroy'])->name('admissions.destroy');
    });

    Route::prefix('notices')->group(function () {
        // Hero-Routes
        Route::get('/', [NoticeController::class, 'index'])->name('notices.index');
        Route::get('/create', [NoticeController::class, 'create'])->name('notices.create');
        Route::post('/', [NoticeController::class, 'store'])->name('notices.store');
        Route::get('/{notice}', [NoticeController::class, 'show'])->name('notices.show');
        Route::get('/{notice}/edit', [NoticeController::class, 'edit'])->name('notices.edit');
        Route::put('/{notice}', [NoticeController::class, 'update'])->name('notices.update');
        Route::get('/{notice}', [NoticeController::class, 'destroy'])->name('notices.destroy');
        Route::get('/active/{notice}', [NoticeController::class, 'active'])->name('notices.active');
        Route::get('/inactive/{notice}', [NoticeController::class, 'inactive'])->name('notices.inactive');
    });
    Route::prefix('courses')->group(function () {
        // Courses-Routes
        Route::get('/', [CoursesController::class, 'index'])->name('courses.index');
        Route::get('/create', [CoursesController::class, 'create'])->name('courses.create');
        Route::post('/', [CoursesController::class, 'store'])->name('courses.store');
        Route::get('/{courses}', [CoursesController::class, 'show'])->name('courses.show');
        Route::get('/{courses}/edit', [CoursesController::class, 'edit'])->name('courses.edit');
        Route::put('/{courses}', [CoursesController::class, 'update'])->name('courses.update');
        Route::get('/{courses}', [CoursesController::class, 'destroy'])->name('courses.destroy');
        Route::get('/active/{courses}', [CoursesController::class, 'active'])->name('courses.active');
        Route::get('/inactive/{courses}', [CoursesController::class, 'inactive'])->name('courses.inactive');
    });
    Route::prefix('types')->group(function () {
        // Type-Routes
        Route::get('/', [TypeController::class, 'index'])->name('types.index');
        Route::get('/create', [TypeController::class, 'create'])->name('types.create');
        Route::post('/', [TypeController::class, 'store'])->name('types.store');
        Route::get('/{type}', [TypeController::class, 'show'])->name('types.show');
        Route::get('/{type}/edit', [TypeController::class, 'edit'])->name('types.edit');
        Route::put('/{type}', [TypeController::class, 'update'])->name('types.update');
        Route::get('/{type}', [TypeController::class, 'destroy'])->name('types.destroy');
        Route::get('/active/{type}', [TypeController::class, 'active'])->name('types.active');
        Route::get('/inactive/{type}', [TypeController::class, 'inactive'])->name('types.inactive');
    });

    Route::prefix('photos')->group(function () {
        // Hero-Routes
        Route::get('/', [PhotoController ::class, 'index'])->name('photos.index');
        Route::get('/create', [PhotoController::class, 'create'])->name('photos.create');
        Route::post('/', [PhotoController::class, 'store'])->name('photos.store');
        Route::get('/{photo}', [PhotoController::class, 'show'])->name('photos.show');
        Route::get('/{photo}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
        Route::put('/{photo}', [PhotoController::class, 'update'])->name('photos.update');
        Route::get('/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');
        Route::get('/active/{photo}', [PhotoController::class, 'active'])->name('photos.active');
        Route::get('/inactive/{photo}', [PhotoController::class, 'inactive'])->name('photos.inactive');
    });


    Route::prefix('teams')->group(function () {
        // Team-Routes
        Route::get('/', [TeamController::class, 'index'])->name('teams.index');
        Route::get('/create', [TeamController::class, 'create'])->name('teams.create');
        Route::post('/', [TeamController::class, 'store'])->name('teams.store');
        Route::get('/{team}', [TeamController::class, 'show'])->name('teams.show');
        Route::get('/{team}/edit', [TeamController::class, 'edit'])->name('teams.edit');
        Route::put('/{team}', [TeamController::class, 'update'])->name('teams.update');
        Route::get('/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
        Route::get('/active/{team}', [TeamController::class, 'active'])->name('teams.active');
        Route::get('/inactive/{team}', [TeamController::class, 'inactive'])->name('teams.inactive');
    });
    Route::prefix('blogs')->group(function () {
        // Blog-Routes
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');
        Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::get('/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        Route::get('/active/{blog}', [BlogController::class, 'active'])->name('blogs.active');
        Route::get('/inactive/{blog}', [BlogController::class, 'inactive'])->name('blogs.inactive');
    });





    Route::prefix('hero')->group(function () {
        // Hero-Routes
        Route::get('/', [HeroController::class, 'index'])->name('hero.index');
        Route::get('/create', [HeroController::class, 'create'])->name('hero.create');
        Route::post('/', [HeroController::class, 'store'])->name('hero.store');
        Route::get('/{hero}', [HeroController::class, 'show'])->name('hero.show');
        Route::get('/{hero}/edit', [HeroController::class, 'edit'])->name('hero.edit');
        Route::put('/{hero}', [HeroController::class, 'update'])->name('hero.update');
        Route::get('/{hero}', [HeroController::class, 'destroy'])->name('hero.destroy');
        Route::get('/active/{hero}', [HeroController::class, 'active'])->name('hero.active');
        Route::get('/inactive/{hero}', [HeroController::class, 'inactive'])->name('hero.inactive');
    });


    Route::prefix('content')->group(function () {

        Route::put('/bb/{content}', [ContentController::class, 'updateBB'])->name('bb.update');

        Route::get('/about/{content}/edit', [ContentController::class, 'editAbout'])->name('about.edit');
        Route::put('/about/{content}', [ContentController::class, 'updateAbout'])->name('about.update');

        Route::get('/general/{content}/edit', [ContentController::class, 'editGeneral'])->name('general.edit');
        Route::put('/general/{content}', [ContentController::class, 'updateGeneral'])->name('general.update');
        Route::get('/contact/{content}/edit', [ContentController::class, 'editContact'])->name('contact.edit');
        Route::put('/contact/{content}', [ContentController::class, 'updateContact'])->name('contact.update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
