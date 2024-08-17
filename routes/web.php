<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomAuth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::controller(ThemeController::class)
    ->name('theme.')
    ->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');

        Route::middleware('guest')->group(function () {

            Route::get('/login', 'login')->name('login');
            Route::get('/register', 'register')->name('register');

            Route::post('/login/store', 'loginStore')->name('login.store');
            Route::post('/register/store', 'registerStore')->name('register.store');
        });

        Route::middleware('auth')->group(function () {
            Route::post('/logout', 'logout')
                ->name('logout');
        });
    });

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::controller(ExerciseController::class)
    ->name('exercises.')
    ->group(function () {
        Route::get('/exercises/create/', 'create')->name('create');
        Route::get('/exercises/{muscle_id?}', 'index')->name('index');
        Route::post('/exercises/store', 'store')->name('store');
        Route::delete('/exercises/destroy/{exercise}', 'destroy')->name('destroy');
    });

Route::controller(WorkoutController::class)
    ->name('workouts.')
    ->group(function () {
        Route::get('/workouts', 'index')->name('index');
        Route::get('/single-workout', 'show')->name('single');
        Route::get('/workouts/show/{workout}', 'show')->name('show');
        Route::middleware(CustomAuth::class)->group(function () {
            Route::get('workouts/dashboard', 'dashboard')->name('dashboard');
            Route::get('/workouts/create', 'create')->name('create');
            Route::post('/workouts/store', 'store')->name('store');
            Route::get('/workouts/edit/{workout}', 'edit')->name('edit');
            Route::put('/workouts/update/{workout}', 'update')->name('update');
            Route::delete('/workouts/delete/{workout}', 'destroy')->name('destroy');
        });
    });
