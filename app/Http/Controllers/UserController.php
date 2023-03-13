<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ParkSpaces;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      
             return view('layout.userLayout');
    }

    public function dashboard(){
        $data = ParkSpaces::all();
        return view('usercontent.dashboard',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('park_spaces')->where('name', 'Burnhampark')->first();

        $spaces = $user->spaces;
        $values = array();
         for ($i = 1; $i <= $spaces; $i++ ){
            $values[] = $i;

         }       

              return view('usercontent.availableSpace',compact('values'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
