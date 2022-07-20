<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function Houses()
    {
        return view('backend.pages.rules');
    }
}
