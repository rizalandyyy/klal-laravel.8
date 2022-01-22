<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $names = [];
        return view('pages.about', [
            'names' => $names
        ]);
    }
}
