<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Livewire\AddQuestion;
use App\Http\Livewire\Lessons;
use App\Http\Livewire\ShowLesson;
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
        'lessons'   => Lesson::whereUserId(auth()->user()->id)->get(),
        'questions' => Question::latest()->get()
    ]);
});

Route::post('/', [QuestionController::class, 'store'])->name('lesson.store');

Route::get('/lessons', Lessons::class);
Route::get('/lessons/{slug}', ShowLesson::class)->name('show.lesson');


Route::get('/addquestion', AddQuestion::class)->name('add.question');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
