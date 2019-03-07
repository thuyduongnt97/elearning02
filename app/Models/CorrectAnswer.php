<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    protected $table = 'correct_answers';

    public $timestamps = false; 

    protected $fillable = [
        'question_id',
        'answer_id',
    ];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
    	return $this->belongsTo(Answer::class);
    }
}
