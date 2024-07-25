<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Percobaan
    public function index()
{
    $cartItems = Cart::all();
    // @dd($cartItems);
    return view('cart', compact('cartItems'));
    
}

public function addToCart(Request $request)
{
    $product = Product::find($request->id);
    $price = $product->sale_price ? $product->sale_price : $product->regular_price;
    Cart::instance('cart')->add($product->id,$product->name,$request->quantity,$price)->associate('App\Models\Product');


    return redirect()->back()->with('message','Success ! Item has been added successfully!');
}  


    // public function index()
    // {
    //     $user_id = Auth::id();
    //     $carts = Cart::where('user_id', $user_id)->with('product')->get();
    //     return view('cart', ['carts' => $carts]);
    // }

    public function add(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->product_id;

        Cart::create([
            "user_id" => $user_id,
            "product_id" => $product_id,
            "quantity" => 1,
        ]);

        return redirect("/cart");
    }

    public function destroy($id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('id', $id)
            ->first();

        if ($cart) {
            $cart->delete();
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('id', $id)
            ->first();

        if ($cart) {
            $cart->quantity = $request->input('quantity');
            $cart->save();
        }

        return redirect()->route('cart')->with('success', 'Item updated successfully');
    }
}
