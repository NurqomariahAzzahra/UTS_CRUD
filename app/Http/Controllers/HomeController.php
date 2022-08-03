<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class HomeController extends Controller
{
    public function index()
    {
        // {
        //     $data = Data::all();
        //     $title = 'Produk Saya';
        //     return view('welcome', compact('title', 'data'));
        // }
    }

    public function dashboard()
    {
        $title = 'Data Dashboard';
        return view('admin.dashboard', compact('title'));
        
    }
}
