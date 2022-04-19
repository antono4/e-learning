<?php

namespace App\Http\Livewire\Admin\User\Student;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.user.student.index', [
            'students' => User::role('student')->get(),
        ])->extends('livewire.admin.master')->section('content');
    }
}
