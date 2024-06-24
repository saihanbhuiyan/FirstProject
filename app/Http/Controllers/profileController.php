<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function inbox($id){
      // return 'profile '.$id ;
      return response()->json([
          "name" => "Donal Trump",
          "age" => "75",
          "id"=>"your required ",'profile '.$id
      ]);
       $data=[
           $name = "Donal Trump",
           $value = "75",
           $minutes = "10",
           $path = "C:\Users\saihan bhuiyan\OneDrive\Desktop\FirstProject\resources\views\welcome.blade.php",
           $domain = "localhost",
           $secure = "true",
           $httpOnly = "true"
       ];
       
    }
    
}
