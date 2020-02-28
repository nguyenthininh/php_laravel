<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function classRoom(){
        $arr = [
            [
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "mark" =>9
            ],
            [
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "mark" =>9
            ],
            [
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "mark" =>9
            ]


        ];
        return view("student_listing",['students'=> $students]);
    }
}
