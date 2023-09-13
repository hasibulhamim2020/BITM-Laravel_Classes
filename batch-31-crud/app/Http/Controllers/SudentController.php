<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Session;
use Illuminate\Support\Facades\DB;

class SudentController extends Controller
{
    public $student;
    public function addStudent(){
        return view('create',[
            'departments'=>Department::where('status',1)->get(),
            'sessions'=>Session::where('status',1)->get()
        ]);
    }

    public function store(Request $request){

//        return $request->file('image');
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
            'student'=>Student::find($id),
            'departments'=>Department::where('status',1)->get(),
            'sessions'=>Session::where('status',1)->get()
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
        if ($this->student->image){
                if (file_exists($this->student->image)){
                    unlink($this->student->image);
                }
            }
        $this->student->delete();
        return back();
    }
}
