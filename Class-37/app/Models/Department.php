<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    private $department;
    public $item;
    public function getAllDepartment(){
        return $this->department = [
          [
              'id'=>1,
              'department_name'=>'CSE'
          ],
          [
               'id'=>2,
               'department_name'=>'EEE'
          ]
        ];
    }
    public function getDepartmentById($id){
        $this->department = $this->getAllDepartment();
        foreach ($this->department as $this->item){
            if ($this->item['id'] == $id){
                return $this->item['department_name'];
            }
        }

    }
}
