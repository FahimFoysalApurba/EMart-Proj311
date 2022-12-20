<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserProfileCon extends Controller
{
    //
    function userProfile(){
        //$data= User::all();
        $sess=session('user');
        $user= DB::table('users')->select("name", "email", "password")->where("id","$sess")->first();
        $data=[$user->name, $user->email, $user->password];
        $count_1= DB::table('products')->count();
    
    
       // $data1=
           //$data=DB::table('admin')->select("*")->get();
    
            return view('/UserProfile', compact("count_1" ))->with('user', $data);
        }
}
