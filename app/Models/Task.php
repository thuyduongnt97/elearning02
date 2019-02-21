<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'start_test',
        'end_test',
        'filelog',
        'correct_answer',
        'point',
    ];

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function exams()
    {
    	return $this->belongsTo(Exam::class);
    }
}
