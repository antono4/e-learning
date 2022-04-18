<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Lesson;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard',[
            'teachers' => User::role('teacher')->get(),
            'lessons' => Lesson::all()
        ])->extends('livewire.admin.master')->section('content');
    }
}
