<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JapaneseLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$levels = ['N1', 'N2', 'N3', 'N4', 'N5', 'None'];
        foreach ($levels as $level) {
                DB::table('japanese_levels')->insert([
                'level' => $level,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
