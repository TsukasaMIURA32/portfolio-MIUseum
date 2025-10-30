<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tags = [
            ['name' => 'HTML', 'category_id' => 1],
            ['name' => 'CSS', 'category_id' => 1],
            ['name' => 'JavaScript', 'category_id' => 1],
            ['name' => 'Java', 'category_id' => 2],
            ['name' => 'PHP', 'category_id' => 2],
            ['name' => 'Laravel', 'category_id' => 2],
            ['name' => 'MySQL', 'category_id' => 3],
            ['name' => 'Figma', 'category_id' => 4],
            ['name' => 'GitHub', 'category_id' => 5],
        ];

        DB::table('tags')->insert($tags);
    }
}
