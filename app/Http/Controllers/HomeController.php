<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request){
  
        return view('home.index');
    }
    public function index2(Request $request,$name){
        $context = [
            'name'=>$name,
            'class'=>"PHP 90",
        ];
        return view('home.index2',$context);
    }
}
