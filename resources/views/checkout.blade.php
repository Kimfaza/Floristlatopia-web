@extends('app')

@section('title')
    <title>Product </title>
@endsection

@section('konten')
<!-- Main Content -->
<main class="container mx-auto mt-10 flex justify-between space-x-6">
    <!-- Payment Section -->
    <section class="w-1/2 bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Payment</h2>
        <form>
            <div class="mb-6">
                <label class="flex items-center mb-4">
                    <input type="radio" name="payment-method" value="dana" class="mr-2">
                    <span>Dana</span>
                    <img src="img/dana.png" alt="Dana" class="ml-2 h-6">
                </label>
                <label class="flex items-center mb-4">
                    <input type="radio" name="payment-method" value="cod" class="mr-2">
                    <span>COD</span>
                </label>
            </div>
            <div class="mb-6">
                <label class="flex items-center mb-4">
                    <input type="radio" name="payment-method" value="bri" class="mr-2">
                    <span>BRI</span>
                    <img src="img/bri.png" alt="BRI" class="ml-2 h-6">
                </label>
                <div class="ml-8">
                    <div class="mb-4">
                        <label class="block mb-2">Name on Card</label>
                        <input type="text" name="card-name" class="w-full border p-2 rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2">Card Number</label>
                        <input type="text" name="card-number" class="w-full border p-2 rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2">Expiration</label>
                        <input type="text" name="expiration" class="w-full border p-2 rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2">Card Code</label>
                        <input type="text" name="card-code" class="w-full border p-2 rounded-lg">
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <p class="mb-2">Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman</p>
                <button type="button" class="bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600">Edit</button>
            </div>
        </form>
    </section>

    <!-- Order Summary Section -->
    <section class="w-1/2 bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-6">Order Quantity</h2>
        <ul class="mb-6">
            <li class="mb-4">Bouquet Flower - $50.00</li>
            <li class="mb-4">Money Flower - $50.00</li>
        </ul>
        <div class="mb-6">
            <p class="mb-2">Subtotal: $100.00</p>
            <p class="mb-2">Discount: $0.00</p>
            <p class="mb-2">Taxes: $5.00</p>
            <p class="mb-2 font-semibold">Total Cost: $105.00</p>
        </div>
        <button type="button" class="bg-pink-500 text-white py-2 px-4 w-full rounded-lg hover:bg-pink-600">Pay</button>
    </section>
</main>



@endsection





