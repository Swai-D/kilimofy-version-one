<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


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
          $imgNameCode = time().$item.'.png';
          $path = public_path() . $image_name;
          file_put_contents($path, $imgeData);

          // It Took me weeks to figureout hoew to implement this function Praise the Lord
          // return $image;
          $filePath = "Uploads/BlogPostImages/" .$imgNameCode;
          Storage::disk('s3')->put($filePath, File::get(public_path('/Uploads/BlogPostImages/'.$imgNameCode)));
          $filePath = Storage::disk('s3')->url($filePath);

          $image->removeAttribute('src');
          $image->setAttribute('src', $filePath);
          //Delete Image From  Public Folder
          File::delete([public_path('/Uploads/BlogPostImages/'.$imgNameCode),]);



       }

       $content = $dom->saveHTML();
               //Save in Databse
       $blog = Blog::create([
         'title' => $request->title,
         'user_name' => $request->user_name,
         'user_id' => $request->user_id,
         'avatar' => $request->avatar,
         'cover_image' => $filePath,
         'body' => $content

    ]);


      // dd($blog);
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
