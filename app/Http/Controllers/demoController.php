<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function homePage(){
        $products = Product::take(4)->orderBy('product_name','asc')->get();
        $category = Product::take(4)->orderBy('price')->get();
        $categorys = Product::take(4)->orderBy('price','desc')->get();
        return view("home",['products'=>$products,'category'=>$category,'categorys'=>$categorys]);
    }

    public function listPage(){
        $products = Product::find(1);
        $category_products = Product::where("category_id",$products->category_id)->where('id',"!=",$products->id)->take(10)->get();
        $brand_products = Product::where("brand_id",$products->brand_id)->where('id',"!=",$products->id)->take(10)->get();

        return view ("list_product",['products'=>$products,'category_products'=>$category_products,
            'brand_products'=>$brand_products]);
    }

    public function detailPage(){
//        $products = Product::where("category_id",5)->take(10)->orderBy('product_name','asc')->get();
        $products = Product::where("category_id",5)->take(10)->orderBy('created_at','asc')->get();
        return view ("product_detail",['products'=>$products]);
    }
}
