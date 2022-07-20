<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function Houses()
    {
        return view('backend.pages.report');
    }
}
