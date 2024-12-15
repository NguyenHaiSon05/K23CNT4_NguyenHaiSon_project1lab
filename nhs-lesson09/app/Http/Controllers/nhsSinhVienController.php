<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhsSinhVien;

class nhsSinhVienController extends Controller
{
            //list / insert / update(edit) / delete
        public function nhsList()
        {
                // Lấy toàn bộ danh sach sinh viên
                $nhsSinhViens = nhsSinhVien::all();

                return view('nhsSinhVien.nhs-List',['nhsSinhViens'=>$nhsSinhViens]);
        }
}