<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'lesson_id', 'score', 'status'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
