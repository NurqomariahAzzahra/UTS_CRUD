<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Search;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $data = DB::table('data')->where('nama', 'LIKE', '%' . $search_text . '%')->paginate(10);
            return view('admin/data', ['data' => $data]);
        } else {
            return view('admin/data');
        }
    }
}
