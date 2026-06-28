<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * プロジェクトの詳細ページを表示
     */
    public function show($id)
    {
        $project = Project::with(['tags', 'details' => function ($query) {
                $query->orderBy('order');
            }])
            ->findOrFail($id);

        return view('projects.show', compact('project'));
    }

    /**
     * 疑似いいね機能（必要になったらDB更新式に変更）
     */
    public function like($id)
    {
        $project = Project::findOrFail($id);

        return response()->json([
            'like_count' => $project->like_count,
        ]);
    }

    /**
     * 詳細データAPI（JS用）
     */
    public function details($id)
    {
        $project = Project::with(['details' => function ($query) {
                $query->orderBy('order');
            }])
            ->findOrFail($id);

        return response()->json($project);
    }
}
