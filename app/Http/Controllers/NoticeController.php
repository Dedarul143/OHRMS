<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function Houses()
    {
        return view('backend.pages.notice');
    }
}