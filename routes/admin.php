<?php
//category
Route::get('category',"AdminController@category");
Route::get('category/create',"AdminController@categoryCreate");
Route::post('category/store',"AdminController@categoryStore");
Route::get("category/edit/{id}","AdminController@categoryEdit");
Route::post("category/update/{id}","AdminController@categoryUpdate");

//brand
Route::get('brand',"AdminController@brand");
Route::get('brand/create',"AdminController@brandCreate");
Route::get('brand/edit/{id}',"AdminController@brandEdit");
Route::post('brand/update/{id}',"AdminController@brandUpdate");
Route::post('brand/store',"AdminController@brandStore");

//product
Route::get('product',"AdminController@product");
Route::get('product/create',"AdminController@productCreate");
//Route::get('product/edit/{id}',"AdminController@productEdit");
Route::post('product/store',"AdminController@productStore");
Route::post("product/update/{id}","AdminController@productUpdate");

//user
Route::get('user',"AdminController@user");
Route::get('user/create',"AdminController@userCreate");
Route::post('user/store',"AdminController@userStore");
Route::get("user/update/{id}","AdminController@userUpdate");

