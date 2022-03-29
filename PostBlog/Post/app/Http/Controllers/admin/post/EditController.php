<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}
