<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authentication']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    Route::get('/students', 'index');
    Route::get('/student/{slug}', 'show')->middleware('must-admin-or-teacher');
    Route::get('/student-add', 'create')->middleware('must-admin');
    Route::post('/student', 'store')->middleware('must-admin');
    Route::get('/student-edit/{id}', 'edit')->middleware('must-admin');
    Route::put('/student/{id}', 'update')->middleware('must-admin');
    Route::get('/student-delete/{id}', 'delete')->middleware('must-admin');
    Route::delete('/student-destroy/{id}', 'destroy')->middleware('must-admin');
    Route::get('/student-deleted', 'studentDeleted')->middleware('must-admin');
    Route::get('/student/{id}/restore', 'restore')->middleware('must-admin');
});

Route::controller(ClassController::class)->middleware('auth')->group(function () {
    Route::get('/class', 'index');
    Route::get('/class/{id}', 'show');
});

Route::controller(ExtracurricularController::class)->middleware('auth')->group(function () {
    Route::get('/extracurricular', 'index');
    Route::get('/extracurricular/{id}', 'show');
});

Route::controller(TeacherController::class)->middleware('auth')->group(function () {
    Route::get('/teachers', 'index');
    Route::get('/teacher/{id}', 'show');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/mass-update', [StudentController::class, 'massUpdate']);
