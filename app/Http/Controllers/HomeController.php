<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with(['tags', 'details' => function ($query) {
                $query->orderBy('order');
            }])
            ->orderByDesc('date')
            ->orderByDesc('id')
            ->get();

        $tags = Tag::orderBy('category_id')->orderBy('id')->get();

        return view('home', compact('projects', 'tags'));
    }
}
