<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\Update;


class UpdateController extends Controller
{
   public function __invoke(Update $request, Post $post){



    $data = $request->validated();

    

// $data['preview_image'] = Storage::put('/image', $data['preview_image']);
// $data['main_image'] = Storage::put('/image', $data['main_image']);


$tags = $data['tags'];
unset($data['tags']);

$post->update($data);
$post->tags()->sync($tags);


return view('admin.posts.show', compact('post'));

   }
}
