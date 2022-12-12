<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterController extends Controller
{
    //
    function registration(Request $req){

        $name= $req->name;
        $email=$req->email;
        $password=$req->password;

      /* $vali=$req->validate([
            $name=>'required',
            $email=>'required|unique:users|email',
            $password=>'required'
       ]);
*/
       
    $count= DB::table('users')->select('id','name','email')->where('email', $email )->count();
       
         

    if( empty($name) || empty($email) || empty($password)){
        $flag="None of this field Should be Empty";
        return view('/registerError', compact('flag'));
    }
     
    else{
    
      if($count == 0){
        DB::table('users')->insert([
            'name'=>"$name",
            'email'=>"$email",
            'password'=>"$password"
        ]);
        return redirect('/login');

      }

        else if($count==1){
            $flag="Email already eists";
            return view('/registerError', compact('flag'));
        } 
      }

   
          
        
        /*

         User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
         ]);
         */
        

    }
}
