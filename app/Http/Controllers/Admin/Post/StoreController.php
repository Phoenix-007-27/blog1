<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Post\BaseController;

class StoreController extends BaseController
{
   public function __invoke(Store $request){
      
      $data = $request->validated();
      $this->service->store($data);
      
return redirect()->route('admin.post.index');

   }
}
