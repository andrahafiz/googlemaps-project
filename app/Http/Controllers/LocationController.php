<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    //
    public function index(Request $request)
    {
        /* $ip = $request->ip(); Dynamic IP address */
        $ip = '125.165.105.11'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        return view('location', compact('currentUserInfo'));
    }
}
