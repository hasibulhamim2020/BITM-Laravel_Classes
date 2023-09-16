<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller

{
    public function home(){
        return view('home');
    }

    public function addStudent(){
        return view('student.index');
    }

    public function viewStudent(){
        return view('student.view_Students');
    }
}

