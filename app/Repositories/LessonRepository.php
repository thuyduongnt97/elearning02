<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;

class LessonRepository extends EloquentRepository
{
    function model()
    {
        return 'App\Models\Lesson';
    }

    public function list()
    {
        $result = $this->model->select('lessons.*', 'users.name AS user', 'subjects.name AS subject')->join('users', 'users.id', '=', 'lessons.user_id')->join('subjects', 'subjects.id', '=', 'lessons.subject_id')->get();

        return $result;
    }
}
