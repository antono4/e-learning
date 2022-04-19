<?php

namespace App\Http\Livewire\Admin\User\Student;

use Livewire\Component;
use App\Models\Lesson;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.user.student.add', [
            'lessons' => Lesson::whereUserId(null)->get()
        ])->extends('livewire.admin.master')->section('content');
    }
}
