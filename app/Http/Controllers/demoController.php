<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Order;
use App\OrderProduct;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
//        $cart_total =0;
//        foreach ($cart as $p){
//            $cart_total +=($p->price*$p->cart_qty);
//        }

        return view("cart",["cart"=>$cart]);
    }


    public function filter($c_id,$b_id){
        $product = Product::Where('category_id',$c_id)->Where("brand_id",$b_id)->get();
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
            DB::table("orders_products")->insert([
                'order_id'=>$order->id,
                'product_id'=>$p->id,
                'qty'=>$p->cart_qty,
                'price'=>$p->price
            ]);
        }

        session()->forget('cart');
        Mail::to("ntninh2000@gmail.com")->send(new OrderCreated());
        return redirect()->to("/checkout-success");

    }

    public function checkoutSuccess(){
        return view("success");
    }

    public function historyOrder($id){
        $id = Auth::id();
        $newests = Order::Where('user_id',$id)->orderBy('created_at')->get();
//        dd($id);
        return view('orderHistory',['newests'=>$newests]);

    }
    public function viewOrder($id)
    {
        $order = Order::find($id);
        $order_product = OrderProduct::all()->where("order_id", $id);
        return view("overViews", [
            "order" => $order,
            "order_product" => $order_product
        ]);
    }

    public function addOrder($id)
    {
        $order = Order::find($id);
        $order_product = OrderProduct::all()->where("order_id", $id);
        $new_order = $order->replicate();
        $new_order->status = Order::STATUS_PENDING;
        $new_order->save();
        foreach ($order_product as $p) {
            DB::table("orders_products")->insert([
                'order_id' => $new_order->id,
                'product_id' => $p->product_id,
                'qty' => $p->qty,
                'price' => $p->price
            ]);
        }

        return redirect()->to("/checkout-success");
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        try {
            if ($order->status != Order::STATUS_CANCEL) {
                $order->status = Order::STATUS_CANCEL;
                $order->save();
            }
        } catch (\Exception $e) {
            return redirect()->back();
        }
        return redirect()->to("order-history/{id}");
    }

}
