<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamCategoryQuestion extends Model
{
    protected $table = 'exam_category_question';

    protected $fillable = [
        'quantity',
        'category_question_id',
        'exam_id',
    ];

    public $timestamps = false; 

    public function exams()
    {
    	return $this->belongsTo(Exam::class);
    }

    public function categoryQuestions()
    {
    	return $this->belongsTo(CategoryQuestion::class);
    }
}
