<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function home(){
        $product = Product::take(6)->orderBy('created_at','asc')->get();
        $category = Product::take(6)->orderBy('price')->get();
        $categorys = Product::take(6)->orderBy('price','desc')->get();//gia cao
        return view("home",['product'=>$product,'category'=>$category,'categorys'=>$categorys]);
    }

    public function listing($id){
//        $products = Product::find($id);
//        $product = Product::where("category_id",$id)->take(9)->get();
        $category = Category::find($id);
        //$category->Product()->orderBy('price','desc')->take(10)->get();
        return view("listing",['category'=>$category]);
    }

    public function product($id){
        $product = Product::find($id);//tra ve 1 object Product theo id
        $category_products = Product::Where('category_id',$product->category_id)->Where('id','!=',$product->id)->take(4)->get();
        $brand_products = Product::Where('brand_id',$product->brand_id)->Where('id','!=',$product->id)->take(4)->get();

        return view('product',['product'=>$product,'category_product'=>$category_products,'brand_product'=>$brand_products]);
    }


    public function shoppingPage($id, Request $request){
        $product = Product::find($id);
//        $product->update([
//            "quantity" => $product->quantity-1
//        ]);

//        session(['key'=>'value']);  //truyen 1 gia trij vao session

        /*
        *cart => array product (product ->cart_qty = so luong mua)
        */

        $cart = $request->session()->get("cart");
        if ($cart == null){
            $cart = [];
        }

        foreach ($cart as $p){
            if ($p->id == $product ->id){
                $p->cart_qty = $p->cart_qty +1;
                $p->cart_price= $product->price++;
                session(["cart"=>$cart]);
                return redirect()->to("/cart");
            }
        }
        $product->cart_qty = 1;
        $cart[] = $product;
        session(["cart"=>$cart]);
        return redirect()->to("/cart");

//        return redirect()->to("product/{$product->id}");
    }

    public function cart(Request $request){
        $cart = $request->session()->get("cart");
        if ($cart == null){
            $cart = [];
        }
        return view("cart",["cart"=>$cart]);
    }

    public function clearCart(Request $request){
        $request->session()->forget("cart");
        return redirect()->to("/");
    }


}
