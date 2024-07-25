<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">

        {{-- <header class="bg-white shadow">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <div>
                        <img src="img/logolatopia.jpeg" alt="Logo" class="h-8">
                    </div>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-700 hover:text-pink-500">Home</a>
                        <a href="#" class="text-gray-700 hover:text-pink-500">About Us</a>
                        <a href="#" class="text-pink-500 font-semibold">Shop</a>
                        <a href="#" class="text-gray-700 hover:text-pink-500">Account</a>
                        <a href="#" class="text-gray-700 hover:text-pink-500">Chat</a>
                    </div>
                </div>
            </div>
        </header> --}}
    
        <main class="container mx-auto mt-10 px-6">
            <div class="flex justify-between">
                <div class="w-2/3">
                    <h2 class="text-2xl font-bold text-pink-600 mb-6">Cart</h2>
                    <div class="bg-white shadow rounded-lg mb-6">
                        <div class="flex items-center p-6">
                            <img src="img/bunga1.jpg" alt="Bouquet Flower" class="h-24 w-24 rounded">
                            <div class="ml-4 flex-1">
                                <h3 class="font-semibold text-lg">Bouquet Flower</h3>
    
                                <div class="flex items-center mt-2">
                                    <!-- Cart Table -->
                                    <tbody id="cartItems">
                                        <tr>
                                            <td class="py-2 px-4 border">
                                            <div class="flex items-center justify-center">
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, -1)">-</button>
                                                <input type="text" value="1" class="mx-2 w-12 text-center border rounded" readonly>
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, 1)">+</button>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
        
                                </div>
                            </div>
                            <span class="text-lg font-semibold">$50.00</span>
                        </div>
                    </div>

<script>
    function changeQuantity(button, change) {
            const quantityInput = button.parentElement.querySelector('input');
            let quantity = parseInt(quantityInput.value);
            quantity += change;
            if (quantity < 1) quantity = 1;
            quantityInput.value = quantity;

            const row = button.closest('tr');
            const price = parseFloat(row.children[2].textContent.replace('$', ''));
            const totalCell = row.children[4];
            const newTotal = price * quantity;
            totalCell.textContent = `$${newTotal.toFixed(2)}`;
        }
</script>






    
                    <div class="bg-white shadow rounded-lg mb-6">
                        <div class="flex items-center p-6">
                            <img src="img/foto1.jpg" alt="Money Bouquet" class="h-24 w-24 rounded">
                            <div class="ml-4 flex-1">
                                <h3 class="font-semibold text-lg">Money Bouquet</h3>
                                <div class="flex items-center mt-2">
                                    <!-- Cart Table -->
                                    <tbody id="cartItems">
                                        <tr>
                                            <td class="py-2 px-4 border">
                                            <div class="flex items-center justify-center">
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, -1)">-</button>
                                                <input type="text" value="1" class="mx-2 w-12 text-center border rounded" readonly>
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, 1)">+</button>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </div>
                            </div>
                            <span class="text-lg font-semibold">$50.00</span>
                        </div>
                    </div>


                    <div class="bg-white shadow rounded-lg">
                        <div class="flex items-center p-6">
                            <img src="img/bunga1.jpg" alt="Flower Bouquet" class="h-24 w-24 rounded">
                            <div class="ml-4 flex-1">
                                <h3 class="font-semibold text-lg">Flower Bouquet</h3>
                                <div class="flex items-center mt-2">
                                    <!-- Cart Table -->
                                    <tbody id="cartItems">
                                        <tr>
                                            <td class="py-2 px-4 border">
                                            <div class="flex items-center justify-center">
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, -1)">-</button>
                                                <input type="text" value="1" class="mx-2 w-12 text-center border rounded" readonly>
                                                <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, 1)">+</button>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </div>
                            </div>
                            <span class="text-lg font-semibold">$20.00</span>
                        </div>
                    </div>
                </div>


