<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionController;
use App\Models\Lesson;
use App\Models\Question;
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

Route::get('/', function () {
    return view('hello', [
        'lessons'   => Lesson::all(),
        'questions' => Question::latest()->get()
    ]);
});

Route::post('/', [QuestionController::class, 'store'])->name('lesson.store');

Route::get('/teacher/login', [LoginController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [LoginController::class, 'authenticate'])->name('teacher.authenticate');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
