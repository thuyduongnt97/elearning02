<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'content',
        'status',
        'question_id',
    ];

    public $timestamps = false;
    
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function correctAnswers()
    {
    	return $this->hasMany(CorrectAnswer::class);
    }
}
