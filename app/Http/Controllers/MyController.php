<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function stampNumbers()
    {
        $arr = [];

        for ($i=10; $i < 101 ; $i++) { 
            if($i%2==0)
        {
            
        } else array_push($arr, $i); 
                
             
            
        }
        return view("odd",compact('arr'));
    }
}
