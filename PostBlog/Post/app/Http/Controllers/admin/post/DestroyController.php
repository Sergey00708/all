<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
