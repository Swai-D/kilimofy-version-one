<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place;
use App\Models\User;
use Auth;

class DriverController extends Controller
{
  public function Driver_Index_Page(Request $request)
  {

    $user_id = Auth::user()->id;
    $user_location = Auth::user()->user_location;
    $users = User::all();
    $places = Place::all();
    $user_account_details = User::where('id', '=', $user_id)->get();
      return view('UserAccountBladeFiles.Driver.driver-trip-page', compact('user_location','user_account_details', 'users', 'places'));
    }

    public function MakeTrip(Request $request)
    {
      dd($request);
      $data = $request->validate([
        'From' => ['require', 'string'],
        'To' => ['require', 'string'],
        'Date' => ['require'],
        'Time' => ['require'],
        'CarType' => ['require', 'string'],
        'CarAdress' => ['require', 'string'],
        'DriverPhoneNumber' => ['require', 'string'],
        'TripType' => ['require', 'string'],
      ]);

      if (isset($data)) {
        dd('Hellow Davyswai');
      }
    }
}
