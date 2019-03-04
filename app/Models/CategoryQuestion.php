<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryQuestion extends Model
{
    protected $table = 'category_questions';

    protected $fillable = [
        'name',
    ];
    
    public $timestamps = false;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function examCategoryQuestions()
    {
    	return $this->hasMany(ExamCategoryQuestion::class);
    }
}
