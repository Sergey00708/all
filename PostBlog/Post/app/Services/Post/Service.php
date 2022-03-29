<?php

namespace App\Services\Post;

use App\Models\post;

class Service
{
    public function store($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $post = post::create($data);
        $post->tags()->attach($tags);
    }

    public function update($data, $post)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
    }
}
