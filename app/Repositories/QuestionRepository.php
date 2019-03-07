<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\DB;

class QuestionRepository extends EloquentRepository
{
    function model()
    {
        return 'App\Models\Question';
    }
    
    function list()
    {
        $result = $this->model->select('questions.*', 'category_questions.name AS category', 'subjects.name AS subject', DB::raw('COUNT(answers.question_id) as soch'))
            ->join('category_questions', 'category_questions.id', '=', 'questions.category_id')
            ->join('subjects', 'subjects.id', '=', 'questions.subject_id')
            ->leftjoin('answers', 'answers.question_id', '=', 'questions.id')
            ->groupBy('questions.id')
            ->get();

        return $result;
    }
}
