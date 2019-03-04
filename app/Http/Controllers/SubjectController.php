<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Repositories\SubjectRepository;

class SubjectController extends Controller
{
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    public function getList()
    {
        $getList = $this->subjectRepository->list();

        return view('admin/subject/list', ['getList' => $getList]);
    }
}
