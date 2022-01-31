<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Discussion;
use App\Models\Place;
use App\Models\Group;
use App\Models\Post;
use App\Models\User;

use Auth;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_user_page(User $user_id)
    {

        $user = User::where('id', '=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        $users = User::all();

        return view('UserBladeFiles.about-user', compact('user', 'users', 'user_posts'));
    }



    public function user_timeline_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();
        $posts = Post::where('User_id', '=', $user_id->id)->orderBy('created_at', 'desc')->get();
        $users = User::where('id', '!=', $user_id->id)->get();
        $group_lists = Group::all();
        $group_lists_count = Group::count();
        $users_count = User::where('id', '!=', $user_id->id)->count();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();

        foreach ($user as $user_details) {
          $user_id = $user_details['id'];
        }

        if (isset($user_id)) {
          $user_photo_gallery = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->limit(11)->get();
          // dd($user_photo_gallery);
          $user_photo_gallery_count = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->count();
          $user_latest_video = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->orderBy('created_at', 'desc')->get();
          $user_latest_video_count = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->count();


        }

        return view('UserBladeFiles.user-timeline', compact('user', 'users', 'posts', 'users_count', 'user_latest_video', 'user_latest_video_count', 'user_photo_gallery', 'user_photo_gallery_count', 'group_lists', 'group_lists_count', 'user_posts'));

    }



    public function user_friends_page(User $user_id)
    {
      $user = User::where('id', '=', $user_id->id)->get();
      $users = User::where('id', '!=', $user_id->id)->get();
      $users_count = User::where('id', '!=', $user_id->id)->count();
      $user_posts = Post::where('User_id', '=', $user_id->id)->count();

        return view('UserBladeFiles.user-friends', compact('users', 'users_count', 'user', 'user_posts'));
    }



    public function user_groups_page(User $user_id)
    {
        $users = User::where('id', '!=', $user_id->id)->get();
        $users_count = User::where('id', '!=', $user_id->id)->count();
        $group_lists = Group::all();
        $group_lists_count = Group::count();
        $user = User::where('id', '=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        return view('UserBladeFiles.user-groups', compact('group_lists', 'group_lists_count', 'user', 'users', 'users_count', 'user_posts'));
    }

    public function user_photos_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();
        $users = User::where('id', '!=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();

        foreach ($user as $user_details) {
          $user_id = $user_details['id'];
        }


        if (isset($user_id)) {
          $user_photo_gallery = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->inRandomOrder()->get();
          // dd($user_photo_gallery);
          $user_latest_photo = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->inRandomOrder()->limit(10)->get();
          $user_latest_photo_count = Post::where([['User_id', '=', $user_id], ['Photo','!=', NULL]])->count();
          return view('UserBladeFiles.user-photos', compact('user_photo_gallery','user', 'user_latest_photo', 'user_latest_photo_count', 'users', 'user_posts'));

        }
    }


    public function user_videos_page(User $user_id)
    {
      $user = User::where('id', '=', $user_id->id)->get();
      $users = User::where('id', '!=', $user_id->id)->get();
      $user_posts = Post::where('User_id', '=', $user_id->id)->count();

      foreach ($user as $user_details) {
        $user_id = $user_details['id'];
      }

      if (isset($user_id)) {
        $user_latest_video = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->inRandomOrder()->get();
        $user_latest_video_count = Post::where([['User_id', '=', $user_id], ['Video','!=', NULL]])->count();

        return view('UserBladeFiles.user-videos', compact('user_latest_video', 'user_latest_video_count', 'user', 'users', 'user_posts'));
      }
    }

    public function user_blog_page(User $user_id)
    {   $user = User::where('id', '=', $user_id->id)->get();
        $users = User::where('id', '!=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        return view('UserBladeFiles.user-blog', compact('user', 'users', 'user_posts'));
    }

    public function user_blog_post_page(User $user_id)

    {    $user = User::where('id', '=', $user_id->id)->get();
         $users = User::where('id', '!=', $user_id->id)->get();
         $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        return view('UserBladeFiles.user-blog-post', compact('user', 'users', 'user_posts'));
    }

    public function user_forum_page(User $user_id)
    {   $user = User::where('id', '=', $user_id->id)->get();
        $users = User::where('id', '!=', $user_id->id)->get();
        $user_discussions = Discussion::where('Author_ID', '=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        // dd($user_discussions);
        return view('UserBladeFiles.user-forum', compact('user', 'user_discussions', 'users', 'user_posts'));
    }

    public function user_store_page(User $user_id)
    {
        $user = User::where('id', '=', $user_id->id)->get();
        $users = User::where('id', '!=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        return view('UserBladeFiles.user-store', compact('user', 'users', 'user_posts'));
    }

    public function user_setting_page(User $user_id)
    {
        // dd($user_id);
        $user = User::where('id', '=', $user_id->id)->get();
        $user_posts = Post::where('User_id', '=', $user_id->id)->count();
        $places = Place::all();
        $users = User::all();
        return view('UserBladeFiles.user-settings', compact('user', 'users', 'places', 'user_posts'));
    }


}
