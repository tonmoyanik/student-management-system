<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    private $code;
    private $id;
    private $name;
    private $teacher;
    private $year;
    private $updateString;
    private $updateString1;
    private $teachers;
    public function index(){

        return view('admin.teacher.add');
    }

    public function manage(){

        //$this->teachers = Teacher::all();
        //$this->teachers = Teacher::orderBy('id', 'desc')->first();
        //$this->teachers = Teacher::orderBy('id', 'desc')->take(1)->get();
        //$this->teachers = Teacher::orderBy('id', 'desc')->skip(1)->take(2)->get();
        //$this->teachers = Teacher::find(2);
        $this->teachers = Teacher::orderBy('id', 'desc')->get();
        return view('admin.teacher.manage', ['teachers'=>$this->teachers]);
    }

    public function create(Request $request){

        Teacher::newTeacher($request, $this->getTeacherCode($request));
        return redirect('/add-teacher')->with('message','Teacher Add Successfully');

    }

    public function getTeacherCode($request){

        $this->teacher = Teacher::orderBy('id','desc')->first();
        if ($this->teacher){

            $this->id = $this->teacher->id + 1;
        }
        else{

            $this->id = 1;
        }
        $this->updateString = preg_replace('/[^A-Za-z0-9]/', "",$request->name);
        $this->updateString1 = trim($this->updateString, 'Md');
        $this->name = strtoupper(substr($this->updateString1,'0','3'));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        return $this->code;
    }

    public function edit($id){

        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }

    public function update(Request $request, $id){

        Teacher::updateTeacher($request, $id, $this->getTeacherCode($request));
        return redirect('/manage-teacher')->with('message','Teacher Update Successfully');
    }

    public function delete($id){

        $this->teacher = Teacher::find($id);
        if (file_exists($this->teacher->image)){

            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect('/manage-teacher')->with('message','Teacher Delete Successfully');
    }
}
