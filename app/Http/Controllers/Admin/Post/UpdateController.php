<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\Update;
use App\Http\Controllers\Admin\Post\BaseController;


class UpdateController extends Controller
{
   public function __invoke(Update $request, Post $post, PostService $service){




    $data = $request->validated();

    $post = $service->update($data, $post);

return view('admin.posts.show', compact('post'));

   }
}
