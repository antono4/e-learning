<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function Question(){
        return $this->hasMany(Question::class);
    }

    public function User(){
        return $this->hasMany(User::class);
    }
}
