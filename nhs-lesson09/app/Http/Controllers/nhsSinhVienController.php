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

        // Creat (Insert)
        public function nhsCreate()
        {
                return view('nhsSinhVien.nhs-create');
        }      

        //nhsCreateSubmit
        public function nhsCreateSubmit(Request $request)
        {
                // Lấy dữ liệu trên form dán cho các thuộc tính của dốid tượng sinh viên
                $nhsSinhVien = new nhsSinhVien;
                $nhsSinhVien->nhsMaSV=$request->nhsMaSV;
                $nhsSinhVien->nhsHoSV=$request->nhsHoSV;
                $nhsSinhVien->nhsTenSV=$request->nhsTenSV;
                $nhsSinhVien->nhsPhai=$request->nhsPhai;
                $nhsSinhVien->nhsNgaySinh=$request->nhsNgaySinh;
                $nhsSinhVien->nhsNoiSinh=$request->nhsNoiSinh;
                $nhsSinhVien->nhsMaKH=$request->nhsMaKH;
                // Ghi vào bảng trong csdl
                $nhsSinhVien->save();
                // return view('nhsSinhVien.nhs-create');
                return back()->with('nhsSinhVien_created','Đã thêm mới một sinh viên thành công!');
        }

}