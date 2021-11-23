<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function viewText()
    {
      return view('ChatsBladeFiles.text-content-layout');
    }
}
