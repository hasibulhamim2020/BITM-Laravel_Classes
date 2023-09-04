<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Student extends Model
{
    use HasFactory;
    private $students=[],$department,$departments,$student,$getDpartmentName,$session,$getSessionName;
    public function getAlStudent(){
        return $this->students=[
            [
                'id'=>1,
                'name'=>'hamim',
                'email'=>'hamim@gmail.com',
                'phone'=>'01732312998',
                'address'=>'dhaka',
                'department_id'=>1,
                'session_id'=>1,
                'image'=>'01.jpg'
            ],
            [
                'id'=>2,
                'name'=>'hamim2',
                'email'=>'hamim2@gmail.com',
                'phone'=>'01832312998',
                'address'=>'dhaka',
                'department_id'=>2,
                'session_id'=>1,
                'image'=>'02.jpg'
            ],
            [
                'id'=>3,
                'name'=>'hamim3',
                'email'=>'hamim3@gmail.com',
                'phone'=>'01932312998',
                'address'=>'dhaka',
                'department_id'=>2,
                'session_id'=>2,
                'image'=>'03.jpg'
            ],
            [
                'id'=>4,
                'name'=>'hamim4',
                'email'=>'hamim4@gmail.com',
                'phone'=>'01632312998',
                'address'=>'dhaka',
                'department_id'=>1,
                'session_id'=>3,
                'image'=>'04.jpg'
            ]
        ];
    }
    public function studentDetails($id){
        $this->students = $this->getAlStudent();
        foreach ($this->students as $this->student){
            if ($this->student['id'] == $id){

//                return $this->student;

                $this->department = new Department();
                $this->getDpartmentName = $this->department->getDepartmentById($this->student['department_id']);

//                array_push($this->student['department_id'],$this->getDpartmentName);


                $this->session = new Session();
                $this->getSessionName = $this->session->getSessionById($this->student['session_id']);


                 $this->student['department_name']= $this->getDpartmentName;
                $this->student['session_name']= $this->getSessionName;
                return $this->student;
            }

        }

    }
}
