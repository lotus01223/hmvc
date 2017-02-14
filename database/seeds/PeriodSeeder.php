<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = [
            '1' => ['Immediately', 'すぐにでも'],
            '2' => ['within Three Months', '３ヶ月以内'],
            '3' => ['within Six Months', '６ヶ月以内'],
            '4' => ['within One Year', '１年以内'],
            '99' => ['Undecided', '未定'],
        ];

        foreach ($periods as $id => $name) {
                DB::table('periods')->insert([
                'id' => $id,
                'period_en' => $name[0],
                'period_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
