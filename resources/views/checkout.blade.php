@extends('app')

@section('title')
    <title>Checkout - Latopia</title>
@endsection

@section('konten')
@php
    $items = $cartItems ?? \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())->with('product')->get();
    $subtotal = 0;
@endphp

<main class="container mx-auto px-4 md:px-8 pt-8 pb-16 min-h-screen text-left">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-pink-600">Checkout</h1>
            <a href="{{ route('cart') }}" class="text-sm font-medium text-pink-500 hover:text-pink-600 transition">
                &larr; Back to Cart
            </a>
        </div>

        <form action="{{ route('payment') }}" method="GET" class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- Alamat Pengiriman & Metode Pembayaran -->
            <div class="w-full lg:w-7/12 space-y-6">

                <!-- Alamat Pengiriman -->
                <section class="bg-white p-6 rounded-2xl shadow-sm border border-pink-100">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-pink-500"></i> Shipping Address
                        </h2>
                        <button type="button" onclick="toggleEditAddress()" id="btnEditAddress" class="text-xs font-semibold text-pink-600 bg-pink-50 hover:bg-pink-100 py-1.5 px-3 rounded-lg transition">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </button>
                    </div>

                    <div id="addressDisplay" class="p-4 bg-gray-50 rounded-xl border border-gray-100 text-sm text-gray-700 leading-relaxed">
                        <p class="font-semibold text-gray-900 mb-1">{{ Auth::user()->name ?? 'Customer Latopia' }}</p>
                        <p id="addressText">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY</p>
                    </div>

                    <!-- Form Edit Alamat -->
                    <div id="addressEditBox" class="hidden mt-3 space-y-3">
                        <textarea id="addressInput" name="shipping_address" rows="3" class="w-full p-3 text-sm border border-pink-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-400">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, DIY</textarea>
                        <div class="flex justify-end gap-2">
                            <button type="button" onclick="saveAddress()" class="bg-pink-500 hover:bg-pink-600 text-white text-xs font-semibold py-2 px-4 rounded-lg transition">
                                Simpan Alamat
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Metode Pembayaran -->
                <section class="bg-white p-6 rounded-2xl shadow-sm border border-pink-100">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-wallet text-pink-500"></i> Payment Method
                    </h2>

                    <div class="space-y-3">
                        <!-- DANA -->
                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-pink-400 transition has-[:checked]:border-pink-500 has-[:checked]:bg-pink-50/40">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="payment_method" value="dana" class="w-4 h-4 text-pink-500 focus:ring-pink-500" onchange="toggleCardForm()" checked>
                                <div>
                                    <span class="font-semibold text-gray-800 block text-sm">DANA E-Wallet</span>
                                    <span class="text-xs text-gray-500">Pembayaran instan via aplikasi DANA</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-sky-500 text-white text-xs font-bold rounded-md tracking-wide">DANA</span>
                        </label>

                        <!-- COD -->
                        <label class="flex items-center justify-between p-4 border border-gray-200 rounded-xl cursor-pointer hover:border-pink-400 transition has-[:checked]:border-pink-500 has-[:checked]:bg-pink-50/40">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="payment_method" value="cod" class="w-4 h-4 text-pink-500 focus:ring-pink-500" onchange="toggleCardForm()">
                                <div>
                                    <span class="font-semibold text-gray-800 block text-sm">Cash on Delivery (COD)</span>
                                    <span class="text-xs text-gray-500">Bayar tunai saat buket diterima</span>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-emerald-500 text-white text-xs font-bold rounded-md tracking-wide">COD</span>
                        </label>

                        <!-- Transfer / Kartu BRI -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden transition has-[:checked]:border-pink-500 has-[:checked]:bg-pink-50/30">
                            <label class="flex items-center justify-between p-4 cursor-pointer">
                                <div class="flex items-center gap-3">
                                    <input type="radio" id="radioBri" name="payment_method" value="bri" class="w-4 h-4 text-pink-500 focus:ring-pink-500" onchange="toggleCardForm()">
                                    <div>
                                        <span class="font-semibold text-gray-800 block text-sm">Bank BRI (Card / Transfer)</span>
                                        <span class="text-xs text-gray-500">Pembayaran menggunakan kartu debit/kredit BRI</span>
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-blue-700 text-white text-xs font-bold rounded-md tracking-wide">BRI</span>
                            </label>

                            <!-- Detail Form Kartu BRI -->
                            <div id="briCardDetails" class="hidden px-4 pb-5 pt-2 border-t border-pink-100 bg-white space-y-3">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Name on Card</label>
                                    <input type="text" name="card_name" placeholder="Nama pemilik kartu" class="w-full border border-gray-300 px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-pink-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Card Number</label>
                                    <input type="text" name="card_number" placeholder="xxxx xxxx xxxx xxxx" class="w-full border border-gray-300 px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-pink-500">
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Expiration</label>
                                        <input type="text" name="expiration" placeholder="MM/YY" class="w-full border border-gray-300 px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-pink-500">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-gray-700 mb-1">Card Code (CVV)</label>
                                        <input type="password" name="card_code" maxlength="4" placeholder="123" class="w-full border border-gray-300 px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-pink-500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>


            <!-- Ringkasan Pesanan -->
            <section class="w-full lg:w-5/12 bg-pink-50 p-6 rounded-2xl shadow-md border border-pink-100 sticky top-28">
                <h2 class="text-xl font-bold text-pink-600 mb-4 pb-3 border-b border-pink-200">Order Summary</h2>

                <!-- Daftar Item yang Dibeli -->
                <ul class="divide-y divide-pink-200/60 mb-4 max-h-60 overflow-y-auto pr-1">
                    @forelse ($items as $item)
                        @php
                            $product = $item->product;
                            $name = $product ? $product->name : 'Produk';
                            $price = $product ? (float) $product->price : 0;
                            $qty = (int) $item->quantity;
                            $lineTotal = $price * $qty;
                            $subtotal += $lineTotal;
                        @endphp
                        <li class="py-3 flex justify-between items-center text-sm">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $name }}</p>
                                <p class="text-xs text-gray-500">{{ $qty }}x &times; Rp {{ number_format($price, 0, ',', '.') }}</p>
                            </div>
                            <span class="font-semibold text-gray-800">Rp {{ number_format($lineTotal, 0, ',', '.') }}</span>
                        </li>
                    @empty
                        <li class="py-3 text-sm text-gray-500 text-center">Belum ada item di keranjang.</li>
                    @endforelse
                </ul>

                @php
                    $discount = 0;
                    $tax = $subtotal * 0.10; // Pajak 10%
                    $totalCost = $subtotal - $discount + $tax;
                @endphp

                <!-- Rincian Biaya -->
                <div class="space-y-2 text-sm border-t border-pink-200 pt-4 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span>Subtotal</span>
                        <span class="font-semibold text-gray-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span>Discount</span>
                        <span class="font-semibold text-gray-800">Rp {{ number_format($discount, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span>Taxes (10%)</span>
                        <span class="font-semibold text-gray-800">Rp {{ number_format($tax, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-xl font-bold text-gray-900 pt-3 border-t border-pink-200">
                        <span>Total Cost</span>
                        <span class="text-pink-600">Rp {{ number_format($totalCost, 0, ',', '.') }}</span>
                    </div>
                </div>

                <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3.5 px-4 rounded-xl text-base font-semibold shadow-md transition flex items-center justify-center gap-2">
                    <i class="fas fa-lock text-sm"></i> Pay Now
                </button>
            </section>

        </form>
    </div>
</main>

<script>
    function toggleCardForm() {
        const isBriSelected = document.getElementById('radioBri').checked;
        const cardForm = document.getElementById('briCardDetails');
        if (isBriSelected) {
            cardForm.classList.remove('hidden');
        } else {
            cardForm.classList.add('hidden');
        }
    }

    function toggleEditAddress() {
        const displayBox = document.getElementById('addressDisplay');
        const editBox = document.getElementById('addressEditBox');
        displayBox.classList.toggle('hidden');
        editBox.classList.toggle('hidden');
    }

    function saveAddress() {
        const newAddress = document.getElementById('addressInput').value.trim();
        if (newAddress !== '') {
            document.getElementById('addressText').textContent = newAddress;
        }
        toggleEditAddress();
    }
</script>
@endsection
