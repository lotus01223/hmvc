<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$exp = [
            '1' => ['less than One year', '１年未満'],
            '2' => ['1 to 3 years', '１〜３年'],
            '3' => ['3 to 5 years', '３〜５年'],
            '4' => ['over 5 years', '５年以上'],
            '99' => ['None', '経験無し'],
        ];

        foreach ($exp as $id => $name) {
                DB::table('experiences')->insert([
                'id' => $id,
                'exp_label_en' => $name[0],
                'exp_label_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
