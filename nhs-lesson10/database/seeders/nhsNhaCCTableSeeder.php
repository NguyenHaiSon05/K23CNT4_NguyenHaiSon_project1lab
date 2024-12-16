<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class nhsNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('nhsnhacc')->insert([
                'nhsMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'nhsTenNCC'=>$faker->sentence(5),
                'nhsDiachi'=>$faker->address(),
                'nhsDienthoai'=>$faker->phoneNumber(10),
                'nhsemail'=>$faker->email(),
                'nhsstatus'=>$faker->boolean()
            ]);
        }
    }
}
