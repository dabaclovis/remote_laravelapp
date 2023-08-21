<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $name = "UDj4DLnRWynBwvh/Bx5ZvHx0R6cQbWXe";

        return view('pages.index',[
            'name' => $name,
        ]);
    }
}
