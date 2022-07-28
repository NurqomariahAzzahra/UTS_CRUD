<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Wilayah;
use App\Models\Trestoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='0')
        {
            $data = Data::all();
            $title = 'Produk Saya';
            return view('admin.data', compact('title', 'data'));
        }
        if($role=='1')
        {
            $data = Data::all();
            $title = 'Produk Saya';
            return view('superAdmin.dashboard', compact('title', 'data'));
        }
        // $data = Data::all();
        // $title = 'Produk Saya';
        // return view('admin.data', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $data = Data::create($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarmakanan/', $request->file('gambar')->getClientOriginalName());
        //     $data->foto = $request->file('gambar')->getClientOriginalName();
        //     $data->Save();
        // }
        $wilayah = Wilayah::all();
        $title = "Masukkan Data";
        return view('admin.create', compact('title', 'wilayah'));
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
            'wilayah_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
        // $fileName = time() . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->store('gambars');
        $validasi['user_id'] = Auth::id();
        $validasi['gambar'] = $path;
        Data::create($validasi);
        return redirect('data')->with('success', 'Data Saved');
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
        $wilayah = Wilayah::all();
        $data = Data::find($id);
        $title = 'Edit Data Mahasiwa';
        return view('admin.create', compact('title', 'data', 'wilayah'));
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
            'wilayah_id' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('gambars');
            $validasi['gambar'] = $path;
        }
        $validasi['user_id'] = Auth::id();

        Data::where('id', $id)->update($validasi);
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
        $data = Data::find($id);
        $data->delete();
        return redirect('data')->with('success', 'Data Deleted');

    }
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    public function cari(Request $request)
    {
        $cari = $request->search;
        $data = data::where('nama_produk', 'like', '%' . $cari . '%')->get();
        return view('data.search', ['data' => $data]);
    }
}
