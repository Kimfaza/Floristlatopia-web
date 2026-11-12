@extends('app')

@section('title')
    <title>{{ $product->name }} - Detail Product</title>
@endsection

@section('konten')
    <!-- Container Fit -->
    <div class="container mx-auto px-4 pt-0 pb-4 min-h-[calc(100vh-80px)] flex items-center justify-center">
        <div class="max-w-2xl w-full bg-white shadow-xl rounded-2xl overflow-hidden p-6 border border-pink-100 flex flex-col md:flex-row gap-6 items-center">

            <!-- Gambar Produk -->
            <div class="w-full md:w-5/12 flex justify-center">
                <img src="{{ asset('assets/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-80 md:h-96 max-h-[380px] object-cover rounded-xl shadow-md border-2 border-pink-50">
            </div>

            <!-- Detail Info Produk -->
            <div class="w-full md:w-7/12 text-left flex flex-col justify-between self-stretch">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $product->name }}</h1>
                    <p class="text-xl font-semibold text-pink-500 mb-3">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-5">
                        {{ $product->description }}
                    </p>
                </div>

                <!-- Tombol Aksi Utama -->
                <div class="space-y-2.5 pt-3 border-t border-gray-100 mt-auto">
                    <div class="flex gap-2.5">
                        <!-- Form Add to Cart -->
                        <form action="/cart" method="POST" class="flex-1">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2.5 px-4 rounded-xl shadow-md transition flex items-center justify-center gap-2 text-sm">
                                <i class="fas fa-shopping-cart text-xs"></i> Add to Cart
                            </button>
                        </form>

                        <!-- Tombol Custom -->
                        <a href="{{ route('detail') }}" class="bg-pink-100 hover:bg-pink-200 text-pink-600 font-semibold py-2.5 px-4 rounded-xl transition flex items-center justify-center text-sm">
                            Custom
                        </a>
                    </div>

                    <!-- Tombol Back -->
                    <a href="{{ route('produk') }}" class="inline-block w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-600 font-medium py-2 px-4 rounded-xl transition text-xs">
                        &larr; Back to Products
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script>
        function addToCart(productId) {
            fetch('/cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: 1
                })
            })
            .then(response => {
                if (response.ok) {
                    alert('Product added to cart!');
                } else {
                    alert('Failed to add product to cart.');
                }
            })
            .catch(error => {
                console.error('Error adding product to cart:', error);
                alert('Failed to add product to cart.');
            });
        }
    </script>
@endsection
