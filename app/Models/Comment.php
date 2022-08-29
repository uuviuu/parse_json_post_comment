<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'comments';
    protected $guarded = false;

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'postId', 'id');
    }
}
