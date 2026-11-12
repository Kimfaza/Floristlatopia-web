<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaction;
use Midtrans;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Ambil data keranjang user yang sedang login
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();

        // Jika keranjang kosong, diarahkan kembali ke halaman cart
        if ($carts->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Keranjang belanja kamu masih kosong.');
        }

        // Konfigurasi Midtrans
        Midtrans\Config::$serverKey = config('midtrans.server_key');
        Midtrans\Config::$clientKey = config('midtrans.client_key');
        Midtrans\Config::$isProduction = config('midtrans.is_production') ? true : false;

        // Detail transaksi
        $grossAmount = $this->calculateTotalAmount($carts);
        $transaction_details = [
            'order_id' => 'ORDER-' . time(),
            'gross_amount' => $grossAmount,
        ];

        // Daftar item untuk Midtrans
        $items = [];
        foreach ($carts as $cart) {
            if ($cart->product) {
                $items[] = [
                    'id' => $cart->product->id,
                    'price' => (int) $cart->product->price,
                    'quantity' => (int) $cart->quantity,
                    'name' => $cart->product->name,
                ];
            }
        }

        // Detail pelanggan
        $customer_details = [
            'first_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'address' => auth()->user()->address ?? 'Yogyakarta',
        ];

        $transaction_data = [
            'transaction_details' => $transaction_details,
            'item_details' => $items,
            'customer_details' => $customer_details,
        ];

        // Buat Snap Token Midtrans
        $snapToken = null;
        try {
            $snapToken = Midtrans\Snap::getSnapToken($transaction_data);
        } catch (\Exception $e) {
            // Tetap tampilkan halaman checkout meski Midtrans belum dikonfigurasi penuh
            $snapToken = null;
        }

        // Simpan transaksi ke database
        $data = [
            'user_id' => auth()->id(),
            'transaction_details' => json_encode($transaction_details),
            'item_details' => json_encode($items),
            'customer_details' => json_encode($customer_details),
            'snap_token' => $snapToken ?? 'TOKEN-' . time(),
            'transaction_status' => 'pending',
        ];

        $transaction = Transaction::create($data);

        return view('checkout', compact('carts', 'snapToken', 'transaction'));
    }

    private function calculateTotalAmount($carts)
    {
        $total = 0;
        foreach ($carts as $cart) {
            if ($cart->product) {
                $total += $cart->product->price * $cart->quantity;
            }
        }
        return (int) $total;
    }

    public function thanks()
    {
        // Kosongkan keranjang setelah pembayaran selesai
        Cart::where('user_id', auth()->id())->delete();
        return view('thanks');
    }

    public function getTransaction()
    {
        $user_id = auth()->id();
        $transactions = Transaction::where('user_id', $user_id)->get();
        return view('history', ['transactions' => $transactions]);
    }
}
