<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['seeder1.jpg', 'seeder2.jpg'];

        for ($projectId = 1; $projectId <= 5; $projectId++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('project_details')->insert([
                    'order'      => $i,
                    'project_id' => $projectId,
                    'sub_title'  => "Detail {$i} for Project {$projectId}",
                    'content'    => "This is the content for detail {$i} of project {$projectId}.",
                    'image'      => $images[array_rand($images)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
