<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Studentcontroller extends Controller

{
    public $deleteStudent;
    public function home(){
        return view('home');
    }

    public function addStudent(){
        return view('student.index');
    }

    public function storeStudent(Request $request){
        Student::saveStudentData($request);
        return redirect(route('view-student'));
    }

    public function viewStudent(){
        return view('student.view_Students',[
            "students"=>Student::all()
        ]);
    }

    public function editStudent($id){
        return view('student.edit_Student',[
            "student"=>Student::find($id)
        ]);
    }

    public function updateStudent(Request $request){
        Student::updateStudentData($request);
        return redirect(route('view-student'));
    }

    public function deleteStudent(Request $request){
        $this->deleteStudent = Student::find($request->id);
        $this->deleteStudent->delete();
        return back();
    }

}

