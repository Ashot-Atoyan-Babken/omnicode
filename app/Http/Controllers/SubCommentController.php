<?php

namespace App\Http\Controllers;

class SubCommentController extends Controller
{
    public function __invoke($id)
    {
        return view('subcomment', compact('id'));
    }
}
