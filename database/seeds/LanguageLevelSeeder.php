<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LanguageLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$language_levels = [
            '1' => ['Beginner class', '初級レベル'],
            '2' => ['Intermediate class', '中級レベル'],
            '3' => ['Advanced class', '上級レベル'],
            '4' => ['Native', '母国語'],
        ];

        foreach ($language_levels as $id => $name) {
                DB::table('language_levels')->insert([
                'id' => $id,
                'lang_level_en' => $name[0],
                'lang_level_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
