<?php

use App\Http\Controllers\{ CheckRoleController, GiveRoleController };
use App\Http\Livewire\Student\{ Dashboard as StudentDashboard, ShowLesson as StudentShowLesson };
use App\Http\Livewire\Teacher\{ AddQuestion, Dashboard as TeacherDashboard, Lessons, ShowLesson};
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
Route::get('/checkrole', CheckRoleController::class);
Route::get('/giverole', GiveRoleController::class);




// student route group
Route::middleware(['role:student', 'auth'])->prefix('student')->group(function () {
    Route::get('/dashboard', StudentDashboard::class)->name('student.dashboard');
    // Route::get('/lessons/{slug}/', StudentShowLesson::class)->name('student.lesson.show');
    Route::get('/lessons/{slug}/{page}', StudentShowLesson::class)->name('student.lesson.show');
});

// teacher route group
Route::middleware(['role:teacher', 'auth'])->prefix('teacher')->group(function () {
    Route::get('/dashboard', TeacherDashboard::class)->name('teacher.dashboard');
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
