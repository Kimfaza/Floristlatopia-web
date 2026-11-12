<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }


    // public function cart()
    // {
    //     return view('cart');
    // }

    public function detail()
    {
        $product = Product::inRandomOrder()->first();        
        return view('detail', ['product' => $product]);
    }

    public function produk()
    {
        return view('produk');
    }
}
