<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
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
        $data = Data::all();
        $title = 'Daftar Mahasiswa';
        return view('admin.data', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Masukkan Data";
        return view('admin.create', compact('title'));
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
            'gambar' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
        Data::create($validasi);
        return redirect('data')->with('success', 'Data Saved');

        // $this->validate($request, [
        //     'nama' => 'required'
        // ]);
        // Data::create([
        //     'nama' => request('nama'),
        //     'nim' => request('nim'),
        //     'prodi' => request('prodi'),
        //     'jurusan' => request('jurusan'),
        // ]);
        // return redirect('data')->with('success', 'data saved');
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
        $data = Data::find($id);
        $title = 'Edit Data Mahasiwa';
        return view('admin.create', compact('title', 'data'));
        // if (!$data) {
        //     abort(404);
        // }

        //     ->with('title', $title)
        //     ->with('data', $data);
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
            'required' => 'Kolom : Isi Dengan Lengkap',
            'date'     => 'Kolom : Masukkan Tanggal Dengan Benar',
            'numeric'  => 'Kolom : Massukan Angka',
        ];
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'gambar' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], $message);
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
        //
        // $data = Data::find($id);       //cari id yang dipencet
        // $data->delete();                  //delete id tersebut

        // return redirect('/data')->with('success', 'data deleted');                //redirect lagi ke home
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

        $data = data::where('nama', 'like', '%' . $cari . '%')->get();
        return view('data.search', ['data' => $data]);
    }
}
