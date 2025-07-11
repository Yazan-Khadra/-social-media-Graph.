<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'files',
        'description',
        'project_id',
        'title',
        'privacy'
    ];
    protected $casts = [
        'files' => 'array'
    ];
    // user of posts
    public function Users() {
        return $this->belongsToMany(User::class,"_posts__users__pivot",'post_id','user_id');
    }
    //the post project
    public function Project() {
        return $this->belongsTo(Project::class,'project_id');
    }
}
