<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

class DriverController extends Controller
{
  public function Driver_Index_Page(Request $request)
  {

    $user_id = Auth::user()->id;
    $user_location = Auth::user()->user_location;
    $users = User::all();
    //Get User account
    $user_account_details = User::where('id', '=', $user_id)->get();
      return view('UserAccountBladeFiles.Driver.driver-home-page', compact('user_location','user_account_details', 'users'));
    }
}
