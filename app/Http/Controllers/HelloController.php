<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{     public function test()
      {
      return view('test');
      }
      public function about()
      {
          return view('about');
      }
}
