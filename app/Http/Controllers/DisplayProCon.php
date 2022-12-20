<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Http\Request;

class DisplayProCon extends Controller
{
    //
    function display(){
           $data= Product::all();
        
           return view('/DisplayAdmin', ['products'=>$data]);
    }
    
}
