<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoAddressController extends Controller
{
      public function index(Request $request) {
 
        return view("auto-complete");
      }
}
