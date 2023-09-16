<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private static $student;
    public static function saveStudentData($studentData){
        self::$student = new Student();

        self::$student->name = $studentData-> name;
        self::$student->email = $studentData-> email;
        self::$student->phone = $studentData-> phone;
        self::$student->address = $studentData-> address;
        self::$student-> save();

    }
    public static function updateStudentData($studentData){
        $student = Student::find($studentData->id);
            $student->name = $studentData->name;
            $student->email = $studentData->email;
            $student->phone = $studentData->phone;
            $student->address = $studentData->address;
            $student->save();
    }
}


