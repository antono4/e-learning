<?php

namespace App\Http\Livewire\Admin\Lesson;

use Livewire\Component;
use App\Models\Lesson;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.lesson.index', [
            'lessons' => Lesson::whereNotNull('user_id')->get()
        ])->extends('livewire.admin.master')->section('content');
    }
}
