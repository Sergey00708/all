<?php

namespace App\Http\Controllers\admin\post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\post;
use App\Models\Tag;



class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}
