<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index()
    // {
    //     $posts = Post::all();

    //     return view('post.index', compact('posts'));
    // }

    // public function create()
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();

    //     return view('post.create', compact('categories', 'tags'));
    // }

    // public function store()
    // {
    //     $data = request()->validate([
    //         'title' => 'required|string',
    //         'content' => 'required|string',
    //         'image' => 'required|string',
    //         'likes' => 'required|integer',
    //         'category_id' => '',
    //         'tags' => '',
    //     ]);
    //     $tags = $data['tags'];
    //     unset($data['tags']);

    //     $post = post::create($data);
    //     $post->tags()->attach($tags);

    //     return redirect()->route('post.index');
    // }

    // public function show(post $post)
    // {
    //     return view('post.show', compact('post'));
    // }

    // public function edit(post $post)
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     return view('post.edit', compact('post', 'categories', 'tags'));
    // }

    // public function delete()
    // {
    //     $post = post::find(1);
    //     $post->delete();
    // }

    // public function update(post $post)
    // {
    //     $data = request()->validate([
    //         'title' => 'string',
    //         'content' => 'string',
    //         'image' => 'string',
    //         'likes' => 'integer',
    //         'category_id' => '',
    //         'tags' => '',
    //     ]);
    //     $tags = $data['tags'];
    //     unset($data['tags']);

    //     $post->update($data);
    //     $post->tags()->sync($tags);
    //     return redirect()->route('post.show', $post->id);
    // }

    // public function destroy(post $post)
    // {
    //     $post->delete();
    //     return redirect()->route('post.index');
    // }
}
