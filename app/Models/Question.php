<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable= ['lesson_id', 'question', 'a', 'b', 'c', 'd', 'correct'];

    public function Lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
