<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Rumah_Sakit;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationData;

class Lokasicontroller extends Controller
{
    //
    public function index()
    {
        $dtLokasi = Rumah_Sakit::all();

        return view('admin/lokasi', compact('dtLokasi'));
    }

    public function create()
    {
        $layanan = Layanan::all();
        return view('admin/tambahlokasi', compact('layanan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_rumahsakit' => 'required',
            'alamat_rumahsakit' => 'required',
            'latitude_rumahsakit' => 'required',
            'longitude_rumahsakit' => 'required',
            // 'nama_layanan' => 'required',
            // 'informasi_layanan' => 'required'
        ]);

        // dd($request->file('foto_rumahsakit'));
        if ($request->file('foto_rumahsakit')) {
            $validatedData['foto_rumahsakit'] = $request->file('foto_rumahsakit')->store('gambar_rumahsakit');
        }

        $rumahsakit = Rumah_Sakit::create($validatedData);
        // dd($rumahsakit);
        $layanan_rumahsakit = $request->layanan_rumahsakit;
        $informasi_layanan = $request->informasi_layanan;
        for ($i = 0; $i < count($layanan_rumahsakit); $i++) {
            // echo $layanan_rumahsakit[$i];
            $datasave = [
                'layanan_id' => $layanan_rumahsakit[$i],
                'rumahsakit_id' => $rumahsakit->id_rumahsakit,
                // 'nama_layanan' => $layanan_rumahsakit,
                'informasi_layanan' => $informasi_layanan[$i],
            ];
            // dd($datasave);

            DB::table('layanan_rumahsakit')->insert($datasave);
        }
        return redirect()->route('admin.lokasi.index')->with('toast_success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $data = Rumah_Sakit::with('layanans')->where('id_rumahsakit', $id)->first();
        $layanan = Layanan::all();
        // foreach ($data->layanans as $l) {
        //     echo $l['id_layanan'];
        // }
        // dd();
        return view('admin/editlokasi', compact('data', 'layanan'));
    }


    public function update(Request $request, $id)
    {
        // dd($id);
        $validatedData = $request->validate([
            'nama_rumahsakit' => 'required',
            'alamat_rumahsakit' => 'required',
            'latitude_rumahsakit' => 'required',
            'longitude_rumahsakit' => 'required',
        ]);

        DB::table('layanan_rumahsakit')
            ->where('rumahsakit_id', $id)
            ->delete();

        $layanan_rumahsakit = $request->layanan_rumahsakit;
        $informasi_layanan = $request->informasi_layanan;
        for ($i = 0; $i < count($layanan_rumahsakit); $i++) {
            $datasave = [
                'layanan_id' => $layanan_rumahsakit[$i],
                'rumahsakit_id' => $id,
                'informasi_layanan' => $informasi_layanan[$i],
            ];
            DB::table('layanan_rumahsakit')->insert($datasave);
        }

        $data = Rumah_Sakit::where('id_rumahsakit', $id)->first();

        $gambar = $request->file('foto_rumahsakit');
        if ($gambar) {
            Storage::delete($data->foto_rumahsakit);
            $validatedData['foto_rumahsakit'] =  $request->file('foto_rumahsakit')->store('gambar_rumahsakit');
        }

        $data->update(
            $validatedData
        );

        // DB::table('layanan_rumahsakit')
        //     ->where('layanan_id', $layanan_rumahsakit[0])
        //     ->where('informasi_layanan', $informasi_layanan[0])
        //     ->dd();
        // $data->update(
        //     $validatedData
        // );
        return redirect()->route('admin.lokasi.index')->with('toast_success', 'Data berhasil diupdate!');
    }

    public function show($id)
    {
        $data = Rumah_Sakit::with('layanans')->find($id);
        return view('admin/detaillokasi', ['data' => $data]);
    }

    public function destroy($lokasi)
    {
        $data = Rumah_Sakit::where('id_rumahsakit', $lokasi)->first();
        $data->delete();
        return  redirect()->back()->with('toast_success', 'Data berhasil diHapus!');
    }

    public function test_repeater(Request $request)
    {
        $layanan_rumahsakit = $request->layanan_rumahsakit;
        $informasi_layanan = $request->informasi_layanan;
        for ($i = 0; $i < count($layanan_rumahsakit); $i++) {
            // echo $layanan_rumahsakit[$i];
            $datasave = [
                'layanan_id' => $layanan_rumahsakit[$i],
                'rumahsakit_id' => 1,
                // 'nama_layanan' => $layanan_rumahsakit,
                'informasi_layanan' => $informasi_layanan[$i],
            ];

            DB::table('layanan_rumahsakit')->insert($datasave);
        }
        return redirect()->route('admin.lokasi.index')->with('toast_success', 'Data berhasil ditambah!');
    }
}
