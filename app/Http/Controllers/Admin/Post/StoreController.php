<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
   public function __invoke(Store $request){


$data = $request->validated();



$data['preview_image'] = Storage::put('/image', $data['preview_image']);
$data['main_image'] = Storage::put('/image', $data['main_image']);


$tags = $data['tags_ids'];
unset($data['tags_ids']);


$post = Post::firstOrCreate($data);
$post->tags()->attach($tags);

return redirect()->route('admin.post.index');

   }
}
