<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NHS_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nhsMatKhau = md5("a123456@");
        DB::table('NHS_QUAN_TRI')->insert([
            'nhsTaiKhoan'=>"sonnguyennr111@gmail.com",
            'nhsMatKhau' =>$nhsMatKhau,
            'nhsTrangThai' =>0
        ]);
        DB::table('NHS_QUAN_TRI')->insert([
            'nhsTaiKhoan'=>"0388604819",
            'nhsMatKhau' =>$nhsMatKhau,
            'nhsTrangThai' =>0
        ]);
    }
}
