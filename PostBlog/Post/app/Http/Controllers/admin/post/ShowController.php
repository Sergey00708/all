<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(post $post)
    {
        $posts = post::paginate();
        return view('admin.post.show', compact('post', 'posts'));
    }
}
