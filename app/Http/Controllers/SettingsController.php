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

  public function Social_Account_Update(Request $request, User $user_id)
  {
      if (isset($request->facebook)) {
        User::where('id', '=', $user_id->id)->update([
          'facebook' => $request->facebook,
        ]);
      }

      if (isset($request->twitter)) {
        User::where('id', '=', $user_id->id)->update([
          'twitter' => $request->twitter,
        ]);
      }

      if (isset($request->instagram)) {
        User::where('id', '=', $user_id->id)->update([
          'instagram' => $request->instagram,
        ]);
      }

      if (isset($request->youtube)) {
        User::where('id', '=', $user_id->id)->update([
          'youtube' => $request->youtube,
        ]);
      }

      return redirect()->back()->with('Message', 'Social Link Updated Successfully, Asante !');

  }
}
