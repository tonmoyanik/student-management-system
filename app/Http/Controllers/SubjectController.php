<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{

    private $subjects;
    private $subject;
    private $enrolls;

    public function index()
    {
        return view('teacher.subject.add');
    }

    public function manage()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->get();
        return view('teacher.subject.manage',['subjects'=>$this->subjects]);
    }

    public function create(Request $request)
    {
        Subject::newSubject($request);

        return redirect()->back()->with('message', 'Subject Info create successfully');
    }
    public function edit($id){

        $this->subject = Subject::find($id);
        return view('teacher.subject.edit', ['subject' => $this->subject]);
    }

    public function update(Request $request, $id){

        Subject::updateSubject($request, $id);
        return redirect('/manage-subject')->with('message','Subject Update Successfully');
    }

    public function approved()
    {
        $this->subjects = Subject::where('teacher_id', Session::get('user_id'))->where('status', 1)->get();
        return view('teacher.subject.approved',['subjects'=>$this->subjects]);
    }

    public function enrolledStudent($id)
    {
        $this->enrolls = Enroll::where('subject_id', $id)->get();
        return view('teacher.subject.enrolled-student',['enrolls'=>$this->enrolls]);
    }
}
