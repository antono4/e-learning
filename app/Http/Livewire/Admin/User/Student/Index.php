<?php

namespace App\Http\Livewire\Admin\User\Student;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.user.student.index')->extends('livewire.admin.master')->section('content');
    }
}
