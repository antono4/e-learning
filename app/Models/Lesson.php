<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'slug', 'user_id', 'status'];

    public function Question(){
        return $this->hasMany(Question::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
