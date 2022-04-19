<?php

namespace App\Http\Livewire\Admin\User\Teacher;

use Livewire\Component;
use App\Models\{ User, Lesson };

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.user.teacher.index', [
            'teachers' => User::role('teacher')->get(),
            'lessons' => Lesson::all()
        ])->extends('livewire.admin.master')->section('content');
    }
}
