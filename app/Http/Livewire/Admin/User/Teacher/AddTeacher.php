<?php

namespace App\Http\Livewire\Admin\User\Teacher;

use Livewire\Component;

class AddTeacher extends Component
{
    public function render()
    {
        return view('livewire.admin.user.teacher.add-teacher', [
            'lessons' => Lesson::whereUserId(null)->get()
        ])->extends('livewire.admin.master')->section('content');
    }
}
