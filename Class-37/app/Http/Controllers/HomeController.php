<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $student,$students,$studentInfo;

    public function index(){
        $this->student= new Student();

        $this->students = $this->student->getAlStudent();
        return view('home',[
            'students'=>$this->students
        ]);
    }

    public function about(){
        return view('about');
    }

    public function gallery(){
        return view('gallery');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }
    public function details($id){
//        return $id;
        $this->student = new  Student();
        $this->studentInfo = $this->student->studentDetails($id);

        return view('details',[
            'student'=> $this->studentInfo
            ]
        );
    }

}
