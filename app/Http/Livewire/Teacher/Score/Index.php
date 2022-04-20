<?php

namespace App\Http\Livewire\Teacher\Score;

use Livewire\Component;
use App\Models\{ Lesson, Score};

class Index extends Component
{
    public function render()
    {
        $lesson= Lesson::whereUserId(auth()->user()->id)->first('id');
        $lesson_count = Lesson::whereUserId(auth()->user()->id)->count();

        if($lesson_count){
            $scores = Score::whereLessonId($lesson->id)->get();
        } else{
            $scores= 'fwfewf';
        }

        return view('livewire.teacher.score.index', [
            'scores'        => $scores,
            'lesson_count'  => $lesson_count
        ])->extends('livewire.teacher.master')->section('content');
    }
}
