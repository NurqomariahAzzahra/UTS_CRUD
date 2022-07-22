<?php

namespace App\Http\Controllers;

use App\Models\Datapengusaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class DatapengusahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datapengusaha::all();
        $title = 'Semua Data Pengusaha';
        return view('superAdmin.datapengusaha', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Masukkan Data";
        return view('superAdmin.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Kolom : Wajib Diisi*',
            'date'    => 'Kolom : Masukkan Tanggal Dengan Benar',
            'numeric' => 'Kolom : Massukan Angka',
        ];
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'gambar' => '',
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
        // $fileName = time() . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->store('gambars');
        $validasi['user_id'] = Auth::id();
        $validasi['gambar'] = $path;
        Datapengusaha::create($validasi);
        return redirect('datapengusaha')->with('success', 'Data Saved');
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
        $data = Datapengusaha::find($id);
        $title = 'Edit Data Mahasiwa';
        return view('superAdmin.create', compact('title', 'data'));
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
        $message = [
            'required' => 'Kolom : Wajib Diisi*',
            'date'    => 'Kolom : Masukkan Tanggal Dengan Benar',
            'numeric' => 'Kolom : Massukan Angka',
        ];
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('gambars');
            $validasi['gambar'] = $path;
        }
        $validasi['user_id'] = Auth::id();

        Datapengusaha::where('id', $id)->update($validasi);
        return redirect('data')->with('success', 'Data Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Datapengusaha::find($id);
        $data->delete();
        return redirect('data')->with('success', 'Data Deleted');
    }
}
