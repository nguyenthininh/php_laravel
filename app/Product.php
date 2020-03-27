<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';
//    protected $table ='product';
    protected $fillable = ['product_name','product_desc','thumbnail','gallery','category_id',
        'brand_id','price','quantity'];
    public function Category(){
        return $this->belongsTo("\App\Category");
    }

    public function Brand(){
        return $this->belongsTo("\App\Brand");
    }
}
