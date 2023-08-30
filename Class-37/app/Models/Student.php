<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Session;

class Student extends Model
{
    use HasFactory;
    private $students=[],$department,$departments,$student,$getDpartmentName,$getSessionYear,$session;
    public function getAlStudent(){
        return $this->students=[
            [
                'id'=>1,
                'name'=>'Hasibul Hamim',
                'email'=>'hamimhasibul72@gmail.com',
                'phone'=>'01732312998',
                'address'=>'Cumilla',
                'department_id'=>1,
                'session_id'=>1,
                'image'=>'hamim.jpg'
            ],
            [
                'id'=>2,
                'name'=>'MD. Ismail',
                'email'=>'ismail.cse.diu@gmail.com',
                'phone'=>'01832312998',
                'address'=>'dhanmondi,dhaka.',
                'department_id'=>2,
                'session_id'=>1,
                'image'=>'hamim2.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Akib Buyhain',
                'email'=>'akib.fftdd@gmail.com',
                'phone'=>'01932312998',
                'address'=>'Chadpur,Cumilla',
                'department_id'=>2,
                'session_id'=>2,
                'image'=>'hamim3.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Nishat Tasnim',
                'email'=>'mimkst.2000@gmail.com',
                'phone'=>'01632312998',
                'address'=>'Kushtia',
                'department_id'=>1,
                'session_id'=>3,
                'image'=>'hamim4.jpg'
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
                $this->session = new Session();
                $this->getSessionYear = $this->session->getSessionYearById($this->student['session_id']);

//                array_push($this->student['department_id'],$this->getDpartmentName);

                 $this->student['department_name']= $this->getDpartmentName;
//                return $this->student;
                $this->student['session_year']= $this->getSessionYear;
                return $this->student;
            }

        }

    }
}
