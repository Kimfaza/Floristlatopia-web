@extends('app')

@section('title')
    <title>Shopping Cart - Latopia</title>
@endsection

@section('konten')
<div class="container mx-auto px-4 md:px-8 pt-28 pb-16 min-h-screen text-left">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-pink-600">Shopping Cart</h1>
            <a href="{{ route('produk') }}" class="text-sm font-medium text-pink-500 hover:text-pink-600 transition">
                &larr; Continue Shopping
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if($cartItems->count() > 0)
            @php
                $subtotal = 0;
            @endphp

            <div class="flex flex-col lg:flex-row gap-8 items-start">

                <!-- Daftar Produk di Keranjang -->
                <div class="w-full lg:w-2/3 space-y-4">
                    @foreach ($cartItems as $item)
                        @php
                            $product = $item->product;
                            $productName = $product ? $product->name : 'Produk Tidak Ditemukan';
                            $imageName = ($product && $product->image) ? $product->image : 'flowerbouquet-product.jpg';
                            $price = $product ? (float) $product->price : 0;
                            $qty = (int) $item->quantity;
                            $itemTotal = $price * $qty;
                            $subtotal += $itemTotal;
                        @endphp

                        <div class="bg-white p-4 md:p-5 rounded-2xl shadow-sm border border-pink-100 flex flex-col sm:flex-row items-center justify-between gap-4">

                            <!-- Gambar & Info Produk -->
                            <div class="flex items-center gap-4 w-full sm:w-auto">
                                <img src="{{ asset('assets/' . $imageName) }}" alt="{{ $productName }}" class="w-20 h-20 object-cover rounded-xl border border-pink-50 shrink-0">
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800">{{ $productName }}</h3>
                                    <p class="text-sm text-gray-500">Rp {{ number_format($price, 0, ',', '.') }} / item</p>

                                    <!-- Tombol Hapus Item -->
                                    <form action="{{ url('cart/' . $item->id) }}" method="POST" class="mt-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs text-red-500 hover:text-red-700 font-medium flex items-center gap-1 transition">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Kontrol Jumlah & Subtotal Item -->
                            <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto border-t sm:border-t-0 pt-3 sm:pt-0">
                                <div class="flex items-center border border-gray-200 rounded-lg overflow-hidden bg-gray-50">
                                    <!-- Kurangi Qty -->
                                    <form action="{{ url('cart/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ max(1, $qty - 1) }}">
                                        <button type="submit" {{ $qty <= 1 ? 'disabled' : '' }} class="px-3 py-1.5 text-gray-600 hover:bg-pink-100 hover:text-pink-600 disabled:opacity-40 font-bold transition">-</button>
                                    </form>

                                    <span class="w-10 text-center text-sm font-semibold text-gray-800">
                                        {{ $qty }}
                                    </span>

                                    <!-- Tambah Qty -->
                                    <form action="{{ url('cart/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $qty + 1 }}">
                                        <button type="submit" class="px-3 py-1.5 text-gray-600 hover:bg-pink-100 hover:text-pink-600 font-bold transition">+</button>
                                    </form>
                                </div>

                                <span class="text-lg font-bold text-gray-800 min-w-[120px] text-right">
                                    Rp {{ number_format($itemTotal, 0, ',', '.') }}
                                </span>
                            </div>

                        </div>
                    @endforeach
                </div>

                <!-- Ringkasan Pesanan -->
                @php
                    $tax = $subtotal * 0.10; // Pajak 10%
                    $grandTotal = $subtotal + $tax;
                @endphp

                <div class="w-full lg:w-1/3 bg-pink-50 p-6 rounded-2xl shadow-md border border-pink-100 sticky top-28">
                    <h2 class="text-xl font-bold text-pink-600 mb-4 pb-3 border-b border-pink-200">Order Summary</h2>

                    <!-- Catatan Custom Bouquet -->
                    <div class="mb-5">
                        <label for="orderNote" class="block text-sm font-semibold text-gray-700 mb-2">Note / Custom Request:</label>
                        <textarea id="orderNote" rows="3" class="w-full p-3 text-sm bg-white border border-pink-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-400 text-gray-700" placeholder="Contoh: Flower type: Red Rose, Wrapping: Organza, Ribbon: Satin..."></textarea>
                    </div>

                    <!-- Rincian Harga -->
                    <div class="space-y-2.5 text-sm border-t border-pink-200 pt-4 mb-6">
                        <div class="flex justify-between text-gray-600">
                            <span>Sub Total</span>
                            <span class="font-semibold text-gray-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Tax (10%)</span>
                            <span class="font-semibold text-gray-800">Rp {{ number_format($tax, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-xl font-bold text-gray-900 pt-3 border-t border-pink-200">
                            <span>Total</span>
                            <span class="text-pink-600">Rp {{ number_format($grandTotal, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <a href="{{ route('checkout') }}" class="block w-full text-center bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl text-base font-semibold shadow-md transition">
                        Proceed to Checkout
                    </a>
                </div>

            </div>
        @else
            <!-- Tampilan Jika Keranjang Kosong -->
            <div class="bg-white rounded-2xl shadow-sm border border-pink-100 p-12 text-center max-w-lg mx-auto my-8">
                <div class="w-20 h-20 bg-pink-100 text-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shopping-bag text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Your cart is empty!</h2>
                <p class="text-gray-500 text-sm mb-6">Belum ada buket atau hampers di keranjangmu. Yuk pilih produk favoritmu sekarang!</p>
                <a href="{{ route('produk') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2.5 px-8 rounded-xl shadow-md transition">
                    Shop Now
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
