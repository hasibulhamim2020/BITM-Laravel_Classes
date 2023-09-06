<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent(){
        return view('addStudent');
    }
    public function save(Request $request){
        Student::saveinfo($request);
        return redirect(route('view-student'));
    }
    public function viewStudent(){
        return view('viewStudent',[
            'students'=>Student::all()
        ]);
    }
}
