<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rumah_Sakit;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    //
    public function index()
    {
        $layananRumahSakit = Rumah_Sakit::with('layanans')->get();
        // dd($layananRumahSakit); 
        return view('admin/dashboard', compact('layananRumahSakit'));
    }
}
