<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            '1' => ['Systems Analyst/Consultant', 'Systems Analyst/Consultant'],
            '2' => ['Project Manager', 'Project Manager'],
            '3' => ['Application Engineer (Open System)', 'Application Engineer (Open System)'],
            '4' => ['Application Engineer (Web/Mobile)', 'Application Engineer (Web/Mobile)'],
            '5' => ['Application Engineer (Enterprise)', 'Application Engineer (Enterprise)'],
            '6' => ['Application Engineer (Embedded Systems)', 'Application Engineer (Embedded Systems)'],
            '7' => ['Database Engineer', 'Database Engineer'],
            '8' => ['Server/Infra Engineer', 'Server/Infra Engineer'],
            '9' => ['Security Engineer', 'Security Engineer'],
            '10' => ['Network Engineer (Design)', 'Network Engineer (Design)'],
            '11' => ['Network Engineer (Operation/Maintenance)', 'Network Engineer (Operation/Maintenance)'],
            '12' => ['Research & Development', 'Research & Development'],
            '99' => ['Other (IT/Internet/Telecommunications) Engineer', 'Other (IT/Internet/Telecommunications) Engineer'],
        ];

        foreach ($jobs as $id => $name) {
                DB::table('jobs')->insert([
                'id' => $id,
                'job_en' => $name[0],
                'job_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
