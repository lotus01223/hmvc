<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItSkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [
            '1' => ['Work (Project Management / System Development)', '経験業務（プロジェクトマネジメント・システム開発'],
            '2' => ['Work (Network / Database)', '経験業務（ネットワーク構築・DB関連'],
            '3' => ['Operation System', 'OS'],
            '4' => ['Programming', 'プログラミング'],
            '5' => ['Database / Groupware', 'データベース・グループウェア'],
            '6' => ['Field (System Development)', '経験分野（システム開発'],
            '7' => ['Application Framework', 'アプリケーションフレームワーク'],
            '99' => ['None', 'None'],
        ];

        foreach ($categories as $id => $name) {
                DB::table('it_skill_categories')->insert([
                'id' => $id,
                'skill_cate_en_name' => $name[0],
                'skill_cate_jp_name' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
