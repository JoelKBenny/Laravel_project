<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
    public function home() 
    {
        $data = [
            'name' => 'Joel K Benny',
            'message'=> 'This is the message',
            'names' => ["joel","salla","sreekuttan "]
        ];
        return view('welcome',$data);
    }
}
