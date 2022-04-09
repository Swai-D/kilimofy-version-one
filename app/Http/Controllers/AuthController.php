<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

use App\Models\User;
use App\Models\Item;

use Session;
use Auth;



class AuthController extends Controller
{
  /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $data = $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'username' => ['required', 'string', 'max:255'],
          'user_phone_number' => ['required', 'string', 'max:13','unique:users'],
          'user_ocupation' => ['required'],
          'user_location' => ['required'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (isset($data)) {
          //change user phone number to STD formart for msg verifications
          $user_phone_number = substr($request->user_phone_number, 1);
          $std_user_phone_number = '+255'.$user_phone_number;
          $message = mt_rand(100000,999999);
          $phone = $std_user_phone_number;
          $sender = 'Kilimofy';
          $key = 'RGF2aWQgU3dhaTpkYXZ5c3dhaTE5OTU=';

          //Send sms
          // $curl = curl_init();
          //
          //   curl_setopt_array($curl, array(
          //       CURLOPT_URL => "https://messaging-service.co.tz/api/sms/v1/text/single",
          //       CURLOPT_RETURNTRANSFER => true,
          //       CURLOPT_ENCODING => "",
          //       CURLOPT_MAXREDIRS => 10,
          //       CURLOPT_TIMEOUT => 30,
          //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          //       CURLOPT_CUSTOMREQUEST => "POST",
          //       CURLOPT_POSTFIELDS => "{ \"from\":\"{$sender}\", \"to\":\"{$phone}\", \"text\":\"{$message}\" }",
          //       CURLOPT_HTTPHEADER => array(
          //           "accept: application/json",
          //           "authorization: Basic $key",
          //           "content-type: application/json"
          //       ),
          //   ));
          //
          //   $response = curl_exec($curl);
          //   $err = curl_error($curl);
          //
          //   curl_close($curl);
          //
          //   if ($err) {
          //
          //       $return = "cURL Error #:" . $err;
          //
          //   } else {
          //       $return = $response;
          //   }
          //
          //   return $return;
          //


          User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'user_ocupation' => $data['user_ocupation'],
            'user_location' => $data['user_location'],
            'password' => Hash::make($data['password']),
            'user_phone_number' => $std_user_phone_number,

          ]);

          $error = 0;

          //Sending data to another controler via session
          Session::put('std_user_phone_number', $std_user_phone_number);
          Session::put('message', $message);
          Session::put('error', $error);
          return redirect('/kilimofy/home/verify');
        }

        return redirect()->back();
    }




    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'user_phone_number' => ['required', 'string'],
        ]);

      if (isset($data)) {
        /* Get credentials from .env */
        $token = Session::get('message');
        $verification_code   = $request->verification_code;
        if ($verification_code == $token) {
            $user = tap(User::where('user_phone_number', $data['user_phone_number']))->update(['isVerified' => true]);
            /* Authenticate user */
            // Auth::login($user->first());
            return redirect()->route('home');
        }

      }

        $std_user_phone_number = $request->user_phone_number;
        $error = 1;
        //Sending data to another controler via session
        Session::put('std_user_phone_number', $std_user_phone_number);
        Session::put('error', $error);
        return redirect('/kilimofy/home/verify');
    }


    public function login(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required',
            ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'isVerified'=> true,
          ])
        )



        {
            //Globle user Id Variable
            $user_id = $request->user()->id;

            if (Auth::user()->user_ocupation == 'Mkulima') {
              return redirect('/kilimofy/Mkulima/home-page');
            }

            elseif (Auth::user()->user_ocupation == 'Muuza_Pembejeo')
            {
              Session::put('user_id',$user_id);
              return redirect('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page');
            }


            elseif (Auth::user()->user_ocupation == 'Bwana_Shamba') {
              Session::put('user_id',$user_id);
              return redirect('/kilimofy/Afisa-Ugavi/home-page');
            }


            elseif (Auth::user()->user_ocupation == 'Dereva') {
              return redirect('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page');
            }

            elseif (Auth::user()->user_ocupation == 'Mashine_Za_Kilimo') {
              return redirect('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page');
            }

            elseif (Auth::user()->user_ocupation == 'Fundi') {
              return redirect('/kilimofy/Fundi-Wa-Mashine-Za-Kilimo/home-page');
            }

            elseif (Auth::user()->user_ocupation == 'Mtaalam') {
              return redirect('/kilimofy/Mtaalam-Wa-Kilimo/home-page');
            }

            dd('No where to go');

        }

       return redirect()->back()->withErrors('Taarifa ulizoingiza sio sahihi, Jaribu Tena !');
    }


    public function logout(Request $request)
    {
        if(\Auth::check())
        {
            \Auth::logout();
            $request->session()->invalidate();
        }

        return  redirect('/');
    }


}
