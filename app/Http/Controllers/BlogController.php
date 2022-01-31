<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function createBlog(Request $request)
    {
       dd($request->summernote);
      $data = request()->validate([
        'user_name' => ['required', 'string'],
        'user_id' => ['required', 'string'],
        'avatar' => ['required'],
        'summernote' => ['required'],
      ]);

      if (isset($data)) {
      // dd($request->summernote);

      }
    }
}
