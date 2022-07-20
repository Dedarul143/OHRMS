<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousesetupController extends Controller
{
   public function Houses()
   {
    return view('backend.pages.housesetup');
   }
}
