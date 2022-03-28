<?php

namespace App\Http\Livewire\Student;

use App\Models\Lesson;
use App\Models\Question;
use Livewire\Component;

class ShowLesson extends Component
{
    public $questions, $answer= [];
    public function mount($slug){
        $lesson = Lesson::whereSlug($slug)->first();
        $this->questions= Question::whereLessonId($lesson->id)->get();
    }
    public function render()
    {
        return view('livewire.student.show-lesson', [
            'questions' => $this->questions
        ]);
    }
    public function showanswer(){
        dd($this->answer);
    }
}
