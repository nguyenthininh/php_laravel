<?php

Route::prefix ("admin")->middleware("check_admin")->group(function (){
    include_once ("admin.php");
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::METHOD(path_string,HANDLE_FUNCTION);
//Method: post get put delete ..crul

Route::get("/xin-chao",function (){
    echo "chao tat ca moi nguoi";
})->middleware("auth");

// chaỵ URL tren trình duyệt --> method Get

Route::get("/danh-sach-lop-hoc","WebController@classRoom");

//ex3_list student
Route::get("/danh-sach-sinh-vien","ex3Controller@classRoom");

//ex3_form_add_student
Route::get("/add-student",function (){
    return view('form_add_student');
});

Route::get("/","demoController@home");
Route::get("/list/{id}","demoController@listing");
Route::get("/product/{id}","demoController@product");
Route::get("/shopping/{id}","demoController@shoppingPage")->middleware("auth");
Route::get("/cart","demoController@cart")->middleware("auth");
Route::get("/clear-cart","demoController@clearCart")->middleware("auth");
Route::get("/checkout","demoController@checkout")->middleware("auth");
Route::post("/checkout","demoController@placeOrder")->middleware("auth");
//Route::get("/checkout","demoController@checkout-seccess")->middleware("auth");


Auth::routes();

Route::get('/home', 'demoController@home')->name('home');

Route::get("/logout",function (){
    \Illuminate\Support\Facades\Auth::logout();
    session()->flush();
    return redirect()->to("/login");
});
