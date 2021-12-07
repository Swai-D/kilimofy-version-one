<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MashineController extends Controller
{
    public function MashineHomePage()
    {
      return view('UserAccountBladeFiles.MashineZaKilimo.muuzaji-wa-mashine-za-kilimo');
    }
}
