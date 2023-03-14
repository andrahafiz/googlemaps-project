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

class LayananRumahSakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtLayanan = Layanan::all();
        return view('admin/layanan', compact('dtLayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $layanan = Layanan::all();
        return view('admin/tambahlayanan', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_layanan' => 'required',

        ]);
        // dd($validatedData);

        // // dd($request->file('foto_rumahsakit'));
        // if ($request->file('foto_rumahsakit')) {
        //     $validatedData['foto_rumahsakit'] = $request->file('foto_rumahsakit')->store('gambar_rumahsakit');
        // }

        $layanan = Layanan::create($validatedData);

        return redirect()->route('admin.layanan.index')->with('toast_success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Layanan::where('id_layanan', $id)->first();
        return view('admin/editlayanan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nama_layanan' => 'required',
        ]);

        $data = Layanan::where('id_layanan', $id)->first();
        $data->update(
            $validatedData
        );
        return redirect()->route('admin.layanan.index')->with('toast_success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Layanan::where('id_layanan', $id)->first();
        $data->delete();
        return  redirect()->back()->with('toast_success', 'Data berhasil diHapus!');
    }
}
