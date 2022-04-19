<?php

namespace App\Http\Livewire\Admin\Lesson;

use Livewire\Component;
use App\Models\{ Lesson, User};
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{

    use LivewireAlert;

    public function render()
    {
        return view('livewire.admin.lesson.add', [
            'teachers' => User::role('teacher')->get()
        ])->extends('livewire.admin.master')->section('content');
    }

    public $name;
    protected $rules = [
        'name'      => 'required',
    ];
    public function store(){
        $this->validate();

        Lesson::create([
            'name'          => $this->name,
            'slug'          => Str::slug($this->name),
            'status'        => 'not'
        ]);

        $this->name = null;

        $this->alert('success', 'Berhasil Menambah Mapel');
    }
}
