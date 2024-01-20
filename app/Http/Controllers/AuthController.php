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
           'user_ocupation' => ['string', 'max:255'],
           'user_location' => ['string', 'max:255'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);

         if (isset($data)) {
           //change user phone number to STD formart for msg verifications
           $user_phone_number = substr($request->user_phone_number, 1);
           $std_user_phone_number = '+255'.$user_phone_number;

           // dd($std_user_phone_number);

           /* Get credentials from .env */
           $token = getenv("TWILIO_AUTH_TOKEN");
           $twilio_sid = getenv("TWILIO_SID");
           $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
           $twilio = new Client($twilio_sid, $token);
           $twilio->verify->v2->services($twilio_verify_sid)
               ->verifications
               ->create($std_user_phone_number, "sms");

           User::create([
             'name' => $data['name'],
             'username' => $data['username'],
             'user_phone_number' => $std_user_phone_number,
             'user_ocupation' => $data['user_ocupation'],
             'user_location' => $data['user_location'],
             'password' => Hash::make($data['password']),
           ]);

           $error = 0;
           //Sending data to another controler via session
           Session::put('std_user_phone_number', $std_user_phone_number);
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
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['user_phone_number']));
        if ($verification->valid) {
            $user = tap(User::where('user_phone_number', $data['user_phone_number']))->update(['isVerified' => true]);
            /* Authenticate user */
            Auth::login($user->first());
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



        if (\Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
            'isVerified'=> true
          ])
        )

        {
            $user = Auth::user()->user_ocupation;

            // dd($user);

            if (Auth::user()->user_ocupation == 'Mkulima') {
              return redirect('/kilimofy/Mkulima/home-page');
            }

            elseif (Auth::user()->user_ocupation == 'Muuza_Pembejeo')
            {

              return redirect('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page');
            }


            elseif (Auth::user()->user_ocupation == 'Bwana_Shamba') {

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
