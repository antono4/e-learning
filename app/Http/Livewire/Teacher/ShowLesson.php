<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Lesson;
use App\Models\Question;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class ShowLesson extends Component
{
    public $questions, $slug;
    public function mount($slug){
        $lesson = Lesson::whereSlug($slug)->first();
        $this->questions= Question::whereLessonId($lesson->id)->get();

        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.teacher.show-lesson', [
            'questions' => $this->questions
        ]);
    }

    public function finalisasi(){
        Lesson::whereSlug($this->slug)->update([
            'status' => 'finished'
        ]);
    }
}
