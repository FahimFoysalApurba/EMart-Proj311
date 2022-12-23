<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
Use App\Models\Order;

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
    function removeCart($id){
      Cart::destroy($id);
      return redirect("/CartController");

    }
    

    function order_now($price){
     
      return view("/order", compact("price"));
    }



    function buyProduct($price){
      $sess= session('user');

      $count=DB::table('cart')->select('*')->where('user_id', "=", $sess)->count();

      $data=Cart::where('user_id', "=", $sess)->get();

      if($count > 0 ){

        foreach($data as $cart){

          $Order= new Order;
          $Order->product_id=$cart["product_id"];
          $Order->user_id=$cart["user_id"];
          $Order->status="Pending";
          $Order->no_of_copies= $cart["no_of_copies"];
          $Order->save();


          $copy=DB::table('products')->select('No_of_copies')->first();

          $p_no_of_copy=$copy->No_of_copies - $cart["no_of_copies"]+1;

          DB::table('products')->where('id' , "=", $cart["product_id"])->update(['no_of_copies'=> $p_no_of_copy]);

          if($p_no_of_copy<=0){
            DB::table('products')->update('availible_status =?', "not availible")->where('id',"=",$cart["product_id"]); 
          }

          $data=Cart::where('user_id', "=", $sess)->delete();

        }
        
        
      }

      return redirect("/HomeUser");
      
    }

}
