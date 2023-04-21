<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SubjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROUTE COURSES

Route::get('/', function() {
    return view('layout');// Homepage
});

Route::get('/', function() {
    return view('partials._hero');// Homepage
});

Route::get('/courses', [CoursesController::class, 'coursesList']); // All courses

Route::get('/courses/create', [CoursesController::class, 'create']); // Create Courses

Route::post('/courses', [CoursesController::class, 'storeCourse']); // Store Courses Data

Route::get('/courses/{course}/edit', [CoursesController::class, 'edit']); // Edit Course

Route::put('/courses/{course}', [CoursesController::class, 'update']); // Update Course

Route::delete('/courses/{course}', [CoursesController::class, 'destroy']); // Delete Course

Route::get('/courses/{course}', [CoursesController::class, 'showCourse']); // Show Courses Data

// ROUTE SUBJECTS

Route::get('/subjects', [SubjectsController::class, 'subjectsList']); // All Subjects

Route::get('/subjects/create', [SubjectsController::class, 'create']); // Create Subject

Route::post('/subjects', [SubjectsController::class, 'storeSubject']); // Store Subject Data

Route::get('/subjects/{subject}/edit', [SubjectsController::class, 'edit']); // Edit Subject

Route::put('/subjects/{subject}', [SubjectsController::class, 'update']); // Update Subject

Route::delete('/subjects/{subject}', [SubjectsController::class, 'destroy']); // Delete Subject






