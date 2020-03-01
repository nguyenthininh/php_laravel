<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function listPage(){
        return view ('product_list');
    }

    public function detailPage(){
        return view ('product_detail');
    }
}
