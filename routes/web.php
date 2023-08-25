<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;
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

//
Route::get('/', function () {
    return view('home');
})->middleware('auth');

// Login Route
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticating']);

// Logout Route
Route::get('/logout', [AuthController::class, 'logout'])
->middleware(['auth']);

// Students Route
Route::get('/students', [StudentController::class, 'index'])
->middleware('auth');

Route::get('/student/{id}', [StudentController::class, 'show'])
->middleware(['auth', 'must-admin-or-teacher']);

Route::get('/student-add', [StudentController::class, 'create'])
->middleware(['auth', 'must-admin-or-teacher']);

Route::post('/student', [StudentController::class, 'store'])
->middleware(['auth', 'must-admin-or-teacher']);

Route::get('/student-edit/{id}', [StudentController::class, 'edit'])
->middleware(['auth', 'must-admin-or-teacher']);

Route::put('/student/{id}', [StudentController::class, 'update'])
->middleware(['auth', 'must-admin-or-teacher']);

Route::get('/student-delete/{id}', [StudentController::class, 'delete'])
->middleware(['auth', 'must-admin']);

Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])
->middleware(['auth', 'must-admin']);

Route::get('/student-deleted', [StudentController::class, 'deletedStudent'])
->middleware(['auth', 'must-admin']);

Route::get('/student/{id}/restore', [StudentController::class, 'restore'])
->middleware(['auth', 'must-admin']);

// Class Route
Route::get('/class', [ClassController::class, 'index'])
->middleware('auth');

Route::get('/class-detail/{id}', [ClassController::class, 'show'])
->middleware('auth');

//Extracurricular Route
Route::get('/extracurricular', [ExtracurricularController::class, 'index'])
->middleware('auth');

Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])
->middleware('auth');

// Teacher Route
Route::get('/teacher', [TeacherController::class, 'index'])
->middleware('auth');

Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])
->middleware('auth');