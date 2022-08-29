<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function search(SearchRequest $request)
    {
        $q = $request->validated();
        $query = Comment::query();
        if (isset($q['body'])) {
            $query->where('body', 'like', "%{$q['body']}%");
        }
        $comments = $query->get()->unique('postId');        
        return view('search', compact('comments'));
    }
}
