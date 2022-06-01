<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class majorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            ['major_id' => 1, 'major_name' => '英文学'  ],
            ['major_id' => 2, 'major_name' => '応用科学'] ,
            ['major_id' => 3, 'major_name' => '情報工学'],
            ['major_id' => 4, 'major_name' => '経済学'  ] ,
            ['major_id' => 5, 'major_name' => '国際文化'] 
        ]);
    }
}
