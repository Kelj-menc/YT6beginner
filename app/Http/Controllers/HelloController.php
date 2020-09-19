<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
      public function about()
      {
          return view('about');
      }
      public function services()
      {
        $services = \App\Models\Service::all();
        
          return view('services', compact('services'));
      }
}
