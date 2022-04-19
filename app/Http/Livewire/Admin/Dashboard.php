<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lesson;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'adminCount'        => User::role('admin')->count(),
            'teacherCount'      => User::role('teacher')->count(),
            'studentCount'      => User::role('student')->count(),
            'lessonCount'       => Lesson::count()
        ])->extends('livewire.admin.master')->section('content');
    }
}
