<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Repositories\QuestionRepository;
use Illuminate\Support\Facades\Auth;
use PHPExcel; 
use PHPExcel_IOFactory;

class QuestionController extends Controller
{
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function getList()
    {
        $question = $this->questionRepository->list();

        return view('admin/question/list', ['question' => $question]);
    }

    public function getDown()
    {
        $file = config('app.question_path').'/ImportQuestion.xls';   

    	return response()->download($file);
    }
}
