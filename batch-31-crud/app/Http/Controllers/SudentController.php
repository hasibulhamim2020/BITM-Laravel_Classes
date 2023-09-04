<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SudentController extends Controller
{
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
}
