<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah_Sakit;
use App\Models\Layanan;

class Detaillayanancontroller extends Controller
{
    //
    public function index($id)
    {
        $data = Rumah_Sakit::with('layanans')->find($id);
        // $data1 = Layanan::where('id_layanan', $id)->get();
        // foreach ($data->layanans as $s) {
        //     print_r($s->pivot->informasi_layanan);
        //     echo $s->pivot->informasi_layanan . '<br>';
        // }
        // die();
        // return;
        return view('detaillayanan', ['data' => $data]);
    }
}
