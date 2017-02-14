<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationality = [
            '1' => ['Vietnamese', 'ベトナム'],
            '2' => ['Malaysian', 'マレーシア'],
            '3' => ['Taiwanese', '台湾'],
            '4' => ['Indonesian', 'インドネシア'],
            '5' => ['Singaporean', 'シンガポール'],
            '6' => ['Chinese', '中国'],
            '7' => ['Thai', 'タイ'],
            '8' => ['Filipino', 'フィリピン'],
            '9' => ['Indian', 'インド'],
            '10' => ['Japanese', '日本'],
            '11' => ['Korean', '韓国'],
            '99' => ['Other', 'その他'],
        ];

        foreach ($nationality as $id => $name) {
                DB::table('nationalities')->insert([
                'id' => $id,
                'nationality_en' => $name[0],
                'nationality_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
