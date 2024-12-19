<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHS_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHS_LOAI_SAN_PHAM')->insert([
            'nhsMaLoai'    => "L001",
            'nhsTenLoai'   =>"Cây cảnh văn phòng",
            'nhsTrangThai' =>0
        ]);
        DB::table('NHS_LOAI_SAN_PHAM')->insert([
            'nhsMaLoai'    => "L002",
            'nhsTenLoai'   =>"Cây để bàn",
            'nhsTrangThai' =>0
        ]);
        DB::table('NHS_LOAI_SAN_PHAM')->insert([
            'nhsMaLoai'    => "L003",
            'nhsTenLoai'   =>"Cây cảnh phong thủy",
            'nhsTrangThai' =>0
        ]);
        DB::table('NHS_LOAI_SAN_PHAM')->insert([
            'nhsMaLoai'    => "L004",
            'nhsTenLoai'   =>"Cây thủy canh",
            'nhsTrangThai' =>0
        ]);

    }
}
