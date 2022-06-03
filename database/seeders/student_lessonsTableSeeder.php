<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class student_lessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_lessons')->insert([
            ['student_id' => 1, 'student_name' => '山田', 'grade' => 1, 'hometown'=>'宮城', 'major_id'=> 1 ],
            ['student_id' => 2, 'student_name' => '田中', 'grade'=> 1, 'hometown'=>'東京', 'major_id'=> 2 ],
            ['student_id' => 3, 'student_name' => '佐藤', 'grade'=> 1, 'hometown'=>'東京', 'major_id'=> 3 ],
            ['student_id' => 4, 'student_name' => '鈴木', 'grade'=> 2, 'hometown'=>'鹿児島', 'major_id'=> 1 ],
            ['student_id' => 5, 'student_name' => '高橋', 'grade'=> 2, 'hometown'=>'北海道', 'major_id'=> 2 ],
            ['student_id' => 6, 'student_name' => '吉田', 'grade'=> 2, 'hometown'=>'東京', 'major_id'=> 1 ],
            ['student_id' => 7, 'student_name' => '伊藤', 'grade'=> 3, 'hometown'=>'北海道', 'major_id'=> 2 ],
            ['student_id' => 8, 'student_name' => '山本', 'grade'=> 3, 'hometown'=>'神奈川', 'major_id'=> 3 ],
            ['student_id' => 9, 'student_name' => '森本', 'grade'=> 4, 'hometown'=>'沖縄', 'major_id'=> 4 ],
            ['student_id' => 10, 'student_name' => '吉岡', 'grade'=> 4, 'hometown'=>'神奈川', 'major_id'=> 5 ]
        ]);
    }
}
