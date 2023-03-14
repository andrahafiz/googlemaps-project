<?php

namespace App\Http\Controllers;

use App\Models\Rumah_Sakit;
use Illuminate\Http\Request;

class Mapcontroller extends Controller
{
    //
    public function index()
    {
        $layananRumahSakit = Rumah_Sakit::with('layanans')->get();
        return view('map', compact('layananRumahSakit'));
    }
}
