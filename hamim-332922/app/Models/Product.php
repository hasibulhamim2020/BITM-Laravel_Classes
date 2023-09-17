<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product;
    public static function saveProduct($productData){
        self::$product = new Product();
        self::$product->p_name = $productData->p_name;
        self::$product->catagory_id = $productData->catagory_id;
        self::$product->p_code = $productData->p_code;
        self::$product->p_price = $productData->p_price;
        self::$product->save();
    }
}
