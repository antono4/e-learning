<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Lesson;
use App\Models\Score;
use Livewire\Component;

class Dashboard extends Component
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

        return view('livewire.teacher.dashboard', [
            'scores'        => $scores,
            'lesson_count'  => $lesson_count
        ])->extends('livewire.teacher.master')->section('content');
    }
}
