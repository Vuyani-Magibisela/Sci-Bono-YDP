<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;

// Main pages
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Course routes
Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('/uiux', [CourseController::class, 'uiuxCourse'])->name('uiux');
    
    // Module routes
    Route::get('/uiux/modules/{module}', [CourseController::class, 'showModule'])->name('module');
    
    // Lesson routes
    Route::get('/uiux/lessons/{lesson}', [CourseController::class, 'showLesson'])->name('lesson');
});