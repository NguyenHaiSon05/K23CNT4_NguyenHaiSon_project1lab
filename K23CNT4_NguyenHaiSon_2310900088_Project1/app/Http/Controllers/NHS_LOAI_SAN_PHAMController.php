<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NHS_LOAI_SAN_PHAMController extends Controller
{
    //admin:CRUD

    //list
    public function nhsList()
    {
        $nhsLoaiSanPham = NHS_LOAI_SAN_PHAM::all();

        return view('nhsAdmins.nhsLoaiSanPham.nhs-list',['nhsLoaiSanPham'=>$nhsLoaiSanPham]);
    }
    //create
    public function nhsCreate()
    {
        return view('nhsAdmins.nhs');

          
    }
}
