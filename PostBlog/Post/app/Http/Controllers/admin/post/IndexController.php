<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = post::paginate(20);
        return view('admin.post.index', compact('posts'));
    }
}
