<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
  public function Houses()
  {
    return view('backend.pages.tenant');
  }
}
