<?php

namespace App\Http\Livewire\Admin\Lesson;

use Livewire\Component;
use App\Models\{ Lesson, User };

class Show extends Component
{
    public $lesson, $key;
    public function mount($slug){
        $this->lesson = Lesson::whereSlug($slug)->first();
        $this->key= Lesson::whereUserId(null)->get();
    }

    public function render()
    {
        return view('livewire.admin.lesson.show', [
            'lesson' => $this->lesson,
            'teachers' => User::all()
        ])->extends('livewire.admin.master')->section('content');
    }
}
