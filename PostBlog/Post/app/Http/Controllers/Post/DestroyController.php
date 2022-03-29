<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\post;

class DestroyController extends BaseController
{
    public function __invoke(post $post)
    {

        $post->delete();
        return redirect()->route('post.index');
    }
}
