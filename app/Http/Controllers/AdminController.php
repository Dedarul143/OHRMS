<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function help()
    {
        return view('backend.pages.admin');
    }
}
