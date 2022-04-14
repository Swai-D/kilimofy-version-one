<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Discussion;
use App\Models\Paticipant;
use App\Models\Forum;
use App\Models\User;

use Image;
use Session;

class ForumController extends Controller
{
    public function forum_categories_page()
    {
      $forum_category = Forum::all();
      $users = User::all();
      $forum_category_last_created = Forum::orderBy('created_at', 'desc')->limit(1)->get();
      // dd($forum_category_last_created);
      return view('ForumBladeFiles.forum-categories', compact('forum_category', 'forum_category_last_created', 'users'));
    }


    public function forum_category_topics_page(Forum $forum_id)
    {
      $users = User::all();
      $forum_selected = Forum::where('id', '=', $forum_id->id)->get();
      $discussions = Discussion::where('forum_id', '=', $forum_id->id)->get();
      $last_discussions_created_at = Discussion::where('forum_id', '=', $forum_id->id)->orderBy('created_at', 'desc')->limit(1)->get();
      return view('ForumBladeFiles.forum-category-topics', compact('forum_selected', 'discussions', 'last_discussions_created_at', 'users'));
    }

    public function create_discussion(Request $request)
    {
       // dd($request->Topic);

      $data = $request->validate([
        'Forum_Category_Name' => ['required', 'string'],
        'Author_Name' => ['required', 'string'],
        'Author_Username' => ['required', 'string'],
        'Author_ID' => ['required', 'string'],
        'Author_Image_Name' => ['required', 'string'],
        'Topic' => ['required', 'string'],
        ]);

     // dd("Hellow");

      if (isset($data)) {
        $new_discussion = new Discussion();
        $new_discussion->Forum_Category_Name = $request->Forum_Category_Name;
        $new_discussion->forum_id = $request->forum_id;
        $new_discussion->Author_Name = $request->Author_Name;
        $new_discussion->Author_Username = $request->Author_Username;
        $new_discussion->Author_ID = $request->Author_ID;
        $new_discussion->Author_Image_Name = $request->Author_Image_Name;
        $new_discussion->Topic = $request->Topic;

          if ($request->file('Discussion_File')) {
            //save discussion image
            $mime = $request->file('Discussion_File')->getMimeType();
            
            if(strstr($mime, "image/")){

              $discussions_image = $request->file('Discussion_File');
              $filename = time().'.'.$discussions_image->getClientOriginalExtension();
              Image::make($discussions_image)->resize(528, 280);
              $filePath = 'Uploads/ForumDiscussionImages/'.$filename;
              Storage::disk('s3')->put($filePath, file_get_contents($discussions_image));
              $filePath = Storage::disk('s3')->url($filePath);
              $new_discussion->Discussion_Image = $filePath;
            }

            else if(strstr($mime,  "video/")){

              $discussions_video = $request->file('Discussion_File');
              $discussions_video_name = time().'.'.$discussions_video->getClientOriginalExtension();
              $path = 'Uploads/ForumDiscussionVideos/'.$discussions_video_name;
              Storage::disk('s3')->put($path, file_get_contents($discussions_video));
              $filePath = Storage::disk('s3')->url($path);
              $new_discussion->Discussion_Video = $filePath;

            }
          }

        }

      $new_discussion->save();
      // dd($request->Forum_Category_Name);

      // $topic_count = Forum::where('Category', '=', $request->Forum_Category_Name)->fun(){
      //                Discussion::where('Forum_Category_Name', '=', $request->Forum_Category_Name)
      // };
      // dd($topic_count);

      // //Get topic count out of an array
      // foreach ($topic_count as $topic_count) {
      //   $topic_count = $topic_count['Topics'];
      // }

      $topic_count = 0;

      //Update Topic count from the table
      $topic_count = $topic_count + 1;
      $post_count = $topic_count + 1;

      Forum::where('id', '=', $request->forum_id)->update([
        'Topics' => $topic_count,
        'Posts' => $topic_count,
      ]);



      return redirect()->back();
    }



    public function forum_topics_discussion(Discussion $discussion_id)
    {
      // dd($discussion_id);
      // $discussion_id = Session::get('discussion_id');
      $users = User::all();
      $last_participant_created_at = Paticipant::where('discussion_id', '=', $discussion_id->id)->orderBy('created_at', 'desc')->limit(1)->get();
      $reply_count = Paticipant::where('discussion_id', '=', $discussion_id->id)->count();
      $voices_count = Paticipant::where('discussion_id', '=', $discussion_id->id)->distinct('Author_ID')->get();
      // dd($voices_count);

      $discussions_topic_page = Discussion::where('id', '=', $discussion_id->id)->get();
      $paticipant_comments = Paticipant::where('discussion_id', '=', $discussion_id->id)->get();
      // dd($last_discussions_created_at);

      // dd($discussions_topic_page);
      return view('ForumBladeFiles.forum-topic-discussion', compact('discussions_topic_page', 'paticipant_comments', 'last_participant_created_at', 'reply_count', 'users'));
    }


    public function join_discussion(Request $request)
    {

      $data = $request->validate([
        'discussion_id' => ['required'],
        'Post_Content' => ['required'],
      ]);




      if (isset($data)) {
        $paticipant_reply = new Paticipant();
        $paticipant_reply->discussion_id = $request->discussion_id;
        $paticipant_reply->Post_Content = $request->Post_Content;
        $paticipant_reply->Author_Name = $request->Author_Name;
        $paticipant_reply->Author_ID = $request->Author_ID;
        $paticipant_reply->Author_Image_Name = $request->Author_Image_Name;

        if ($request->file('File')) {
          $mime = $request->file('File')->getMimeType();

            //save discussion image
            if(strstr($mime, "image/")){

              $post_image = $request->file('File');
              $filename = time().'.'.$post_image->getClientOriginalExtension();
              Image::make($post_image)->resize(528, 280);
              $filePath = 'Uploads/ForumDiscussionImages/'.$filename;
              Storage::disk('s3')->put($filePath, file_get_contents($post_image));
              $filePath = Storage::disk('s3')->url($filePath);
              $paticipant_reply->Post_Image = $filePath;
            }

            else if(strstr($mime,  "video/")){
              $post_video = $request->file('File');
              $post_video_name = time().'.'.$post_video->getClientOriginalExtension();
              $path = 'Uploads/ForumDiscussionVideos/'.$post_video_name;
              Storage::disk('s3')->put($path, file_get_contents($post_video));
              $filePath = Storage::disk('s3')->url($path);
              $paticipant_reply->Post_Video = $filePath;
            }
        }


      }


      $paticipant_reply->save();



      return redirect()->back();
    }
}
