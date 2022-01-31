<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mashine;
use App\Models\Place;
use App\Models\Item;
use App\Models\User;

class MarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $market_items = Item::all();
        $mashine_za_kilimo_list = Mashine::all();
        $pembejeo = Item::where('item_category', 'Pembejeo')->get();
        $pembejeo_count = Item::where('item_category', 'Pembejeo')->count();

        $mashine_za_kilimo = Mashine::all();
        $mashine_za_kilimo_count = Mashine::count();

        $fruits = Item::where('item_category', 'Matunda na Mboga Mboga')->count();
        // dd($fruits);
        return view('MarketPlaceBladeFiles.market-place-index', compact('market_items', 'pembejeo', 'pembejeo_count', 'mashine_za_kilimo', 'mashine_za_kilimo_count', 'mashine_za_kilimo_list'));

    }

    public function items_details(Item $item_id)
    {
        // dd($item_id);
        $item_details = Item::where('id', '=', $item_id->id)->get();
        $seller = User::where('id', $item_id->seller_id)->get();
        $item_count_for_seller = Item::where('seller_id', '=', $item_id->seller_id)->count();
        return view('MarketPlaceBladeFiles.item-details', compact('item_details','seller', 'item_count_for_seller'));

    }



    public function item_shopping_cart(Item $bidhaa_info_id)
    {
      // dd($bidhaa_info_id);
      $bidhaa_info = Item::where('id', '=', $bidhaa_info_id->id)->get();
      $user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->get();
      $total_user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->count();
      $places =  Place::select('Region','District')->get();
      $users = User::all();
      return view('MarketPlaceBladeFiles.item-details', compact('bidhaa_info', 'user_item_list', 'total_user_item_list', 'places', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
