<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{

    public function home(){
//        if (is_admin())

        $product = Product::take(4)->orderBy('created_at','asc')->get();
        $category = Product::take(7)->orderBy('price')->get();
        $categories = Product::take(4)->orderBy('price','desc')->get();//gia cao
        return view("home",['product'=>$product,'category'=>$category,'categories'=>$categories]);
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

//        return view("cart.cartUser",["cart"=>$cart]);
        return view("cart",["cart"=>$cart]);
    }

    public function clearCart(Request $request){
        $request->session()->forget("cart");
        return redirect()->to("/");
    }

    public function checkout(Request $request){
        if (!$request->session()->has("cart")){
            return redirect()->to("/");
        }
        return view("checkout");
    }

    public function placeOrder(Request $request){
        $request->validate([
            'customer_name'=>'required | string',
            'address'=>'required',
            'payment_method'=> 'required',
            'telephone'=> 'required',
        ]);

        $cart = $request ->session()->get('cart');
        $grand_total = 0;
        foreach ($cart as $p){
            $grand_total += ($p->price * $p->cart_qty);
        }

        $order = Order::create([
            'user_id'=>Auth::id(),
            'customer_name'=> $request ->get("customer_name"),
            'shipping_address'=>$request ->get("address"),
            'telephone'=>$request ->get("telephone"),
            'grand_total'=>$grand_total,
            'payment_method'=>$request ->get("payment_method"),
            "status"=> Order::STATUS_PENDING
        ]);

        foreach ($cart as $p){
            DB::table("order_products")->insert([
                'order_id'=>$order->id,
                'product_id'=>$p->id,
                'qty'=>$p->cart_qty,
                'price'=>$p->price
            ]);
        }

        session()->forget('cart');
        return redirect()->to("/checkout-success");

    }

    public function checkoutSuccess(){
        return view("success");
    }

}
