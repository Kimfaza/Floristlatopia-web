@extends('app')

@section('title')
    <title>Product</title>
@endsection

@section('konten')
    <!-- Product Section -->
    <div class="max-w-3xl mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">
        <div class="flex justify-start">
            <img src={{ asset("assets") . "/" . $product->image }} alt="Flower Bouquet" class="w-1/3 rounded-lg">
            <div class="ml-6 text-start">
                <h1 class="text-2xl font-bold text-pink-500">{{ $product->name }}</h1>
                <p class="mt-2 text-gray-600">{{ $product->description }}</p>
                <p class="mt-2 text-xl text-gray-900">Rp {{ $product->price }}</p>
                <div class="mt-4">
                    <a href={{route("detail")}}>
                        <button class="bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600">Custom</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-between">
            <button class="bg-pink-300 text-white-700 py-2 px-4 rounded-lg hover:bg-pink-400">Back</button>
            <form action="/cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value={{ $product->id }}>
                <button  type="submit" class="bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600">Add to Cart</button>
            </form>
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





