<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nhsSessionController extends Controller
{
    //Đọc dữ liệu từ Session
    public function nhsGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT4_NguyenHaiSon"))
        {
            echo " <h2> Session Data:". $request->session()->get("K23CNT4_NguyenHaiSon");
        }else{
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }

    //# Ghi dữ liệu vào sessinon
    public function nhsStoreSessionData(Request $request)
    {
        // Lưu
        $request->session()->put('K23CNT4_NguyenHaiSon','K23CNT4 - Nguyễn Hải Sơn - 2310900088');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

        // Xóa dữ liệu trong ssesion
    public function nhsDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT4_NguyenHaiSon');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    } 
}