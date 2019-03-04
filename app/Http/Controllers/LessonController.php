<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Repositories\LessonRepository;

class LessonController extends Controller
{
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    public function getList()
    {
        $lesson = $this->lessonRepository->list();
        
        return view('admin/lesson/list', ['lesson' => $lesson]);
    }
}
