<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\SubComment;

class MainController extends Controller
{
    public function __invoke()
    {
        $comments = Comments::all();

        foreach ($comments as $comment){
            $count = SubComment::where('comment_id', $comment->id)->count();
            $subcomments = SubComment::where('comment_id', $comment->id)->get();
            $comment->subcomment_count = $count;
            $comment->subcomments = $subcomments;
        }

        return view('main', compact('comments'));
    }
}
