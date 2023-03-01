<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParkSpaces;

class AdmController extends Controller
{
    //
    public function admindashbd(){


        return view('content.adminDashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'spaces' => 'required',
            'price' => 'required'
        ]);
        // dd($request);
        ParkSpaces::create($request->post());

        return redirect()->route('add.parking')->with('success','Parking space added successfully!');
       
    }

   
}
