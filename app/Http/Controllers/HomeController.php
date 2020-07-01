<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('items.tableone', ["halaman" => "tableone"]);
    }

    public function dataTables()
    {
        return view('items.tabletwo', ["halaman" => "tabletwo"]);
    }
}
