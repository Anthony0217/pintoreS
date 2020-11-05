<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Control extends Controller
{

public function menu(){
    return view('plantilla');
    }

public function gustav(){
    return view('p/gustav');
}

public function gustabo(){
     return view('p/gustabo');
   }

public function henri(){
    return view('p/henri');
}

 public function picasso(){  
    return view('p/picasso');
}




}


