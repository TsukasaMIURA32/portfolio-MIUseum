<?php

// app/Models/ProjectDetail.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    protected $fillable = ['order', 'project_id', 'sub_title', 'content', 'image'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}

