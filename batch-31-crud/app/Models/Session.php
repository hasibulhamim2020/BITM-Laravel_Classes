<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    public static $session;
    public static function saveInfo($request,$id=null){
        if ($id!=null){
            self::$session = Session::find($id);
        }
        else{
            self::$session = new Session();
        }
        self::$session->name = $request->name;
        self::$session->code = $request->code;
        self::$session->save();
    }

    public static function statusCheck($id){
        self::$session = Session::find($id);
        if (self::$session-> status == 1){
            self::$session-> status = 0;
        }
        else{
            self::$session-> status = 1;
        }
        self::$session->save();
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
