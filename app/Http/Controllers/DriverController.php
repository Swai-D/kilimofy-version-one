<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Driver;
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
    $user_account_trip_details = Driver::where('Driver_ID', '=', $user_id)->get();
      return view('UserAccountBladeFiles.Driver.driver-trip-page', compact('user_location','user_account_details', 'user_account_trip_details', 'users', 'places'));
    }

    public function MakeTrip(Request $request)
    {
      // dd($request);
      $data = request()->validate([
        'From' => ['required', 'string'],
        'To' => ['required', 'string'],
        'Date' => ['required'],
        'Time' => ['required'],
        'CarType' => ['required', 'string'],
        'CarAdress' => ['required', 'string'],
        'DriverPhoneNumber' => ['required', 'string', 'max:13'],
        'DriverImageName' => ['required'],
        'DriverName' => ['required'],
        'Driver_ID' => ['required'],
        'TripType' => ['required', 'string'],
      ]);

      if (isset($data)) {
        Driver::create($data);
        return redirect()->back()->with('Message', 'Safari imeandaliwa ! Asante,');
      }
    }

    public function EditTrip(Driver $trip_id)
    {
      $trip_to_edit = Driver::where('id', '=', $trip_id->id)->get();
      $places = Place::all();
      return view('UserAccountBladeFiles.Driver.edit-driver-trip-page', compact('trip_to_edit', 'places'));
    }

    public function DeleteTrip(Driver $trip_id)
    {
      Driver::where('id', '=', $trip_id->id)->delete();

      return redirect()->back()->with('Message', 'Safari imefanikiwa Kufutika, Asante!');
    }


    public function UpdateTrip(Request $request, Driver $trip_id)
    {
      // dd($request);
      // $data = request()->validate([
      //   'From' => ['required', 'string'],
      //   'To' => ['required', 'string'],
      //   'Date' => ['required'],
      //   'Time' => ['required'],
      //   'CarType' => ['required', 'string'],
      //   'CarAdress' => ['required', 'string'],
      //   'DriverPhoneNumber' => ['required', 'string', 'max:13'],
      //   'DriverImageName' => ['required'],
      //   'DriverName' => ['required'],
      //   'Driver_ID' => ['required'],
      //   'TripType' => ['required', 'string'],
      // ]);
      //
      //Update Individual
      if (isset($request->From)) {
          Driver::where('id', '=', $trip_id->id)->update(['From' => $request->From]);
      }

      if (isset($request->To)) {
          Driver::where('id', '=', $trip_id->id)->update(['To' => $request->To]);
      }

      if (isset($request->Date)) {
          Driver::where('id', '=', $trip_id->id)->update(['Date' => $request->Date]);
      }


      if (isset($request->Time)) {
          Driver::where('id', '=', $trip_id->id)->update(['Time' => $request->Time]);
      }

      if (isset($request->CarType)) {
          Driver::where('id', '=', $trip_id->id)->update(['CarType' => $request->CarType]);
      }

      if (isset($request->CarAdress)) {
          Driver::where('id', '=', $trip_id->id)->update(['CarAdress' => $request->CarAdress]);
      }


      if (isset($request->DriverPhoneNumber)) {
          Driver::where('id', '=', $trip_id->id)->update(['DriverPhoneNumber' => $request->DriverPhoneNumber]);
      }


      if (isset($request->TripType)) {
          Driver::where('id', '=', $trip_id->id)->update(['TripType' => $request->TripType]);
      }


      return redirect('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page')->with('Message', 'Mabadiliko ya Safari Yamepokelewa, Asante!');
    }
}
