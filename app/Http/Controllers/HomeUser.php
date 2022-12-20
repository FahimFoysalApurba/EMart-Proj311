<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;

class HomeUser extends Controller
{
    //
    function displayUser(){
           $data= Product::all();
        

         return view('/userDashboard', ['products'=>$data]);
    }
    function detail($id){
      $da= Product::find($id);
      return view("/detail", ["product"=>$da]);

     
    }

    function addToCart(Request $req){

     $sess= session('user');

      if($req->session()->has('user')){
        $Cart =new Cart;
        $Cart->user_id = $sess;
        $Cart->product_id = $req->product_id;
        $Cart->no_of_copies= $req->no_of_copies;
        $Cart->save();
        return redirect("/CartController");

      }
      else{
        redirect("/login");
      }
    
    }

}
