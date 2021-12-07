<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Group;

use Image;

class GroupController extends Controller
{
    public function group_list_page()
    {
      $group_lists = Group::all();
      $users = User::all();
      return view('GroupBladeFiles.group-list', compact('group_lists', 'users'));
    }

    public function create_group(Request $request)
    {
      // dd($request->Group_Name);
      $data = request()->validate([
        'Group_Name' => ['required', 'string'],
        'Description' => ['required', 'string'],
        'Creator_Name' => ['required', 'string'],
        'Creator_Id' => ['required', 'string'],
        'Creator_Image_Path' => ['required', 'string'],
      ]);

      if (isset($data)) {

        $new_group = new Group();
        $new_group->Group_Name = $request->Group_Name;
        $new_group->Tagline = $request->Tagline;
        $new_group->Description = $request->Description;
        $new_group->Status = $request->Status;
        $new_group->Creator_Name = $request->Creator_Name;
        $new_group->Creator_Id = $request->Creator_Id;
        $new_group->Creator_Image_Path = $request->Creator_Image_Path;

          if (request()->hasFile('Group_Image')) {

            //Check File Extension
            $mime = request()->file('Group_Image')->getMimeType();

            if (strstr($mime, "image/")) {

              $group_profile = request()->file('Group_Image');
              $filename = time().'.'.$group_profile->getClientOriginalExtension();
              Image::make($group_profile)->resize(300, 300)->save(public_path('/Uploads/GroupProfile/'.$filename));
              $new_group->Group_Image = $filename;

            }

            else {
              return redirect()->back()->with('Message', 'File Format Not Supported');
            }
          }

        $new_group->save();
      }
      return redirect()->back();

    }

    public function group_timeline()
    {
      $users = User::all();
      
      return view('GroupBladeFiles.group-timeline', compact('users'));
    }
}
