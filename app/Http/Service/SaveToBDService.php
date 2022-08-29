<?php

namespace App\Http\Service;

use App\Models\Comment;
use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class SaveToBDService
{
    public function create_post($post)
    {
        try {
            DB::beginTransaction();
            Post::firstOrCreate($post);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            abort(500);
        }
    }

    public function create_comment($comment)
    {
        try {
            DB::beginTransaction();
            Comment::firstOrCreate($comment);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            abort(500);
        }
    }

}
