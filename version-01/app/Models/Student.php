<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;
    public static function saveData($data){
        self::$student = new Student();
        self::$student->name = $data->name;
        self::$student->email = $data->email;
        self::$student->phone = $data->phone;
        self::$student->address = $data->address;
        self::$student->save();
    }
}
