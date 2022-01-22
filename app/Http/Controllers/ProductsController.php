<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        // $title = 'welcome to laravel 8';
        // $description = 'desc';
        // $data = [
        //     'product_1' => 'iphone',
        //     'product_2' => 'samsung',
        // ];

        /* Parse data to view with compact */
        // return view('products.index', compact('title', 'description'));

        /* Parse data use WITH method */
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        print_r(route('products'));
        return view('products.index');
    }

    public function about(){
        return 'about';
    }

    public function show($name){
        $data = [
            'iphone' => 'iphone',
            'samsung' => 'samsung',
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' Doesnt exist'
        ]);
    }
}
