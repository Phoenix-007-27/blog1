<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use App\Models\Category;
use App\Models\Tag;


class EditController extends Controller
{
   public function __invoke(Post $post){

      $categories = Category::all();
      $tags = Tag::all();
      
return view('admin.posts.edit', compact('post', 'categories', 'tags'));

   }
}
