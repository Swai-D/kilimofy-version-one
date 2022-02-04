<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use Image;
use File;
class BlogController extends Controller
{
    public function createBlog(Request $request)
    {

      $data = request()->validate([
        'user_name' => ['required', 'string'],
        'user_id' => ['required', 'string'],
        'avatar' => ['required'],
        'body' => ['required'],
      ]);

      $content = $request->body;

      $dom = new \DomDocument();
      $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      $imageFile = $dom->getElementsByTagName('img');

      foreach($imageFile as $item => $image){

          $data = $image->getAttribute('src');
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $imgeData = base64_decode($data);
          $image_name= "/Uploads/BlogPostImages/" . time().$item.'.png';
          $path = public_path() . $image_name;
          $data =  file_put_contents($path, $imgeData);
          $image->removeAttribute('src');
          $image->setAttribute('src', $image_name);


       }

       $content = $dom->saveHTML();

       $blog = Blog::create([
         'title' => $request->title,
         'user_name' => $request->user_name,
         'user_id' => $request->user_id,
         'avatar' => $request->avatar,
         'cover_image' => $image_name,
         'body' => $content

    ]);

      return redirect()->back()->with('Message', 'Makala imechapishwa, Asante!');


    }


    public function editBlog(Blog $blog)
    {
      $blog = Blog::where('id', '=', $blog->id)->get();
      return view('UserAccountBladeFiles.MtaalamWaKilimo.edit-blog-post', compact('blog'));
    }

    public function deleteBlog(Blog $blog)
    {

       Blog::where('id', '=', $blog->id)->delete();

       //Delete Blog Image From Directory
       $blogPathArray = explode('/', $blog->cover_image);
       $blogImage = $blogPathArray[3];
       File::delete([public_path('/Uploads/BlogPostImages/'.$blogImage),]);
       
      return redirect()->back()->with('Message', 'Blog Post Deleted Successfully!');
    }
}
