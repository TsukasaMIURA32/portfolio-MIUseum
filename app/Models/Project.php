<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_image',
        'sub_title',
        'introduction',
        'url',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tag', 'project_id', 'tag_id');
    }

    // app/Models/Project.php
    public function details()
    {
        return $this->hasMany(ProjectDetail::class);
    }


}
