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
        return view('livewire.teacher.dashboard', [
            'scores'  => Score::whereLessonId($lesson->id)->get()
        ])->extends('livewire.teacher.master')->section('content');
    }
}
