<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NHS_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "VP001",
            'nhsTenSanPham'   => "Cây phú quý",
            'nhsHinhAnh'      => "images/san-pham/VP001.jpg",
            'nhsSoLuong'      =>100,
            'nhsDonGia'       =>699000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "VP002",
            'nhsTenSanPham'   => "Cây cây đại phú gia",
            'nhsHinhAnh'      => "images/san-pham/VP002.jpg",
            'nhsSoLuong'      =>250,
            'nhsDonGia'       =>550000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "VP003",
            'nhsTenSanPham'   => "Cây hạnh phúc",
            'nhsHinhAnh'      => "images/san-pham/VP003.jpg",
            'nhsSoLuong'      =>150,
            'nhsDonGia'       =>250000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "VP004",
            'nhsTenSanPham'   => "Cây vạn lộc",
            'nhsHinhAnh'      => "images/san-pham/VP004.jpg",
            'nhsSoLuong'      =>300,
            'nhsDonGia'       =>799000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "PT001",
            'nhsTenSanPham'   => "Cây thiết mộc lan",
            'nhsHinhAnh'      => "images/san-pham/PT001.jpg",
            'nhsSoLuong'      =>150,
            'nhsDonGia'       =>590000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "PT002",
            'nhsTenSanPham'   => "Cây trường sinh",
            'nhsHinhAnh'      => "images/san-pham/PT002.jpg",
            'nhsSoLuong'      =>100,
            'nhsDonGia'       =>150000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "PT003",
            'nhsTenSanPham'   => "Cây hạnh phúc",
            'nhsHinhAnh'      => "images/san-pham/PT003.jpg",
            'nhsSoLuong'      =>200,
            'nhsDonGia'       =>299000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
        DB::table('NHS_SAN_PHAM')->insert([
            'nhsMaSanPham'    => "PT004",
            'nhsTenSanPham'   => "Cây hoa nhài(Lài ta)",
            'nhsHinhAnh'      => "images/san-pham/PT004.jpg",
            'nhsSoLuong'      =>300,
            'nhsDonGia'       =>199000,
            'nhsMaLoai'       =>1,
            'nhsTrangThai'    =>0
        ]);
    }
}
