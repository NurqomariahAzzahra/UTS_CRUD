<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restoran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restoran = Restoran::all();
        $title = 'Produk Saya';
        return view('produkRestoran.restoran', compact('title', 'restoran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Masukkan Data";
        return view('produkRestoran.create', compact('title'));
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
            'nama' => 'required',
            'gambar' => '',
            'alamat' => 'required',
            // 'harga' => 'required',
            // 'deskripsi' => 'required'
        ], $message);
        $path = $request->file('profil_resto')->store('profil_restos');
        $validasi['user_id'] = Auth::id();
        $validasi['profil_resto'] = $path;
        Restoran::create($validasi);
        return redirect('restoran')->with('success', 'Data Saved');
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
        $restoran = Restoran::find($id);
        $title = 'Edit Data Mahasiwa';
        return view('produkRestoran.create', compact('title', 'restoran'));
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
            'nama' => 'required',
            'alamat' => 'required',
        ], $message);
        Restoran::where('id', $id)->update($validasi);
        return redirect('restoran')->with('success', 'Data Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restoran = Restoran::find($id);
        $restoran->delete();
        return redirect('restoran')->with('success', 'Data Deleted');
    }
}
