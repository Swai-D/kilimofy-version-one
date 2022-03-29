<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SearchController extends Controller
{

  public function search(Request $request)

    {
        dd($request->search_main);
    }

}
