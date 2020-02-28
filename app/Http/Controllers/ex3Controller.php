<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ex3Controller extends Controller
{
    public function classRoom(){
        $arr = [
            [
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ],
            [
                "id" => 2,
                "name" => "Nguyen Van A",
                "email" => "nvb@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"5/6/2000",
                "mark" =>9
            ],
            [
                "id" => 3,
                "name" => "Nguyen Van C",
                "email" => "nvc2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ],
            [
                "id" => 4,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ],
            [
                "id" => 5,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ]

        ];

        return view("ex3",['students'=> $arr]);
    }
}
