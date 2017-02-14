<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EducationMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            '1' => ['Master (include MBA)', '修士(MBA含む)'],
            '2' => ['Bachelor', '学士'],
            '3' => ['Two year Junior College', '2年制短期大学'],
            '4' => ['Senior Training College', '専門学校'],
            '5' => ['Training College', '職業訓練校'],
            '99' => ['Other', '上記以外'],
        ];

        foreach ($education as $id => $name) {
                DB::table('education_masters')->insert([
                'id' => $id,
                'edu_en' => $name[0],
                'edu_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
