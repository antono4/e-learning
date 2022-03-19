<?php

namespace App\Http\Livewire;

use App\Models\Lesson;
use App\Models\Question;
use Livewire\Component;

class AddQuestion extends Component
{
    public $no= 1;
    public function render()
    {
        return view('livewire.add-question', [
            'lessons' => Lesson::whereUserId(auth()->user()->id)->get()
        ]);
    }

    public $question, $lesson, $a, $b, $c, $d, $e, $correct;

    protected $rules = [
        'question'          => 'required',
        'lesson'            => 'required',
        'a'                 => 'required',
        'b'                 => 'required',
        'c'                 => 'required',
        'correct'           => 'required',
    ];
    public function store(){
        $this->validate();

        Question::create([
            'question'          => $this->question,
            'lesson_id'         => $this->lesson,
            'a'                 => $this->a,
            'b'                 => $this->b,
            'c'                 => $this->c,
            'd'                 => $this->d,
            'e'                 => $this->e,
            'correct'           => $this->correct,
        ]);
        $this->question = null;
        $this->a = null;
        $this->b = null;
        $this->c = null;
        $this->d = null;
        $this->e = null;
        $this->correct = null;

        $this->no+=1;
    }

    public $optionD= false, $optionE= false;
    public function swictOptionD(){
        $this->optionD = !$this->optionD;
    }
    public function swictOptionE(){
        $this->optionE = !$this->optionE;
    }
    public $hideSelectLesson= true, $optionButton= true;
    public function hideElements(){
        $this->hideSelectLesson= false;
        $this->optionButton= false;
    }
}
