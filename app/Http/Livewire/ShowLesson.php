<?php

namespace App\Http\Livewire;

use App\Models\Lesson;
use App\Models\Question;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class ShowLesson extends Component
{
    public $questions;
    public function mount($slug){
        $lesson = Lesson::whereSlug($slug)->first();
        $this->questions= Question::whereLessonId($lesson->id)->get();
    }
    public function render()
    {
        return view('livewire.show-lesson', [
            'questions' => $this->questions
        ]);
    }
}
