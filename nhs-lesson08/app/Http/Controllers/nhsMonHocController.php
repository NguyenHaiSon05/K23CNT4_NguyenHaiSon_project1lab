<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nhsMonHocController extends Controller
{
    // #1 List mon hoc
    public function nhsList()
    {
        $nhsMonHocs = DB::table('nhsmonhoc')->get();
        return view('nhsMonHoc.nhsList',['nhsMonHocs'=>$nhsMonHocs]);
    }
}
