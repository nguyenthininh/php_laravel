<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use App\User;
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

    public function product(){
        $products = Product::all();
        return view('admin.product.index',['products'=>$products]);
    }

    public function user(){
        $users = User::all();
        return view('admin.user.index',['users'=>$users]);
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

    public function categoryEdit($id){
        $category=Category::find($id);
        return view("admin.category.edit",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
        $category= Category::find($id);
        $request->validate([ // truyen vao rules de validate
            "category_name"=> "required|string|unique:category,category_name,".$id
        ]);

        try{
            $category->update([
                "category_name"=> $request->get('category_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function categoryDestroy($id){
        $category = Category::find($id);
        try {
            $category->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();// cho 1 error vao session, ngoai index se check va in ra
        }
        return redirect()->to("admin/category");
    }


    //brand
    public function brandCreate(){
        return view("admin.brand.create");
    }

    public function brandStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "brand_name"=> "required|string|unique:brand", // validation laravel
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

    public function brandEdit($id){
        $brand = Brand::find($id);
        return view("admin.brand.edit",["brand"=>$brand]);
    }
    public function brandUpdate($id,Request $request){
        $brand = Brand::find($id);
        $request->validate([
            "brand_name"=> "required|string|unique:brand,brand_name,".$id
        ]);

        try{
            $brand->update([
                "brand_name"=> $request->get("brand_name")
            ]);
        }catch(\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/brand");
    }

    public function brandDestroy($id){
        $brand = Brand::find($id);
        try {
            $brand->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();// cho 1 error vao session, ngoai index se check va in ra
        }
        return redirect()->to("admin/brand");
    }

    //product
    public function productCreate(){
        return view("admin.product.create");
    }

    public function productStore(Request $request){
        $request->validate([
            "product_name"=> "required",
            "product_desc"=>"required",
            "thumbnail"=>"required",
            "gallery"=>"required",
            "category_id"=>"required",
            "brand_id"=>"required",
            "price"=>"required",
        ]);
        try{
            Products::create([
                "product_name"=> $request->get("product_name"),
                "product_desc"=> $request->get("product_desc"),
                "thumbnail"=> $request->get("thumbnail"),
                "gallery"=> $request->get("gallery"),
                "category_id"=> $request->get("category_id"),
                "brand_id"=> $request->get("brand_id"),
                "price"=> $request->get("price"),
                "quantity"=> $request->get("quantity"),

            ]);
        }catch(\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");
    }


    public function productEdit($id){
        $products = Product::find($id);
        return view('admin.product.edit',['products'=>$products]);
    }


    public function productUpdate($id,Request $request){
        $product = Product::find($id);
        $request->validate([ // truyen vao rules de validate
            "product_name"=> "required|string|max:255|unique:product,product_name,".$id, // validation laravel
            "product_desc"=> "required|string|max:255:product,product_desc,".$id,
            "thumbnail"=> "required|string|max:255:product,thumbnail,".$id,
            "gallery"=> "required|string|max:255:product,gallery,".$id,
            "category_id"=> "required|product,category_id,".$id,
            "brand_id"=> "required|product,brand_id,".$id,
            "price"=> "required|Float:product,price,".$id,
            "quantity"=> "required|string|",
        ]);

        try {
            Product::create([
                "product_name"=>$request->get("product_name"),
                "product_desc"=>$request->get("product_desc"),
                "thumbnail"=>$request->get("thumbnail"),
                "gallery"=>$request->get("gallery"),
                "category_id"=>$request->get("category_id"),
                "brand_id"=>$request->get("brand_id"),
                "price"=>$request->get("price"),
                "quantity"=>$request->get("quantity"),


            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/product");

    }

    public function productDestroy($id){
        $product = Product::find($id);
        try {
            $product->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();// cho 1 error vao session, ngoai index se check va in ra
        }
        return redirect()->to("admin/product");
    }


    //user
    public function userCreate(){
        return view("admin.user.create");
    }

    public function userStore(Request $request){
        $request->validate([ // truyen vao rules de validate
            "name"=> "required|string|max:255:users,name,",  // validation laravel
            "email" => "required|string|email|max:255|unique:users,email,",
            "password" => "required|string|min:8:users,password,",
            "role"=> "required|Integer:users,role",
        ]);

        try {
            User::create([
                "name"=>$request->get("name"),
                "email"=>$request->get("email"),
                "password"=>$request->get("password"),
                "role"=> $request->get("role"),

            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/user");

    }

    public function userUpdate($id)
    {
        $user = User::find($id);

        try {
            if ($user->role == 0) {
                $user->role = 1;
                $user->save();
            } else {
                $user->role = 0;
                $user->save();
            }
        } catch (Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("admin/user");
    }

    public function userDestroy($id){
        $user = User::find($id);
        try {
            $user->delete(); // xoa cung // CRUD
            // xoa mem
            // them 1 truong status : 0: Inactive; 1: active
            // chuyen status tu 1 -> 0
        }catch (\Exception $e){
            return redirect()->back();// cho 1 error vao session, ngoai index se check va in ra
        }
        return redirect()->to("admin/user");
    }

}
