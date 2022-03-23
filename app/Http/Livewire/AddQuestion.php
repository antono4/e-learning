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
            'lessons'           => Lesson::whereUserId(auth()->user()->id)->get(),
            'selectedLesson'    => Lesson::whereId($this->optionLesson)->first()
        ])->extends('admin.master')->section('content');
    }

    public $question, $optionLesson, $a, $b, $c, $d, $e, $correct;

    protected $rules = [
        'question'          => 'required',
        'optionLesson'      => 'required',
        'a'                 => 'required',
        'b'                 => 'required',
        'c'                 => 'required',
        'correct'           => 'required',
    ];
    public function store(){
        $this->validate();

        Question::create([
            'question'          => $this->question,
            'lesson_id'         => $this->optionLesson,
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
        $this->d = null;
    }
    public function swictOptionE(){
        $this->optionE = !$this->optionE;
        $this->e = null;
    }
    public $hideSelectLesson= true, $optionButton= true;
    public function hideElements(){
        $this->hideSelectLesson= false;
        $this->optionButton= false;
    }
}
