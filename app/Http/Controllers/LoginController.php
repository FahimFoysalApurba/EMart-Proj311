<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    //
    public function LoginCon(Request $req){
       $slctOp= $req->usertype;
    //  $slctOp_b= $req->usertype['admin'];
       $email=$req->email;
       $password=$req->password;

       
    if(empty($email) || empty($password)){
         $flag="None of this field Should be Empty";
          return view('/loginError', compact('flag'));

     }

    else{


       if($slctOp=='user'){
            $count= DB::table('users')->select('id','name','email')->where('email', $email )->count();

                if($count=1){
       
                    $pass_given= DB::table('users')->select('password')->where('email', $email)->first();

                              if($pass_given->password==$password){
                                 $data=DB::table('users')->select('id')->where('email', $email)->first();
                                 $req->session()->put('user', $data->id);
                                 return redirect('/userDashboard');
                                }
                              else{
                                  $flag="Either Email or Password is wrong";
                                  return view('/loginError', compact('flag'));
                               }
   
             
                 }
      
      
         }
         else if($slctOp=='admin'){

            $count= DB::table('users')->select('id','name','email')->where('email', $email )->count();

            if($count=1){
   
                $pass_given= DB::table('admin')->select('password')->where('email', $email)->first();

                          if($pass_given->password==$password){
                        
                             $data=DB::table('admin')->select('id')->where('email', $email)->first();
                             $req->session()->put('user', $data->id);
                             return redirect('/adminDashboard');
                             
                            }
                          else{
                              $flag="Either Email or Password is wrong";
                              return view('/loginError', compact('flag'));
                           }

         
            }
         }
      }  
   }
}
