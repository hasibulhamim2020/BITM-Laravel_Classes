<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Catagory extends Model
{
    use HasFactory;
    private static $catagory;
    public static function saveCatagory($catagoryData){
        self::$catagory = new Catagory();
        self::$catagory->cat_name = $catagoryData->cat_name;
        self::$catagory->save();
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
