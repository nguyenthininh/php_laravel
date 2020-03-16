<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category(){
        $categories = Category::all();
        return view('admin.category.index',['categories'=>$categories]);
    }

    public function brand(){
        $brands = Brand::all();
        return view('admin.brand.index',['brands'=>$brands]);
    }

    //category
    public function categoryCreate(){
        return view("admin.category.create");
    }

    public function categoryStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "category_name"=> "required|string|unique:category"  // validation laravel
        ]);

        try {
            Category::create([
                "category_name"=>$request->get("category_name"),


            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");

    }


    //brand
    public function brandCreate(){
        return view("admin.brand.create");
    }

    public function brandStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "brand_name"=> "required|string|unique:brand"  // validation laravel
        ]);

        try {
            Brand::create([
                "brand_name"=>$request->get("brand_name"),


            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");

    }

}
