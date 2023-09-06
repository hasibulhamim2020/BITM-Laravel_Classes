<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function addStudent(){
        return view('addStudent');
    }

    public function saveStudent(Request $request){
        Student::saveData($request);
    }

    public function viewStudent(){
        return view('viewStudent',[
            'students'=>Student::all()
        ]);
    }

    public function updateStudent($id){
        return $id;
        return view('updateStudent',[
            'students'=>Student::all()
        ]);
    }
}
