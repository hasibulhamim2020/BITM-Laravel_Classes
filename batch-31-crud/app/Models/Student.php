<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    private static $student;
    public static function saveinfo($request){
        self::$student = new Student();
        self::$student->name     = $request->name;
        self::$student->email    = $request->email;
        self::$student->phone    = $request->phone;
        self::$student->address  = $request->address;
        self::$student->save();
    }
}
