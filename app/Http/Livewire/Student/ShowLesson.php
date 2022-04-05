<?php

namespace App\Http\Livewire\Student;

use App\Models\Lesson;
use App\Models\Question;
use Livewire\Component;

class ShowLesson extends Component
{
    public $questions;
    public function mount($slug, $page){
        $lesson = Lesson::whereSlug($slug)->first();
        $this->questions= Question::whereLessonId($lesson->id)->wherePage($page)->get();
    }
    public function render()
    {
        return view('livewire.student.show-lesson', [
            'questions' => $this->questions
        ]);
    }
    // public function showanswer(){
    //     dd($this->answer);
    // }
}
