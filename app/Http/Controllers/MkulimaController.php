<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use App\Models\BwanaShambaEvent;
use App\Models\Headline;
use App\Models\Driver;
use App\Models\Mashine;
use App\Models\Place;
use App\Models\Post;
use App\Models\Forum;
use App\Models\Group;
use App\Models\User;
use App\Models\Item;
use App\Models\Blog;

use OpenWeather;
use Auth;
class MkulimaController extends Controller
{

    public function mkulima_index_page(Request $request)
    {

      //Get User Location
      $user_location = Auth::user()->user_location;
      // dd($user_location);

      // get regionName
       $user_location_array = explode(', ', $user_location);

       $user_region = $user_location_array[0];
       $user_district = $user_location_array[1];

        // dd($user_region);

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

      return view('UserAccountBladeFiles.Mkulima.mkulima-home-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'tomorrow_celsius_min', 'tomorrow_celsius_max', 'tomorrow_celsius', 'icon_path', 'tomorrow_icon_path', 'group_lists', 'user_location_details', 'users', 'users_count', 'users', 'headlines', 'headlines_count', 'kilimo_topics_count_collection', 'ufugaji_topics_count_collection', 'usafirishaji_topics_count_collection'));


    }


    public function mashine_za_kilimo(Request $request)
    {
      $user_location = Auth::user()->user_location;
      $mashines = Mashine::paginate(5);
      $users = User::all();
      return view('UserAccountBladeFiles.Mkulima.mashine-za-kilimo', compact('user_location', 'users', 'mashines'));
    }


    public function mabwana_shamba()
    {
      $users = User::all();
      $user_location = Auth::user()->user_location;
      $user_id = Auth::user()->id;
      $bwana_shamba_list = User::where([['user_ocupation', '=', 'Bwana_Shamba'],['user_location', '=', $user_location], ['id', '!=', $user_id]])->get();

      //we be changed in the future
      $bwana_shamba_events_list = BwanaShambaEvent::paginate(5);
      // dd($bwana_shamba_list);
      $total_bwana_shamba_list = User::where([['user_ocupation', '=', 'Bwana_Shamba'],['user_location', '=', $user_location]])->count();
      return view('UserAccountBladeFiles.Mkulima.bwana-shamba', compact('bwana_shamba_list', 'total_bwana_shamba_list', 'user_location', 'users', 'bwana_shamba_events_list'));
    }

    public function pembejeo_na_viwatilifu(Request $request)
    {

      $user_location = Auth::user()->user_location;
      $user_id = Auth::user()->id;

      //Get all the sellers accross user location
      $user_location_pembejeo_na_viwatilifu_list = User::where([['user_location', $user_location],['user_ocupation', 'Muuza_Pembejeo'], ['id', '!=', $user_id]])->get();
       // dd($user_location_pembejeo_na_viwatilifu_list);

      //find the seller in item model
      if ( $user_location_pembejeo_na_viwatilifu_list->count() > 0 ) {
         // dd($user_location_pembejeo_na_viwatilifu_list);

        foreach ($user_location_pembejeo_na_viwatilifu_list as $user_location_pembejeo_na_viwatilifu_seller) {
          //Get Item Details
          $user_location_pembejeo_na_viwatilifu_sellers = Item::where('seller_id', '=', $user_location_pembejeo_na_viwatilifu_seller['id'])->get();
         // dd($user_location_pembejeo_na_viwatilifu_sellers);
          //Get Item Count
          $user_location_pembejeo_na_viwatilifu_sellers_count = Item::where('seller_id', '=', $user_location_pembejeo_na_viwatilifu_seller['id'])->count();
        }

        $places =  Place::paginate(5);
        $users = User::all();

        return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-home-page', compact('user_location',  'user_location_pembejeo_na_viwatilifu_sellers','user_location_pembejeo_na_viwatilifu_sellers_count', 'places', 'users'));

      }

      else {

        $places =  Place::paginate(5);
        $user_location_pembejeo_na_viwatilifu_sellers_count = 0;
        $user_location_pembejeo_na_viwatilifu_sellers = [];
        $users = User::all();

        return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-home-page', compact('user_location', 'places', 'users', 'user_location_pembejeo_na_viwatilifu_sellers_count', 'user_location_pembejeo_na_viwatilifu_sellers'));
      }


    }


    public function pembejeo_na_viwatilifu_shopping_cart(Item $bidhaa_info_id)
    {
      // dd($bidhaa_info_id);
      $bidhaa_info = Item::where('id', '=', $bidhaa_info_id->id)->get();
      $user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->get();
      $total_user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->count();
      $places =  Place::select('Region','District')->get();
      $users = User::all();
      $mashine_set = 0;
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-shopping-cart', compact('bidhaa_info', 'user_item_list', 'total_user_item_list', 'places', 'users', 'mashine_set'));
    }



    public function pembejeo_na_viwatilifu_buy_item(Item $item_id)
    {
      $item_bought = Item::where('id', '=', $item_id->id)->get();
      if (isset($item_bought)) {
        foreach ($item_bought as $item_price) {
          $item_total_price = $item_price['item_price'];
        }
      }
      $item_vat_amount = $item_total_price * 0.18;
      $item_net_price = $item_total_price - $item_vat_amount;
      // dd($item_net_price);
      $users = User::all();
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-buy-item', compact('item_bought', 'item_vat_amount', 'item_net_price', 'item_total_price', 'users'));
    }

    public function pembejeo_na_viwatilifu_check_out_item(Item $item_id)
    {

      $users = User::all();
      $item_number = mt_rand(9, 999999999);
      $item_details = Item::where('id', '=', $item_id->id)->get();
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-check-out-item', compact('users', 'item_details', 'item_number'));
    }

    public function usafiri()
    {
      //Get User Location
      $user_location = Auth::user()->user_location;

      // get regionName
       $user_location_array = explode(', ', $user_location);

       $user_region = $user_location_array[0];
       $user_district = $user_location_array[1];

      $users = User::all();
      $places =  Place::all();
      $usafiri = Driver::all();

      $trip = [];
      return view('UserAccountBladeFiles.Mkulima.usafirishaji-home-page', compact('trip','usafiri','user_district','user_region', 'places', 'users'));
    }


    public function tafuta_usafiri(Request $request)
    {
      $data = $request->validate([
        'kutoka' => ['required'],
        'kwenda' => ['required'],
      ]);

      if (isset($data)) {
        $trip = Driver::where('From', 'LIKE', '%' .$data['kutoka']. '%')->orWhere('From', 'LIKE', '%' .$data['kwenda']. '%')->get();

        }
        if (count($trip) > 0 ) {
          $places =  Place::all();
          return view ('UserAccountBladeFiles.Mkulima.usafirishaji-home-page', compact('trip', 'places'));
        }
        else {

          return "Result Not Found";
        }

    }




    public function mashine_za_kilimo_cart(Mashine $bidhaa_info_id)
    {
      // dd($bidhaa_info_id);
      $bidhaa_info = Mashine::where('id', '=', $bidhaa_info_id->id)->get();
      $user_item_list = Mashine::where('Seller_Id', '=', $bidhaa_info_id->Seller_Id)->get();
      $total_user_item_list = Mashine::where('Seller_Id', '=', $bidhaa_info_id->Seller_Id)->count();
      $user_location = Auth::user()->user_location;
      $places =  Place::select('Region','District')->get();
      $users = User::all();
      $mashine_set = 1;
      return view('UserAccountBladeFiles.Mkulima.mashine-za-kilimo-shopping-cart', compact('bidhaa_info', 'user_item_list', 'total_user_item_list', 'places', 'users', 'mashine_set', 'user_location'));
    }



    public function fundi_wa_mashine()
    {
      $users = User::all();
      $user_location = Auth::user()->user_location;
      $user_id = Auth::user()->id;
      $fundi_list = User::where([['user_ocupation', '=', 'Fundi'],['user_location', '=', $user_location], ['id', '!=', $user_id]])->get();
      // dd($bwana_shamba_list);
      $total_fundi_list = User::where([['user_ocupation', '=', 'Fundi'],['user_location', '=', $user_location]])->count();
      return view('UserAccountBladeFiles.Mkulima.fundi-wa-mashine-za-kilimo', compact('fundi_list', 'total_fundi_list', 'user_location', 'users'));
    }


    public function mtaalam_wa_kilimo_blog_page()
    {
      return view('UserBladeFiles.user-blog-post');
    }



    public function mtaalam_wa_kilimo()
    {
      $users = User::all();
      $user_location = Auth::user()->user_location;
      $user_id = Auth::user()->id;
      $mtaalam_list = User::where([['user_ocupation', '=', 'Mtaalam'],['id', '!=', $user_id]])->get();
      // dd($bwana_shamba_list);
      $total_mtaalam_list = User::where([['user_ocupation', '=', 'Mtaalam'],['id', '!=', $user_id]])->count();
      return view('UserAccountBladeFiles.Mkulima.mtaalam-wa-kilimo', compact('mtaalam_list', 'total_mtaalam_list', 'user_location', 'users'));
    }


    public function vibarua()
    {
      $users = User::all();
      $user_location = Auth::user()->user_location;
      $user_id = Auth::user()->id;
      $vibarua_list = User::where([['user_ocupation', '=', 'Kibarua'],['id', '!=', $user_id]])->get();
      // dd($bwana_shamba_list);
      $total_vibarua_list = User::where([['user_ocupation', '=', 'Kibarua'],['id', '!=', $user_id]])->count();
      return view('UserAccountBladeFiles.Mkulima.vibarua', compact('vibarua_list', 'total_vibarua_list', 'user_location', 'users'))->with('Message', 'Vibarua wote wamehakikiwa na Kiaminika na Kilimofy');
    }



    public function blog_post_show(Blog $blog)
    {
      $blog = Blog::where('id', '=', $blog->id)->get();
      $related_blog = Blog::all();
      // dd($related_blog);
      return view('UserBladeFiles.user-blog-post', compact('blog', 'related_blog'));
    }




    public function user_index_page_details()
    {
      //Get User Location
      $user_location = Auth::user()->user_location;
      // dd($user_location);

      // get regionName
       $user_location_array = explode(', ', $user_location);

       $user_region = $user_location_array[0];
       $user_district = $user_location_array[1];

        // dd($user_region);

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

      return view('UserAccountBladeFiles.Mkulima.mkulima-home-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'tomorrow_celsius_min', 'tomorrow_celsius_max', 'tomorrow_celsius', 'icon_path', 'tomorrow_icon_path', 'group_lists', 'user_location_details', 'users', 'users_count', 'users', 'headlines', 'headlines_count', 'kilimo_topics_count_collection', 'ufugaji_topics_count_collection', 'usafirishaji_topics_count_collection'));

    }



}
