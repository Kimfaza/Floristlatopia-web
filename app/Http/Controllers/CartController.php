<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        return view('cart', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->product_id;

        // Cek apakah produk sudah ada di keranjang user
        $existingCart = Cart::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => 1,
            ]);
        }

        return redirect('/cart')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
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

        return redirect()->back()->with('success', 'Produk dihapus dari keranjang.');
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('id', $id)
            ->first();

        if ($cart) {
            $qty = max(1, (int) $request->input('quantity'));
            $cart->quantity = $qty;
            $cart->save();
        }

        return redirect()->route('cart')->with('success', 'Jumlah item diperbarui.');
    }
}
