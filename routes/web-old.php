<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', [StudentController::class, 'index'])->name('index');
// Route::get('/students', [StudentController::class, 'view'])->name('students');
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::resource('student-data', StudentDataController::class);
Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);

