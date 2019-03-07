<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Subject;
use App\Repositories\SubjectRepository;
use App\Repositories\LessonRepository;
use App\Http\Requests\LessonRequest;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepository, SubjectRepository $subjectRepository)
    {
        $this->lessonRepository = $lessonRepository;
        $this->subjectRepository = $subjectRepository;
    }

    public function getList()
    {
        $lesson = $this->lessonRepository->list();
        
        return view('admin/lesson/list', ['lesson' => $lesson]);
    }

    public function getAdd()
    {
        $subjects = $this->subjectRepository->all();
        $subject = [];
        
        foreach ($subjects as $subj) {
            $subject[$subj->id] = $subj->name;
        }
        
        return view('admin/lesson/add', ['subject' => $subject]);
    }

    public function postAdd(LessonRequest $request)
    {
        $user = Auth::id();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(config('app.lesson_path'), $file->getClientOriginalName());
        }
        $data = ['title' => $request->title,
                'subject_id' => $request->subject,
                'user_id' => $user,
                'content' => $request->content,
                'file' => $request->file->getClientOriginalName(),
                'create_time' => now(),
                ];

        $lesson = $this->lessonRepository->create($data);
        
        return redirect('lesson/list')->with('success', __('message.add'));
    }

    public function getEdit($id)
    {
        $lesson_id = $this->lessonRepository->find($id);
        $subjects = $this->subjectRepository->all();
        $subject = [];
        
        foreach ($subjects as $subj) {
            $subject[$subj->id] = $subj->name;
        }
        
        return view('admin/lesson/add', ['lesson_id' => $lesson_id, 'subject' => $subject]);
    }

    public function postEdit(LessonRequest $request, $id)
    {
        $lesson_id = $this->lessonRepository->find($id);
        $user = Auth::id();
        if (!is_null($request->file('file'))) {
            $file = $request->file('file');
            $file->move(config('app.lesson_path'), $file->getClientOriginalName());
            $lesson = $this->lessonRepository->update($id, [
                'title' => $request->title,
                'user_id' => $user,
                'subject_id' => $request->subject,
                'content' => $request->content,
                'file' => $request->file->getClientOriginalName(),
            ]);
        }
        else {
            $lesson = $this->lessonRepository->update($id, [
                'title' => $request->title,
                'user_id' => $user,
                'subject_id' => $request->subject,
                'content' => $request->content,
            ]);
        }
        
        return redirect('lesson/list')->with('success', __('message.edit'));
    }

    public function getDelete($id)
    {
        $lesson = $this->lessonRepository->list();
        $lesson_id = $this->lessonRepository->delete($id);

        return redirect('lesson/list')->with('success', __('message.delete'));
    }
}
