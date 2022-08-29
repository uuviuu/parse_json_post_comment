<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'posts';
    protected $guarded = false;

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'postId', 'id');
    }
}
