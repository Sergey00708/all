<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\post;
use App\Models\Tag;


class UpdateController extends BaseController
{
    public function __invoke(StoreRequest $request, post $post)
    {
        $data = $request->validated();

        $this->service->update($data, $post);

        return redirect()->route('admin.post.show', $post->id);
    }
}
