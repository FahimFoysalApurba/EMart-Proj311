<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PostController extends Controller
{
    public function postMaker(Request $req){

        $slctOp= $req->catagory;
        $P_name=$req->P_name;
        $price=$req->price;
        $No_of_copy=$req->NOC;
        $description=$req->description;

        if($No_of_copy>0){
          $status='availible';

        }
        else
        $status= "Not availible";
     
    
           
        if(empty($P_name) || empty($price)|| empty($description) || empty($No_of_copy)){
             $flag="ERROR: None of this field Should be Empty";
              return view('/postError', compact('flag'));
    
         }
         else{
                $name= $req->file('image')->store('docs');

      
                DB::table('products')->insert([
                    'name'=>"$P_name",
                    'price'=>"$price",
                    'description'=>"$description",
                    'catagory'=>"$slctOp",
                    'No_of_copies'=>"$No_of_copy",
                    'image'=>"$name",
                    'availible_status'=>"$status"
                ]);

               

          
                return redirect('/adminPost');

            }
           
         }
     }







      //  $image= $req->file('image');
      /* $product= new Product();
       $product->P_name=$req->input('P_name');
       $product->price=$req->input('price');
       $product->description=$req->input('description');
       $product->image= $req->file('image');*/

        //$image->store('docs');    ----> saved at storage/app/docs

      /*  if($req->hasfile('image')){
          $file= $req->file('image');
          $extension= $file->getClientOriginalExtension(); // getting image extension
          $filename= time(). '.'.$extension;
          $file->move('upload/product/', $filename);
          $product->image= $filename;
        }
        else{
          return $req;
          $product->image="";
        }
        $product->save();
        */

     // $file= $req->file('image');
                //   $name = $image->getClientOriginalName();
                  //$filename= $file->hasName(). '.' . $req->get('image')->getClientOriginalExtension(); 
                  /* $extension= $file->getClientOriginalExtension(); // getting image extension
                   $filename= time(). '.'.$extension;*/