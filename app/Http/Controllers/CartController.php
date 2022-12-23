<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CartController extends Controller
{
    
    public function cartCont(){
        $user_id=session('user');
        $products=DB::table('cart')->join("products", "cart.product_id", "=", "products.id")
        ->where("cart.user_id", $user_id)
        ->select("products.*", "cart.no_of_copies","cart.id as cart_id")
        ->get();
        return view("/cart", ["products"=>$products]);
    }
}
