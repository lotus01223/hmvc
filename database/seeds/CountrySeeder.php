<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            '1' => ['Vietnam', 'ベトナム'],
            '2' => ['Malaysia', 'マレーシア'],
            '3' => ['Taiwan', '台湾'],
            '4' => ['Indonesia', 'インドネシア'],
            '5' => ['Singapore', 'シンガポール'],
            '6' => ['Chine', '中国'],
            '7' => ['Thai', 'タイ'],
            '8' => ['Philippine', 'フィリピン'],
            '9' => ['India', 'インド'],
            '10' => ['Japan', '日本'],
            '99' => ['Other', 'その他'],
        ];

        foreach ($country as $id => $name) {
                DB::table('countries')->insert([
                'id' => $id,
                'country_en' => $name[0],
                'country_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
