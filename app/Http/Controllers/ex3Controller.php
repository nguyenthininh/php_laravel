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
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ],
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
                "id" => 1,
                "name" => "Nguyen Van A",
                "email" => "ntninh2000@gmail.com",
                "phonenumber" =>"09876543",
                "hometown" => "HA NOI",
                "date" =>"20/9/2000",
                "mark" =>9
            ],
            [
                "id" => 1,
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
