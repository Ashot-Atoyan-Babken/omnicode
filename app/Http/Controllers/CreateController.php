<?php

namespace App\Http\Controllers;

use App\Models\Comments;

class CreateController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'comment' => 'string',
        ]);
        Comments::create($data);
        return redirect()->route('general');
    }
}
