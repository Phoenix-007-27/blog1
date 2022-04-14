<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Post\BaseController;

class StoreController extends Controller
{




      public function __invoke(Store $request, PostService $service){

   
     $service->store($request->validated());


return redirect()->route('admin.post.index');

   }
}



