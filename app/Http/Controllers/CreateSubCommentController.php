<?php

namespace App\Http\Controllers;

use App\Models\SubComment;

class CreateSubCommentController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate(
            [
                'subcomment' => 'string',
                'comment_id' => ''
            ]);
        SubComment::create($data);
        return redirect()->route('general');
    }
}
