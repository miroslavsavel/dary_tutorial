<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $title = "My data passed to view";
        $description = "Another piece of data";
        //1.option
        //we will pass this string into the view by compact function
        // return view('products.index', compact('title','description'));

        //2.opt
        //with()
        $data = [
            'productOne' => 'Iphone',
            'productTwo' => 'Samsung'
        ];
        //return view('products.index')->with('title',$title);
        // return view('products.index')->with('data',$data);
        
        //3opt
        return view('products.index',[
            'data' => $data
        ]);
    }

    public function about() {
        return 'About us Page';
    }
}
