<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'content',
        'status',
    ];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function correctAnswers()
    {
    	return $this->hasMany(CorrectAnswer::class);
    }
}
