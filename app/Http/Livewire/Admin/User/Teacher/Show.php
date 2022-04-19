<?php

namespace App\Http\Livewire\Admin\User\Teacher;

use App\Models\Lesson;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $teacher, $teacher_lesson, $userSelect;
    public function mount($slug){
        $this->teacher          = User::whereId($slug)->first();
        $this->teacher_lesson   = Lesson::whereUserId($this->teacher->id)->first();
        $this->userSelect = $slug;
    }

    public function render()
    {
        return view('livewire.admin.user.teacher.show',[
            'teacher' => $this->teacher,
            'lessons' => Lesson::whereNull('user_id')->orderBy('user_id', 'ASC')->get()
        ])->extends('livewire.admin.master')->section('content');
    }

    public $lesson;
    public function changeJob(){
        Lesson::find($this->lesson)->update([
            'user_id' => $this->userSelect
        ]);
    }
}
