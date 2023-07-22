<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GoogleAccountController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');
    Route::get('/assignment', [App\Http\Controllers\HomeController::class, 'index'])->name('assignment.index');

    Route::get('student', [StudentController::class, 'index'])->name('student.index');
    Route::post('student', [StudentController::class, 'store']);

    Route::get('assignment', [AssignmentController::class, 'index'])->name('assignment.index');
    Route::post('assignment', [AssignmentController::class, 'store'])->name('assignment.store');

    Route::get('report', [ReportController::class, 'index'])->name('report.index');

    Route::name('google.index')->get('google', [GoogleAccountController::class, 'index']);
    Route::name('google.store')->get('google/oauth', [GoogleAccountController::class, 'store']);
    Route::name('google.destroy')->delete('google/{googleAccount}', [GoogleAccountController::class, 'destroy']);

    // Route::resource([
    //     'students' => StudentController::class,
    //     'courses' => CourseController::class
    // ]);
    // Route::resource('student', 'StudentController')->except('store', 'update', 'destroy', 'show', 'edit');
    // Route::resource('course', [CourseController::class])->except('create', 'store', 'update', 'destroy', 'show', 'edit');
    // Route::resource('subject', [SubjectController::class])->except('create', 'store', 'update', 'destroy', 'show', 'edit');
    // Route::resource('instructor', [InstructorController::class])->except('create', 'store', 'update', 'destroy', 'show', 'edit');
    // Route::resource('assignment', [AssignmentController::class])->except('create', 'store', 'update', 'destroy', 'show', 'edit');

});
