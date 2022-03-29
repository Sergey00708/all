<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = post::paginate(20);

        return view('post.index', compact('posts'));
    }
}
