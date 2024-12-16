<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nhsVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhsvattu')->insert([
            'nhsMaVTu'=>'DD01',
            'nhsTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nhsDvTinh'=>'Bộ',
            'nhsPhanTram'=>40,
            ]);
        DB::table('nhsvattu')->insert([
            'nhsMaVTu'=>'DD02',
            'nhsTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'nhsDvTinh'=>'Bộ',
            'nhsPhanTram'=>50,
            ]);    
    }
}
