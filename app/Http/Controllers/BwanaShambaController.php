<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use App\Models\User;

use Session;
use Auth;


class BwanaShambaController extends Controller
{
    public function Bwana_Shamba_Index_Page(Request $request)
    {
      $user_id = Auth::user()->id;
      $user_location = Auth::user()->user_location;
      $users = User::all();
      //Get User account
      $user_account_details = User::where('id', '=', $user_id)->get();
        return view('UserAccountBladeFiles.BwanaShamba.bwana-shamba-home-page', compact('user_location','user_account_details', 'users'));
      }
}
