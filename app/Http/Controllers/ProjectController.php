<?php

// app/Http/Controllers/ProjectController.php
namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function show(Project $project)
    {
        // Project に関連する details を取得
        $project->load('details'); 

        return view('projects.show', compact('project'));
    }

    public function like($id)
        {
            $project = Project::findOrFail($id);
            $project->increment('like_count');

            return response()->json([
                'like_count' => $project->like_count
            ]);
        }
    public function details(Project $project)
    {
        $details = $project->details()->orderBy('order')->get(); // project_details relation
        return response()->json([
            'title' => $project->title,
            'details' => $details
        ]);
    }

}

