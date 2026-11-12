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
        return redirect()->route('cart')->with('success', 'Product added to cart!');
    }


    public function getAllProducts(Request $request)
    {
        $query = Product::query();

        // Filter berdasarkan kategori (bouquet, hampers, custom)
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter tambahan (input search)
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();
        $activeCategory = $request->category;

        return view('produk', [
            'products' => $products,
            'activeCategory' => $activeCategory,
        ]);
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
