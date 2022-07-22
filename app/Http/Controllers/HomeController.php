<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // $jumlah_data = Data::all()->count();
        // // $title = 'Produk Saya';
        // return view('admin.data')->with('data', $data);
    }

    public function dashboard()
    {
        $title = 'Data Dashboard';
        return view('admin.dashboard', compact('title'));
    }
}
