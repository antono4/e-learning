<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Livewire\Teacher\{ AddQuestion,  Lessons, ShowLesson};
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


// teacher route group
Route::prefix('teacher')->group(function () {
    // teacher Lesson Group Route
    Route::prefix('lessons')->name('lesson.')->group(function(){
        Route::get('/', Lessons::class)->name('index');
        Route::get('/{slug}', ShowLesson::class)->name('show');
    });

    Route::get('/addquestion', AddQuestion::class)->name('add.question');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
