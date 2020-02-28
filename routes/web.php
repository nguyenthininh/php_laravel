<?php

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
});

// chaỵ URL tren trình duyệt --> method Get

Route::get("/danh-sach-lop-hoc","WebController@classRoom");

//ex3_list student
Route::get("/danh-sach-sinh-vien","ex3Controller@classRoom");

//ex3_form_add_student
Route::get("/add-student",function (){
    return view('form_add_student');
});





