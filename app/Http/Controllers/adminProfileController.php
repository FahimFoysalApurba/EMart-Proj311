<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;



class adminProfileController extends Controller
{
    //
    function adminProfile(){
    $data= Admin::all();
    $count= DB::table('users')->count();
    $count_1= DB::table('products')->count();


   // $data1=
       //$data=DB::table('admin')->select("*")->get();

        return view('/AdminProfile', ['admin'=>$data], compact("count","count_1" ));
    }
}