<!-- Kolom Samping -->
                <div class="w-1/3 bg-pink-50 p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold text-pink-600 mb-6">Order Quantity</h2>
                    <ul class="mb-6">
                        <li class="flex justify-between text-lg font-semibold mb-2">
                            <span>Bouquet Flower</span>
                            <span>$50.00</span>
                        </li>
                        <li class="flex justify-between text-lg font-semibold mb-2">
                            <span>
                                Money Flower</span>
                                <span>$50.00</span>
                            </li>
                        </ul>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Note :</h3>
                            <div class="bg-white p-4 rounded-lg shadow">
                                <p>Flower type: Red Rose</p>
                                <p>Wrapping type: Fabric Organza</p>
                                <p>Ribbon type: Satin Ribbon</p>
                            </div>
                        </div>
                        <div class="border-t pt-4">
                            <div class="flex justify-between text-lg font-semibold mb-2">
                                <span>Sub Total:</span>
                                <span>$100.00</span>
                            </div>
                            <div class="flex justify-between text-lg font-semibold mb-2">
                                <span>Taxes:</span>
                                <span>$5.00</span>
                            </div>
                            <div class="flex justify-between text-2xl font-bold mb-6">
                                <span>Total:</span>
                                <span>$105.00</span>
                            </div>
                            <a href={{route("payment")}}>
                                <button  class="w-full bg-pink-500 text-white py-3 rounded-lg text-lg font-semibold hover:bg-pink-600">Pay</button>
                            </a>
                        </div>
                    </div>
                </div>
            </main>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkoutForm = document.getElementById('checkout-form');
                let anyChecked = false;
                checkboxes.forEach(cb => {
                    if (cb.checked) {
                        anyChecked = true;
                    }
                });
                if (anyChecked) {
                    checkoutForm.classList.remove('hidden');
                } else {
                    checkoutForm.classList.add('hidden');
                }
            });
        });
    });


    // const productQuantity = parseInt(document.getElementById('productQuantity').value);

    // // Create table row
    // const tableRow = document.createElement('tr');
    //         tableRow.innerHTML = `
    //         <td class="py-2 px-4 border">
    //                 <div class="flex items-center justify-center">
    //                     <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, -1)">-</button>
    //                     <input type="text" value="${productQuantity}" class="mx-2 w-12 text-center border rounded" readonly>
    //                     <button class="bg-gray-200 px-2 py-1 rounded" onclick="changeQuantity(this, 1)">+</button>
    //                 </div>
    //         </td>
    //         `;


    // function changeQuantity(button, change) {
    //         const quantityInput = button.parentElement.querySelector('input');
    //         let quantity = parseInt(quantityInput.value);
    //         quantity += change;
    //         if (quantity < 1) quantity = 1;
    //         quantityInput.value = quantity;

    //         const row = button.closest('tr');
    //         const price = parseFloat(row.children[2].textContent.replace('$', ''));
    //         const totalCell = row.children[4];
    //         const newTotal = price * quantity;
    //         totalCell.textContent = `$${newTotal.toFixed(2)}`;
    //     }





{{-- Percobaan --}}
{{-- @extends("app");
@section("title")
    Cart
@endsection
@section("konten")
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Cart</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('landing')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            @if($cartItems->Count() > 0)
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)                                                   
                            <tr>
                                <td>
                                    <a href="">
                                        <img src="" class="blur-up lazyloaded" alt="{{$item->name}}">
                                    </a>
                                </td>
                                <td>
                                    <a href="">{{$item->name}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h2>${{$item->price}}</h2>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>${{$item->price}}</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" data-rowid="{{$item->rowId}}" class="form-control input-number" value="{{$item->qty}}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color"></h2>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" onclick="removeItemFromCart('{{$item->rowId}}')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>                       
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="javascript:void(0)" class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Sub Total <span>${{Cart::instance('cart')->subtotal()}}</span></h6>
                                            <h6>Tax <span>${{Cart::instance('cart')->tax()}}</span></h6>
                                            <h6>Total <span>${{Cart::instance('cart')->total()}}</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Your cart is empty !</h2>
                        <h5 class="mt-3">Add Items to it now.</h5>
                        <a href="" class="btn btn-warning mt-5">Shop Now</a>
                    </div>
                </div>
            @endif
        </div>



        <a href="javascript:void(0)"  onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
            <i class="fa fa-shopping-cart"></i>
            <span>Add To Cart</span>
            <form id="addtocart" method="post" action="">
                @csrf
                <input type="hidden" name="id" value="">                                             
                <input type="hidden" name="quantity" id="qty" value="1">
            </form>
        </a>
    </section>

@endsection --}}





