<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTagSeeder extends Seeder
{
    public function run(): void
    {
        $projectTags = [];

        // プロジェクト12個分
        for ($projectId = 1; $projectId <= 12; $projectId++) {
            // ランダムに 2〜4 個のタグを付ける
            $tagIds = collect(range(1, 9))->random(rand(2, 4));

            foreach ($tagIds as $tagId) {
                $projectTags[] = [
                    'project_id' => $projectId,
                    'tag_id'     => $tagId,
                ];
            }
        }

        DB::table('project_tag')->insert($projectTags);
    }
}
