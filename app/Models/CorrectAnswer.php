<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    protected $table = 'correct_answers';

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
    	return $this->belongsTo(Answer::class);
    }
}
