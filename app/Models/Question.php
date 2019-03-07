<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content',
        'category_id',
        'subject_id',
    ];

    public $timestamps = false; 

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function subjects()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function categoryQuestions()
    {
    	return $this->belongsTo(CategoryQuestion::class);
    }

}
