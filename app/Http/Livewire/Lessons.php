<?php

namespace App\Http\Livewire;

use App\Models\Lesson;
use Livewire\Component;

class Lessons extends Component
{
    public function render()
    {
        return view('livewire.lessons', [
            'lessons' => Lesson::whereUserId(auth()->user()->id)->get()
        ])->extends('admin.master')->section('content');
    }
}
