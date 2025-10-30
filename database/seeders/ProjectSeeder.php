<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', // public/storage に配置する想定
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ポートフォリオサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => '自分のスキルをまとめたポートフォリオサイトを制作しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ブログサイト制作',
                'main_image' => 'HopQuest.png', 
                'introduction' => 'Laravelでブログサイトを構築しました。',
                'date' => now()->toDateString(),
                'url' => 'https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
