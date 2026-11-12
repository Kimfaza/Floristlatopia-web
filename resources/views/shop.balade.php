<!-- resources/views/shop.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <!-- Tambahkan styling CSS Anda di sini -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/shop') }}" class="active">Shop</a>
                <a href="{{ url('/account') }}">Account</a>
                <a href="{{ url('/chat') }}">Chat</a>
            </nav>
        </header>

        <main>
            <div class="product">
                <img src="{{ asset('images/flower-bouquet.jpg') }}" alt="Flower Bouquet">
                <div class="product-details">
                    <h2>Flower Bouquet</h2>
                    <p>Terdapat beberapa pilihan bunga dan dekorasi yang dapat dipilih sesuai keinginan.</p>
                    <h3>$20.00</h3>

                    <form action="{{ route('add.to.cart') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-custom">Add to Cart</button>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2024 Flower Shop. All rights reserved.</p>
        </footer>
    </div>

    <!-- Tambahkan JavaScript Anda di sini -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
