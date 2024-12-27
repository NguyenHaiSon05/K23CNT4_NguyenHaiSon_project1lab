<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHS_QUAN_TRIController extends Controller
{
    //

    //Login (authentication)
    public function nhsLogin(){
        return view('nhsLogin.nhs-login');
    }
    //POST: login (authentication)
    public function nhsLoginSubmit(Request $request){
        
        return view('nhsLogin.nhs-login');
    }
}

