<?php

namespace App\Http\Livewire\Student;

use App\Models\Lesson;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.student.dashboard', [
            'lessons' => Lesson::whereStatus('finished')->get()
        ]);
    }
}
