<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\DB;

class SubjectRepository extends EloquentRepository
{
    function model()
    {
        return 'App\Models\Subject';
    }

    function list()
    {
        $result = $this->model->select('subjects.*', DB::raw('COUNT(lessons.subject_id) as sobg'), DB::raw('COUNT(exams.subject_id) as sobt'), DB::raw('COUNT(questions.subject_id) as soch'))->leftjoin('lessons', 'lessons.subject_id', '=', 'subjects.id')->leftjoin('exams', 'exams.subject_id', '=', 'subjects.id')->leftjoin('questions', 'questions.subject_id', '=', 'subjects.id')->groupBy('subjects.id')->get();
        
        return $result;
    }
}
