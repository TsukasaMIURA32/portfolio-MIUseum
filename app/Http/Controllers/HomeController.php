<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tag;


class HomeController extends Controller
{
    public function index()
    {
        // ランダムに記事を取得（例えば 20 件）
        $projects = Project::with('tags')->get();
        $tags = \App\Models\Tag::all();
        return view('home', compact('projects', 'tags'));

    }
}
