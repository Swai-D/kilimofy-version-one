<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Models\Paticipant;
use App\Models\Discussion;
use App\Models\Driver;
use App\Models\Comment;
use App\Models\Mashine;
use App\Models\Headline;
use App\Models\Forum;
use App\Models\Reply;
use App\Models\Item;
use App\Models\Blog;
use App\Models\User;
use App\Models\Post;
use App\Models\Place;
use App\Models\Group;

use OpenWeather;
use Session;
use Auth;
use Image;
use File;

class HomeBladeController extends Controller
{
    public function guestRoute()
    {


       $user_region = "Arusha";
       $user_district = "Arusha Mjini";
       $user_location = "Arusha, Arusha Mjini";

      //Weather API call for current forecast
      $weather = new OpenWeather();
      $current = $weather->getCurrentWeatherByCityName($user_region);
       // dd($current);

      //Temp in Celsus
      $fahrenheit = $current['forecast']['temp'] ?? 84;
      $fahrenheit_min = $current['forecast']['temp_min']?? 79;
      $fahrenheit_max = $current['forecast']['temp_max']?? 84;

      //Converting
      $celsius=round(((5/9)*($fahrenheit-32)),0);
      $celsius_min=round(((5/9)*($fahrenheit_min-32)),0);
      $celsius_max=round(((5/9)*($fahrenheit_max-32)),0);
      // dd($celsius);

      //Get icon pathinfo
      $icon_path = $current['condition']['icon'] ?? 'default.jpg';
      //dd($icon_path);


      //Weather API call for tomorrow
      $future_weather_forecast = $weather->getForecastWeatherByCityName($user_region);
      // dd($future_weather_forecast['forecast'][4]);

      //Temp in Celsus
      $tomorrow_fahrenheit = $future_weather_forecast['forecast'][4]['forecast']['temp'] ?? 83;
      $tomorrow_fahrenheit_min = $future_weather_forecast['forecast'][4]['forecast']['temp_min'] ?? 76;
      $tomorrow_fahrenheit_max = $future_weather_forecast['forecast'][4]['forecast']['temp_max'] ?? 83;

      //Get icon pathinfo for tomorrow
      $tomorrow_icon_path = $future_weather_forecast['forecast'][4]['condition']['icon'] ?? "default.jpg";
      //dd($icon_path);

      //Converting
      $tomorrow_celsius=round(((5/9)*($tomorrow_fahrenheit-32)),0);
      $tomorrow_celsius_min=round(((5/9)*($tomorrow_fahrenheit_min-32)),0);
      $tomorrow_celsius_max=round(((5/9)*($tomorrow_fahrenheit_max-32)),0);
      // dd($celsius);


      //Groups LIST
      $group_lists = Group::all();
      $posts = Post::orderBy('created_at', 'desc')->get();

      // dd($posts);
      //places
      $user_location_details = Place::where([['Region', '=', $user_region], ['District', '=', $user_district]] )->get();
       // dd($user_location_details);

      //Get Topics
      $kilimo_topics_count_collection = Forum::where('Category', 'Kilimo')->count();
       // dd($kilimo_topics_count_collection);

      //Get Topics
      $ufugaji_topics_count_collection = Forum::where('Category', 'Ufugaji')->count();
      // dd($kilimo_topics_count_collection);

      //Get Topics
      $usafirishaji_topics_count_collection = Forum::where('Category', 'Usafirisaji')->count();
      // dd($kilimo_topics_count_collection);


      $users = User::where('username', '!=', 'kilimofy_supper_admin')->get();
      $users_count = User::count();
      $headlines = Headline::all();
      $headlines_count = Headline::count();
      // dd(Auth::user()->avatar);

      return view('Guest.guest-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'tomorrow_celsius_min', 'tomorrow_celsius_max', 'tomorrow_celsius', 'icon_path', 'tomorrow_icon_path', 'group_lists', 'user_location_details', 'users', 'users_count', 'users', 'headlines', 'headlines_count', 'kilimo_topics_count_collection', 'ufugaji_topics_count_collection', 'usafirishaji_topics_count_collection'));


    }


    public function loginForm()
    {
      $places =  Place::select('Region','District')->get();
      return view('HomeBladeFiles.welcomePage', compact('places'));
    }

    public function index()
    {

      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('HomeBladeFiles.index', compact('posts', 'user_location'));

    }

    public function verify()
    {
      $std_user_phone_number = Session::get('std_user_phone_number');
      $error = Session::get('error');
      return view('HomeBladeFiles.verify', compact('std_user_phone_number', 'error'));
    }

    public function switch_account(User $user_id)
    {

        if (isset(request()->user_ocupation)) {

           User::where('id', '=', $user_id->id)->update([
           'user_ocupation' => request()->user_ocupation,

         ]);

         Auth::logout();
         return redirect('/');
        }

        else {
          return redirect()->back();
        }


    }


    public function redirect_after_verification_code()
    {
      return view('HomeBladeFiles.redirect-after-verification-code');
    }

    public function update_profile(User $user_id)
    {



          // save image
          if (request()->file('avatar')) {



          $mime = request()->file('avatar')->getMimeType();



           if(strstr($mime, "image/")){

             //Delete the Old IMAGE AVATAR from  avatar Folder (Save Space)
             $imagePath = explode('/', $user_id->avatar);
             if ($imagePath[5] != NULL) {
               $avatarName = $imagePath[5];
               Storage::disk('s3')->delete('Uploads/avatars/'.$avatarName);
             }


             //store another avatar
             $user_image = request()->file('avatar');
             $filename = time().'.'.$user_image->getClientOriginalExtension();
             Image::make($user_image)->resize(300, 300);
             $filePath = 'Uploads/avatars/'.$filename;
             Storage::disk('s3')->put($filePath, file_get_contents($user_image));
             $filePath = Storage::disk('s3')->url($filePath);
             $user = Auth::user();
             $user->avatar = $filePath;
             $user ->save();



             //update user avatar in all application conners
             Post::where('User_id', '=', $user_id->id)->update(['User_Image_Profile' => $filePath]);
             Discussion::where('Author_ID', '=', $user_id->id)->update(['Author_Image_Name' => $filePath]);
             Paticipant::where('Author_ID', '=', $user_id->id)->update(['Author_Image_Name' => $filePath]);
             Group::where('Creator_Id', '=', $user_id->id)->update(['Creator_Image_Path' => $filePath]);
             Comment::where('user_id', '=', $user_id->id)->update(['user_avatar' => $filePath]);
             Reply::where('user_id', '=', $user_id->id)->update(['user_avatar' => $filePath]);
             Item::where('seller_id', '=', $user_id->id)->update(['seller_image_location' => $filePath]);
             Driver::where('Driver_ID', '=', $user_id->id)->update(['DriverImageName' => $filePath]);
             Mashine::where('Seller_Id', '=', $user_id->id)->update(['Seller_Image_Path' => $filePath]);
             Blog::where('user_id', '=', $user_id->id)->update(['avatar' => $filePath]);

             //Delete the Old IMAGE from Public Folder (Save Space)
             // File::delete([public_path('/Uploads/avatars/'.$user_id->avatar),]);


           }

           else {
               return redirect()->back();
           }



        }



          return redirect()->back();

  }

}
