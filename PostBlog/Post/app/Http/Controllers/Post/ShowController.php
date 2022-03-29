<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\post;

class ShowController extends BaseController
{
    public function __invoke(post $post)
    {
        return view('post.show', compact('post'));
    }
}
