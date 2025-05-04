<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

}
