<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use App\Models\BwanaShambaEvent;
use App\Models\User;
use App\Models\Group;

use Session;
use Image;
use Auth;


class BwanaShambaController extends Controller
{
    public function Bwana_Shamba_Home_Page(User $user)
    {
      $user_id = Auth::user()->id;
      $user_location = Auth::user()->user_location;
      $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();
      //Get User account
      $user_account_details = User::where('id', '=', $user_id)->get();
      $user_account_event_details = BwanaShambaEvent::where('user_id', '=', $user_id)->get();
      $user_groups = Group::where('Creator_Id', '=', $user_id)->get();
        return view('UserAccountBladeFiles.BwanaShamba.afisa-ugavi-home-page', compact('user_location','user_account_details', 'users', 'user_groups', 'user_account_event_details'));
      }


      public function Bwana_Shamba_Create_Group_Page(User $user)
      {
        $user_id = Auth::user()->id;
        $user_location = Auth::user()->user_location;
        $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();
        //Get User account
        $user_account_details = User::where('id', '=', $user_id)->get();
        $user_groups = Group::where('Creator_Id', '=', $user_id)->get();
          return view('UserAccountBladeFiles.BwanaShamba.afisa-ugavi-event-page', compact('user_location','user_account_details', 'users', 'user_groups'));
        }


        public function createEvent(Request $request)
        {
            // dd($request->event_cover_photo);
           $data = request()->validate([
             'user_id' => ['required', 'string', 'max:255'],
             'event_category' => ['required', 'string', 'max:255'],
             'event_name' => ['required', 'string', 'max:255'],
             'event_location' => ['required', 'string', 'max:255'],
             'event_date' => ['required'],
             'event_start' => ['required', 'string', 'max:255'],
             'event_start_time_annotation' => ['required', 'string', 'max:255'],
             'event_end' => ['required', 'string', 'max:255'],
             'event_end_time_annotation' => ['required', 'string', 'max:255'],
             'event_description' => ['required', 'string', 'max:255'],

           ]);

           // dd($data);
           if (isset($data)) {
             $new_event = new BwanaShambaEvent();
             $new_event->user_id = $request->user_id;
             $new_event->event_category = $request->event_category;
             $new_event->event_name = $request->event_name;
             $new_event->event_location = $request->event_location;
             $new_event->event_date = $request->event_date;
             $new_event->event_start = $request->event_start;
             $new_event->event_start_time_annotation = $request->event_start_time_annotation;
             $new_event->event_end = $request->event_end;
             $new_event->event_end_time_annotation = $request->event_end_time_annotation;
             $new_event->event_description = $request->event_description;

             if (request()->hasFile('event_cover_photo')) {

               //Check File Extension
               $mime = request()->file('event_cover_photo')->getMimeType();

               if (strstr($mime, "image/")) {

                 $event_cover_photo = request()->file('event_cover_photo');
                 $filename = time().'.'.$event_cover_photo->getClientOriginalExtension();
                 Image::make($event_cover_photo)->resize(300, 300)->save(public_path('/Uploads/BwanaShambaEventCoverPage/'.$filename));
                 $new_event->event_cover_photo = $filename;

               }

               else {
                 return redirect()->back()->with('Message', 'File Format Not Supported');
               }
             }

             $new_event->save();

           }
           return redirect()->back()->with('Message', 'Event Created Successfuly !');

        }

}
