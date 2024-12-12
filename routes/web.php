<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\Job;


// Routes for Dashboard and PostJob
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Route::get('/dashboard/job', [App\Http\Controllers\Dashboard\PostJobController::class, 'index']);
    // Route::get('/dashboard/service', [App\Http\Controllers\Dashboard\PostServiceController::class, 'index']);
    Route::get('/dashboard/message', [App\Http\Controllers\Dashboard\getMessageController::class, 'index']);

    //services
    Route::get('/dashboard/service', [ServiceController::class, 'index'])->name('services.index');
    Route::delete('/dashboard/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    Route::get('/dashboard/service/create', [ServiceController::class, 'create'])->name('services.create');

    //jobs
    Route::get('/dashboard/job', [JobController::class, 'index'])->name('jobs.index');
    Route::delete('/dashboard/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
    Route::get('/dashboard/job/create', [JobController::class, 'create'])->name('jobs.create');
    Route::get('/dashboard/job/store', [JobController::class, 'store'])->name('jobs.store');





    
    // Routes for Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Job Routes
Route::get('/job', [JobController::class, 'index'])->name('job.index');

// Authentication Routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Registration Routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Password Reset Routes
Route::get('/forgot-password', [PasswordController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordController::class, 'edit'])->name('password.reset');
Route::post('/reset-password', [PasswordController::class, 'update'])->name('password.update');

// Email Verification Routes
Route::get('/email/verify', [VerifyEmailController::class, 'notice'])
    ->middleware('auth')
    ->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verify'])
    ->middleware('auth')
    ->name('verification.verify');
Route::post('/email/resend', [VerifyEmailController::class, 'resend'])
    ->middleware('auth')
    ->name('verification.resend');

//main page
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [MainPageController::class, 'home'])->name('home');
Route::get('/about', [MainPageController::class, 'about'])->name('about');
Route::get('/service', [MainPageController::class, 'service'])->name('service');

//job
Route::get('/job', [JobController::class, 'index'])->name('job');
Route::get('/job/{id}', [JobController::class, 'detail'])->name('detail');

Route::get('/whyus', [MainPageController::class, 'whyus'])->name('whyus');

require __DIR__.'/auth.php';
