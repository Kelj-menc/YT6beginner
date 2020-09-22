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
      public function services()
      {
        //ovde u ovaj controller ne vracam samo view nego i data iz DB
        $services = \App\Models\Service::all();
        
          return view('services', compact('services'));
      }
}
