<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//teacher
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->middleware(['teacher'])->name('teacher.dashboard');
require __DIR__.'/teacher_auth.php';

//student
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->middleware(['student'])->name('student.dashboard');
require __DIR__.'/student_auth.php';
//admin
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');
require __DIR__.'/auth.php';
Route::any("start", function () {
    return view('start');
});
Route::any("end", function () {
    return view('end');
});
Route::any("ans", function () {
    return view('answerDesk');
});
Route::any('/add', [QuestionController::class, 'add'])->name('question.add');
Route::any('/question', [QuestionController::class, 'show'])->name('question.show');
Route::any('/delete', [QuestionController::class, 'delete'])->name('question.delete');
Route::any('/startquiz', [QuestionController::class, 'startquiz'])->name('question.startquiz');
Route::any('/submitans', [QuestionController::class, 'submitans'])->name('question.subbmitans');