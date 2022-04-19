<?php

namespace App\Http\Livewire\Admin\User\Teacher;

use Livewire\Component;
use App\Models\{ Lesson, User };
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.admin.user.teacher.add', [
            'lessons' => Lesson::whereUserId(null)->get()
        ])->extends('livewire.admin.master')->section('content');
    }


    public $name, $email, $password, $password_confirm;
    protected $rules = [
        'name'      => 'required',
        'email'     => 'required|email',
        'password'  => 'required',
    ];
    public function store(){

        $this->validate();

        if($this->password === $this->password_confirm){
            User::create([
                'name'      => $this->name,
                'email'     => $this->email,
                'password'  => $this->password
            ])->assignRole('teacher');

            $this->name             = null;
            $this->email            = null;
            $this->password         = null;
            $this->password_confirm = null;

            $this->alert('success', 'Berhasil menambah akun guru');

        } else{

            $this->password         = null;
            $this->password_confirm = null;

            $this->alert('error', 'Password tidak terkonfirmasi');
        }

    }
}
