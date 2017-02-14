<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            '1' => ['English', '英語'],
            '2' => ['Vietnamese', 'ベトナム語'],
            '3' => ['Malaysian', 'マレーシア語'],
            '4' => ['Indonesian', 'インドネシア語'],
            '5' => ['Chinese', '中国語'],
            '6' => ['Thai', 'タイ語'],
            '7' => ['Filipino', 'フィリピン語'],
            '8' => ['Hindi', 'ヒンディー語'],
            '9' => ['Spanish', 'スペイン語'],
            '10' => ['French', 'フランス語'],
            '11' => ['Portuguese', 'ポルトガル語'],
            '12' => ['Japanese', '日本語'],
            '99' => ['Other', 'その他'],
        ];

        foreach ($languages as $id => $name) {
                DB::table('languages')->insert([
                'id' => $id,
                'language_en' => $name[0],
                'language_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
