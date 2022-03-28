<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Lesson;
use Livewire\Component;

class Lessons extends Component
{
    public function render()
    {
        return view('livewire.teacher.lessons', [
            'lessons' => Lesson::whereUserId(auth()->user()->id)->get()
        ]);
    }
}
