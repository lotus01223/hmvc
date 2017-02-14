<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NationalitySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(JapaneseLevelSeeder::class);
        $this->call(ItExperienceSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(EducationMasterSeeder::class);
        $this->call(PrefectureSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(LanguageLevelSeeder::class);
        $this->call(ItSkillCategorySeeder::class);
        $this->call(ItSkillMasterSeeder::class);
    }
}
