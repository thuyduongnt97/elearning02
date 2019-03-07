<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'exam_time',
        'create_time',
        'status',
        'user_id',
        'subject_id',
    ];

    public $timestamps = false; 

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function examCategoryQuestions()
    {
    	return $this->hasMany(ExamCategoryQuestion::class);
    }

    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function subjects()
    {
    	return $this->belongsTo(Subject::class);
    }

}
