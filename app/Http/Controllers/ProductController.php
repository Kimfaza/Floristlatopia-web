<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function showProduct()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        // Logika untuk menambahkan produk ke keranjang
        // Untuk sekarang, kita hanya mengarahkan kembali dengan pesan sukses
        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }



    public function getAllProducts()
    {
        $products = Product::all();
        return view('produk', ['products' => $products]);
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        return view('produk', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')->paginate(10);
        return view('produk', ['products' => $products]);
    }

    public function detail(Product $product) {
        return view("detail-product", compact("product"));
    }
}
