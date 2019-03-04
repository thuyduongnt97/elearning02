<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Repositories\SubjectRepository;
use App\Http\Requests\AddSubjectRequest;

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

    public function postAdd(AddSubjectRequest $request)
    {
        $subject = $this->subjectRepository->insert($request->name);

        return redirect('subject/list')->with('success', __('message.add'));
    }

    public function getEdit($id)
    {
        $getList = $this->subjectRepository->list();
        $subject = $this->subjectRepository->find($id);

        return view('admin/subject/list', ['getList' => $getList, 'subject' => $subject]);
    }

    public function postEdit(AddSubjectRequest $request, $id)
    {
        $subject = $this->subjectRepository->find($id);
        $subject = $this->subjectRepository->update($id, [
            'name' => $request->name,
        ]);

        return redirect('subject/list')->with('success', __('message.edit'));
    }

    public function getDelete($id)
    {
        $getList = $this->subjectRepository->list();
        $subject = $this->subjectRepository->delete($id);

        return redirect('subject/list')->with('success', __('message.delete'));
    }
}