{{-- PALING BARUU --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="py-5 bg-gray-100">
        {{-- <ul class="absolute inset-0 m-0 p-0 list-none">
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
            <li class="bg-white rounded-full w-10 h-10"></li>
        </ul> --}}
        
        {{-- <div class="container mx-auto">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-2xl font-bold">Cart</h3>
                    <nav>
                        <ol class="flex space-x-2">
                            <li class="breadcrumb-item">
                                <a href="{{route('landing')}}" class="text-gray-500 hover:text-gray-900">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active text-gray-900" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- Cart Section Start -->
    <section class="py-5">
        <div class="container mx-auto">
            @if($cartItems->Count() > 0)
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table-auto w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2">Image</th>
                                <th class="py-2">Product Name</th>
                                <th class="py-2">Price</th>
                                <th class="py-2">Quantity</th>
                                <th class="py-2">Total</th>
                                <th class="py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)                                                   
                            <tr>
                                <td class="py-2">
                                    <a href="">
                                        <img src="{{ asset("assets") }}" alt="{{$item->name}}" class="w-16 h-16 object-cover">
                                    </a>
                                </td>
                                <td class="py-2">
                                    <a href="" class="text-blue-500">{{$item->name}}</a>
                                    <div class="flex flex-col mt-2 md:hidden">
                                        <div class="flex items-center">
                                            <div class="flex-grow">
                                                <input type="text" name="quantity" class="w-full p-2 border rounded" value="1">
                                            </div>
                                        </div>
                                        <div class="flex items-center mt-2">
                                            <h2 class="text-gray-800">${{$item->price}}</h2>
                                            <button class="ml-auto text-red-500">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-2">
                                    <h2 class="text-gray-800">${{$item->price}}</h2>
                                </td>
                                <td class="py-2">
                                    <input type="number" name="quantity" data-rowid="{{$item->rowId}}" class="w-16 p-2 border rounded" value="{{$item->qty}}">
                                </td>
                                <td class="py-2">
                                    <h2 class="text-gray-800"></h2>
                                </td>
                                <td class="py-2">
                                    <button onclick="removeItemFromCart('{{$item->rowId}}')" class="text-red-500">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>                       
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-5">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <button class="text-blue-500 underline">Clear all items</button>
                        </div>
                        <div>
                            <a href="" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                <i class="fas fa-arrow-left"></i> Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <form class="flex space-x-2">
                                <input type="text" class="flex-grow p-2 border rounded" placeholder="Coupon Code">
                                <button class="btn btn-solid-default rounded">Apply Coupon</button>
                            </form>
                        </div>

                        <div class="text-center">
                            <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                Check Out <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>

                        <div>
                            <div class="p-4 bg-gray-100 rounded">
                                <h3 class="text-lg font-bold">Cart Totals</h3>
                                <div class="mt-2">
                                    <h6>Sub Total <span class="float-right">${{Cart::instance('cart')->subtotal()}}</span></h6>
                                    <h6>Tax <span class="float-right">${{Cart::instance('cart')->tax()}}</span></h6>
                                    <h6>Total <span class="float-right">${{Cart::instance('cart')->total()}}</span></h6>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="/resources/views/checkout.blade.php" class="btn btn-solid-default">Process Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-2xl font-bold">Your cart is empty!</h2>
                    <h5 class="mt-3">Add Items to it now.</h5>
                    <a href="" class="btn btn-warning mt-5">Shop Now</a>


                    {{-- <form action="/cart" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value={{ $product->id }}>
                        <button  type="submit" class="bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600">Add to Cart</button>
                    </form> --}}
                </div>
            </div>
            @endif
        </div>

        {{-- <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('addtocart').submit();" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
            <i class="fa fa-shopping-cart"></i>
            <span>Add To Cart</span>
            <form id="addtocart" method="post" action="">
                @csrf
                <input type="hidden" name="id" value="">                                             
                <input type="hidden" name="quantity" id="qty" value="1">
            </form>
        </a> --}}
    </section>
</body>
</html>

