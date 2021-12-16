<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SettingsController extends Controller
{
  public function General_Settings(User $user_id)
  {
    $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();

    return view('SettingsBladeFiles.GeneralSettings', compact('users'));
  }

  public function My_Profile(User $user_id)
  {
    $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();
    return view('SettingsBladeFiles.MyProfileSettings', compact('users'));
  }

  public function Social_Account(User $user_id)
  {
    $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();
    return view('SettingsBladeFiles.SocialAccount', compact('users'));
  }
}
