<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place;
use App\Models\Blog;
use App\Models\User;
use Auth;

class MtaalamController extends Controller
{
  public function Mtaalam_Index_Page(Request $request)
  {

    $user_id = Auth::user()->id;
    $user_location = Auth::user()->user_location;
    $users = User::all();
    $places = Place::all();
    $user_account_details = User::where('id', '=', $user_id)->get();
    $blog = Blog::where('user_id', '=', $user_id)->get();

    // dd($blog);
      return view('UserAccountBladeFiles.MtaalamWaKilimo.mtaalam-wa-kilimo-index-page', compact('user_location','user_account_details', 'users', 'places', 'blog'));
    }

}
