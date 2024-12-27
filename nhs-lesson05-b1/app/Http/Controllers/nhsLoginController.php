<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhsLoginController extends Controller
{
     public function index()
     {
         return view('login');
     }
     public function loginSubmit(Request $request)
     {
         // Validation form
         $validationData = $request->validate([
             'email' =>'required|email',
             'password'=>'required|min:6|max:12'
      ]);
        // Lấy giá trị trên các điều khiển của form
        $email=$request->input('email');
        $password=$request->input('password');
        return "Email:" . $email . "Password:".$password;
    }
}
