<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
      //ovde u ovaj controller ne vracam samo view nego i data iz DB
      $services = \App\Models\Service::all();
        return view('service.index', compact('services'));
    }
    public function store()
    {
        $data = request()-> validate([
            'name' => 'required|min:5'
        ]);
        \App\Models\Service::create($data);
                //ovo dole sam skratio sa ovim \App\Service\Models::create($data);
                //create new service
                //$service = new \App\Models\Service();
                //put ono sto smo u formu u service
                //$service->name = request('name');
                //save taj new service into db
                //$service->save();
        //kad sve to uradimo treba se vratimo na taj page
        return redirect()->back();
    }
}
