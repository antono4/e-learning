<?php

namespace App\Http\Livewire\Admin\User\Teacher;

use Livewire\Component;
use App\Models\Lesson;

class Add extends Component
{
    public function render()
    {
        return view('livewire.admin.user.teacher.add', [
            'lessons' => Lesson::whereUserId(null)->get()
        ])->extends('livewire.admin.master')->section('content');
    }
}
