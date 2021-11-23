<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Hashids\Hashids;

use App\Models\Group;
use App\Models\Place;
use App\Models\Forum;
use App\Models\Post;
use App\Models\Item;
use App\Models\User;

use OpenWeather;
use Session;
use Image;
use Auth;



class PembejeoNaViwatilifuController extends Controller
{


    public function muuzaji_Wa_pembejeo_na_viwatilifu_index_page(Request $request)
    {
      return $this-> user_index_page_details();
    }


    public function muuzaji_Wa_pembejeo_na_viwatilifu_account_page(User $user_id)
    {

      $user_id = User::where('id', '=', $user_id->id)->get();

      //Take id out of an array
      foreach ($user_id as $user_id) {
        $user_id = $user_id->id;
      }


      $user_location = Auth::user()->user_location;
      //get what is inside my store
      $total_items_in_my_store = Item::where('seller_id', '=', $user_id)->count();
      $my_store = Item::where('seller_id', '=', $user_id)->get();
      $users = User::all();

      return view('UserAccountBladeFiles.MuuzajiWaPembejeoNaViwatilifu.muuzaji-wa-pembejeo-na-viwatilifu-account',
            compact('user_location', 'my_store', 'total_items_in_my_store', 'users'));
    }

    public function post_item_store_method(User $user_id)
    {

      //validate data
      $data = request()->validate([
        'item_name' => ['required','string'],
        'item_image' => ['required'],
        'item_category' => ['required','string'],
        'item_price' => ['required','string'],
        'item_description' => ['required','string'],
        'seller_id' => ['required','string'],
        'seller_name' => ['required','string'],

      ]);

      //check if data is validated
      if (isset($data)) {
        $item = new Item();
        $item->item_name = request()->item_name;
        $item->item_category = request()->item_category;
        $item->item_price = request()->item_price;
        $item->item_description = request()->item_description;
        $item->seller_id = request()->seller_id;
        $item->seller_name = request()->seller_name;
        $item->seller_image_location = request()->seller_image_location;

        // save image
        if(request()->hasFile('item_image')){
        $item_image = request()->file('item_image');
        $filename = time().','.$item_image->getClientOriginalExtension();
        Image::make($item_image)->resize(600, 300)->save(public_path('/Uploads/ItemImages/'.$filename));
        $item->item_image = $filename;

        //save item in Database
        $item->save();
        // dd($item);

        }

        //get what is inside my store
        $my_store = Item::where('seller_id', '=', $user_id->id)->get();
        //dd($my_store);
      }
      return redirect()-> back()->with('message', 'Bidhaa yake Imepostiwa, Asante!', compact('my_store'));
    }


    public function user_index_page_details()
    {
      //Get User Location
      $user_location = Auth::user()->user_location;

      // get regionName
       $user_location_array = explode(', ', $user_location);

       $user_region = $user_location_array[0];
       $user_district = $user_location_array[1];

       // dd($user_district);

      //Weather API call for current forecast
      $weather = new OpenWeather();
      $current = $weather->getCurrentWeatherByCityName($user_region);
       // dd($weather);

      //Temp in Celsus
      $fahrenheit = $current['forecast']['temp'] ?? 34;
      $fahrenheit_min = $current['forecast']['temp_min']?? 34;
      $fahrenheit_max = $current['forecast']['temp_max']?? 25;

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
      $tomorrow_fahrenheit = $future_weather_forecast['forecast'][4]['forecast']['temp'] ?? 34;
      $tomorrow_fahrenheit_min = $future_weather_forecast['forecast'][4]['forecast']['temp_min'] ?? 25;
      $tomorrow_fahrenheit_max = $future_weather_forecast['forecast'][4]['forecast']['temp_max'] ?? 34;

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

      //places
      $user_location_details = Place::where([['Region', '=', $user_region], ['District', '=', $user_district]] )->get();
       // dd($user_location_details);

      //Get Topics
      $kilimo_topics_count_collection = Forum::where('Category', 'Kilimo')->get();
      // dd($kilimo_topics_count_collection);

      //Get Topics
      $ufugaji_topics_count_collection = Forum::where('Category', 'Ufugaji')->get();
      // dd($kilimo_topics_count_collection);

      //Get Topics
      $usafirishaji_topics_count_collection = Forum::where('Category', 'Usafirisaji')->get();
      // dd($kilimo_topics_count_collection);

      //Get $kilimo_topics_count out of an array
      foreach ($kilimo_topics_count_collection as $kilimo_topics_count_collection) {
        $kilimo_topics_count = $kilimo_topics_count_collection['Topics'];
      }

      $kilimo_topics_count = 0;
      //Get $ufugaji_topics_count out of an array
      // foreach ($ufugaji_topics_count_collection as $ufugaji_topics_count_collection) {
      //   $ufugaji_topics_count = $ufugaji_topics_count_collection['Topics'];
      // }

      $users = User::paginate(5);
      $users_count = User::count();

      return view('UserAccountBladeFiles.Mkulima.mkulima-home-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'tomorrow_celsius_min', 'tomorrow_celsius_max', 'tomorrow_celsius', 'icon_path', 'tomorrow_icon_path', 'group_lists', 'user_location_details', 'kilimo_topics_count', 'users', 'users_count'));

    }


}
