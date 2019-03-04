<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = false; 
    
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
