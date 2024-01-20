<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairController extends Controller
{
  public function RepairMashineHomePage()
  {
    return view('UserAccountBladeFiles.RepairMashine.repair-mashine-home-page');
  }
}
