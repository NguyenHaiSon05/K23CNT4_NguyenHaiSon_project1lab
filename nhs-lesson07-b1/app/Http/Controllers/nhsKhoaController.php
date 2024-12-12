<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nhsKhoaController extends Controller
{
    // # Đọc dữ liệu từ bảng khoa
    public function nhsGetAllKhoa()
    {
        // Truy vấn đọc dữ liệu từ bảng khoa
        $nhsKhoas = DB ::select("Select * from nhskhoa ");
        // Chuyển dữ liệu lên view để hiển thị
        return view('nhsKhoa.nhsList',['nhsKhoas' => $nhsKhoas]);
    }

    # Chi tiết khoa
    public function nhsGetkhoa($makh)
    {
        $khoa = DB :: select("Select * from nhskhoa where nhsmakh=?",[$makh])[0];
        return view('nhsKhoa.nhsDetail',['khoa'=>$khoa]);
    }

    #Edit - get
    public function nhsEdit($makh)
    {
        $khoa = DB :: select("Select * from nhskhoa where nhsmakh=?",[$makh])[0];
        return view('nhsKhoa.nhsEdit',['khoa'=>$khoa]);
    }
    #Edit Submit
    public function nhsEditSubmit(Request $request)
    {
        // Lấy dữ liệu mới trên form sửa
        $makh = $request->input('NHSMAKH');
        $tenkh = $request->input('NHSTENKH');  
        DB :: update("UPDATE nhskhoa SET NHSTENKH = ? WHERE NHSMAKH =?",[$tenkh,$makh]);  
        return redirect('/khoa');
    }
}
