<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $imageNewName, $dir, $imgUrl;
    public static function saveProduct($productData,$id=null){

        if ($id!=null){
            self::$product = Product::find($id);
        }
        else{
            self::$product = new Product();
        }

        self::$product->p_name = $productData->p_name;
        self::$product->catagory_id = $productData->catagory_id;
        self::$product->p_code = $productData->p_code;
        self::$product->p_price = $productData->p_price;
        if ($productData->file('p_image')){
            if (self::$product->p_image){
                if (file_exists(self::$product->p_image)){
                    unlink(self::$product->p_image);
                }
            }
            self::$product->p_image  = self::saveImage($productData);
        }
        self::$product->save();
    }
    public static function saveImage($productData){
        self::$image = $productData->file('p_image');
        self::$imageNewName = $productData->name.'_'.rand().'.'.self::$image -> extension();
        self::$dir = 'assets/img/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir, self::$imageNewName);
        return self::$imgUrl;
    }


    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
}
