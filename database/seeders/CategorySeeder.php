<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'フロントエンド'],
            ['name' => 'バックエンド'],
            ['name' => 'データベース'],
            ['name' => 'デザインツール'],
            ['name' => 'その他'],
        ];

        DB::table('categories')->insert($categories);
    }
}
