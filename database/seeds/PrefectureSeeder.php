<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefectures = [
            '1' => ['Hokkaido', '北海道'],
            '2' => ['Aomori', '青森県'],
            '3' => ['Iwate', '岩手県'],
            '4' => ['Miyagi', '宮城県'],
            '5' => ['Akita', '秋田県'],
            '6' => ['Yamagata', '山形県'],
            '7' => ['Fukushima', '福島県'],
            '8' => ['Ibaraki', '茨城県'],
            '9' => ['Tochigi', '栃木県'],
            '10' => ['Gumma', '群馬県'],
            '11' => ['Saitama', '埼玉県'],
            '12' => ['Chiba', '千葉県'],
            '13' => ['Tokyo', '東京都'],
            '14' => ['Kanagawa', '神奈川県'],
            '15' => ['Niigata', '新潟県'],
            '16' => ['Toyama', '富山県'],
            '17' => ['Ishikawa', '石川県'],
            '18' => ['Fukui', '福井県'],
            '19' => ['Yamagata', '山梨県'],
            '20' => ['Nagano', '長野県'],
            '21' => ['Gifu', '岐阜県'],
            '22' => ['Shizuoka', '静岡県'],
            '23' => ['Aichi', '愛知県'],
            '24' => ['Mie', '三重県'],
            '25' => ['Shiga', '滋賀県'],
            '26' => ['Kyoto', '京都府'],
            '27' => ['Osaka', '大阪府'],
            '28' => ['Hyogo', '兵庫県'],
            '29' => ['Nara', '奈良県'],
            '30' => ['Wakayama', '和歌山県'],
            '31' => ['Tottori', '鳥取県'],
            '32' => ['Shimane', '島根県'],
            '33' => ['Okayama', '岡山県'],
            '34' => ['Hiroshima', '広島県'],
            '35' => ['Yamaguchi', '山口県'],
            '36' => ['Tokushima', '徳島県'],
            '37' => ['Kagawa', '香川県'],
            '38' => ['Aichi', '愛媛県'],
            '39' => ['Kochi', '高知県'],
            '40' => ['Fukuoka', '福岡県'],
            '41' => ['Saga', '佐賀県'],
            '42' => ['Nagasaki', '長崎県'],
            '43' => ['Kumamoto', '熊本県'],
            '44' => ['Oita', '大分県'],
            '45' => ['Miyazaki', '宮崎県'],
            '46' => ['Kagoshima', '鹿児島県'],
            '47' => ['Okinawa', '沖縄県'],
            '99' => ['Other', 'その他'],
        ];

        foreach ($prefectures as $id => $name) {
                DB::table('prefectures')->insert([
                'id' => $id,
                'prefectures_en' => $name[0],
                'prefectures_jp' => $name[1],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}