<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SudentController extends Controller
{
    public $student;
    public function addStudent(){
        return view('create');
    }

    public function store(Request $request){
        Student::saveinfo($request);
        return redirect(route('manage-student'));
    }

    public function manageStudent(){
        return view('manage',[
            'students'=>Student::all()
        ]);
    }

    public function edit($id){
//        return $id;
        return view('edit',[
            'student'=>Student::find($id)
        ]);
    }

    public function update(Request $request){
        Student::updateinfo($request);

        return redirect(route('manage-student'));
    }

//    public function deleteinfo($id){
//
//        $this->student = Student::find($id);
//        $this->student->delete();
//        return back();
//    }
    public function deleteinfo(Request $request){
        $this->student = Student::find($request->id);
        $this->student->delete();
        return back();
    }
}
