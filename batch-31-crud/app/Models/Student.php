<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    private static $student, $image, $imageNewName, $dir, $imgUrl;
    public static function saveinfo($request){
        self::$student = new Student();
        self::$student->name     = $request->name;
        self::$student->email    = $request->email;
        self::$student->phone    = $request->phone;
        self::$student->address  = $request->address;
        if ($request->file('image')){
            self::$student->image  = self::saveImage($request);
        }
        self::$student->save();
    }

    public static function updateinfo($request){
        self::$student = Student::find($request->id);
        self::$student->name     = $request->name;
        self::$student->email    = $request->email;
        self::$student->phone    = $request->phone;
        self::$student->address  = $request->address;
        if ($request->file('image')){
            if (self::$student->image){
                if (file_exists(self::$student->image)){
                    unlink(self::$student->image);
                }
            }
            self::$student->image  = self::saveImage($request);
        }
        self::$student->save();
    }

    public static function saveImage($request){
       self::$image = $request->file('image');
       self::$imageNewName = $request->name.'_'.rand().'.'.self::$image -> extension();
       self::$dir = 'assets/img/';
       self::$imgUrl = self::$dir.self::$imageNewName;
       self::$image->move(self::$dir, self::$imageNewName);
       return self::$imgUrl;
    }
}
