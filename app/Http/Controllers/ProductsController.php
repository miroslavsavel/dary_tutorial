<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        
        
        print_r(route('products'));

        //3opt
        return view('products.index');
    }

    public function about() {
        return 'About us Page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Products '. $name . ' does not exists'
        ]);
    }
}
