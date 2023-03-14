<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Models\Rumah_Sakit;

class Layanancontroller extends Controller
{
    //
    public function index(Request $request)
    {
        $layanan = Layanan::all();
        if ($request->has('search')) {
            $id_layanan_test = $request->layanan;
            $data = Rumah_Sakit::where('nama_rumahsakit', 'LIKE', '%' . $request->search . '%')->paginate(5);

            if ($request->has('layanan') && $request->has('search')) {
                $data = Rumah_Sakit::whereHas(
                    'layanans',
                    function ($q) use ($id_layanan_test) {
                        $q->whereIn('id_layanan', $id_layanan_test);
                    }
                )->where('nama_rumahsakit', 'LIKE', '%' . $request->search . '%')->paginate(5);
            }
        } else {
            // $data = Rumah_Sakit::orderBy('nama_rumahsakit', 'asc')->paginate(5);
            $data = Rumah_Sakit::with('layanans')->orderBy('nama_rumahsakit', 'asc')->get();
            
        }
        // $data = Rumah_Sakit::all();
        return view('layanan',  ['data' => $data, 'layanan' => $layanan]);
    }

    public function detailroute($id){
        // dd($id);
        $data = Rumah_Sakit::with('layanans')->where('id_rumahsakit', $id)->orderBy('nama_rumahsakit', 'asc')->get();
        $layanan = Layanan::all();
        return view('detailroute',  ['data' => $data, 'layanan' => $layanan]);
    }
}
