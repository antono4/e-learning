<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lesson;
use App\Models\Teacher;
use Livewire\Component;

class ShowTeacher extends Component
{
    public $teacher, $userSelect;
    public function mount($slug){
        $this->teacher= Teacher::whereId($slug)->first();
        $this->userSelect = $slug;
    }


    public $lesson;
    public function render()
    {
        return view('livewire.admin.show-teacher',[
            'teacher' => $this->teacher,
            'lessons' => Lesson::all()
        ])->extends('livewire.admin.master')->section('content');
    }

    public function changeJob(){
        Lesson::find($this->lesson)->update([
            'user_id' => $this->userSelect
        ]);
    }
}
