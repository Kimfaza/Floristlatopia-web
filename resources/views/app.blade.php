<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="icon" href="{{ asset('assets/logolatopia.jpg') }}" type="image/png">
  @yield('title')

  <style>
      .hidden-1 {
          opacity: 0;
          transform: translateY(20px);
          transition: opacity 0.5s, transform 0.5s;
      }
      .visible-1 {
          opacity: 1;
          transform: translateY(0);
      }
  </style>
</head>

<body class="bg-white text-gray-800 antialiased">
    <!-- Fixed Navbar -->
    <header class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-md border-b border-pink-100 shadow-sm">
        <nav class="container mx-auto px-4 md:px-8 h-20 flex items-center justify-between gap-4" aria-label="Global">

            <!-- 1. Brand Logo -->
            <a href="{{ route('landing') }}" class="flex items-center gap-2.5 shrink-0">
                <img class="h-10 w-10 rounded-full object-cover border border-pink-200" src="{{ asset('assets/logolatopia.jpg') }}" alt="Latopia Logo">
                <span class="text-xl font-bold tracking-tight text-pink-600">Latopia</span>
            </a>

            <!-- 2. Menu Navigasi Tengah (Desktop) -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="{{ route('landing') }}" class="text-sm font-semibold transition {{ request()->routeIs('landing') ? 'text-pink-600' : 'text-gray-700 hover:text-pink-500' }}">
                    Home
                </a>
                <a href="{{ route('contact') }}" class="text-sm font-semibold transition {{ request()->routeIs('contact') ? 'text-pink-600' : 'text-gray-700 hover:text-pink-500' }}">
                    About Us
                </a>
                <a href="{{ route('produk') }}" class="text-sm font-semibold transition {{ request()->routeIs('produk') ? 'text-pink-600' : 'text-gray-700 hover:text-pink-500' }}">
                    Product
                </a>
                <a href="{{ route('history') }}" class="text-sm font-semibold transition {{ request()->routeIs('history') ? 'text-pink-600' : 'text-gray-700 hover:text-pink-500' }}">
                    Account
                </a>
            </div>

            <!-- 3. Search Bar, Ikon Cart/Chat & Auth Buttons -->
            <div class="flex items-center gap-3 md:gap-5">

                <!-- Form Search Terhubung ke Halaman Produk -->
                <form action="{{ route('produk') }}" method="GET" class="hidden sm:block relative w-44 md:w-56">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                        <i class="fas fa-search text-xs text-pink-400"></i>
                    </div>
                    <input type="search" name="search" value="{{ request('search') }}" class="block w-full py-2 pl-9 pr-4 text-xs text-gray-800 bg-pink-50/60 border border-pink-200 rounded-full focus:outline-none focus:ring-2 focus:ring-pink-400 focus:bg-white transition" placeholder="Search bouquet...">
                </form>

                <!-- Ikon Cart & Chat -->
                <div class="flex items-center gap-4">
                    @php
                        $cartCount = Auth::check() ? \App\Models\Cart::where('user_id', Auth::id())->sum('quantity') : 0;
                    @endphp

                    <!-- Cart Icon + Badge Dinamis -->
                    <a href="{{ route('cart') }}" class="relative p-2 text-gray-700 hover:text-pink-600 transition" title="Shopping Cart">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        @if($cartCount > 0)
                            <span class="absolute top-0 right-0 bg-pink-500 text-white text-[10px] font-bold rounded-full h-4 w-4 flex items-center justify-center shadow-sm">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>

                    <!-- Chat Icon -->
                    <a href="{{ route('chat') }}" class="p-2 text-gray-700 hover:text-pink-600 transition" title="Chat">
                        <i class="fas fa-comment-dots text-lg"></i>
                    </a>
                </div>

                <!-- Tombol Login / Register / Logout (Desktop) -->
                <div class="hidden lg:flex items-center gap-2.5 pl-2 border-l border-gray-200">
                    @if(Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-xs font-semibold text-pink-600 border border-pink-400 hover:bg-pink-500 hover:text-white rounded-full py-2 px-5 transition">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-xs font-semibold text-pink-600 border border-pink-400 hover:bg-pink-50 rounded-full py-2 px-5 transition">
                            Log in
                        </a>
                        <a href="{{ route('register') }}" class="text-xs font-semibold text-white bg-pink-500 hover:bg-pink-600 rounded-full py-2 px-5 shadow-sm transition">
                            Register
                        </a>
                    @endif
                </div>

                <!-- Tombol Hamburger Menu (Mobile) -->
                <button type="button" onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-pink-50 hover:text-pink-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>

        <!-- Dropdown Menu Mobile -->
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-pink-100 px-6 py-4 space-y-3 shadow-lg">
            <form action="{{ route('produk') }}" method="GET" class="sm:hidden relative mb-3">
                <input type="search" name="search" value="{{ request('search') }}" class="block w-full py-2 pl-4 pr-10 text-xs text-gray-800 bg-pink-50 border border-pink-200 rounded-full focus:outline-none" placeholder="Search bouquet...">
                <button type="submit" class="absolute inset-y-0 right-3 flex items-center text-pink-500">
                    <i class="fas fa-search text-xs"></i>
                </button>
            </form>

            <div class="flex flex-col space-y-2 text-sm font-semibold">
                <a href="{{ route('landing') }}" class="py-1.5 {{ request()->routeIs('landing') ? 'text-pink-600' : 'text-gray-700' }}">Home</a>
                <a href="{{ route('contact') }}" class="py-1.5 {{ request()->routeIs('contact') ? 'text-pink-600' : 'text-gray-700' }}">About Us</a>
                <a href="{{ route('produk') }}" class="py-1.5 {{ request()->routeIs('produk') ? 'text-pink-600' : 'text-gray-700' }}">Product</a>
                <a href="{{ route('history') }}" class="py-1.5 {{ request()->routeIs('history') ? 'text-pink-600' : 'text-gray-700' }}">Account</a>
            </div>

            <div class="pt-3 border-t border-gray-100 flex gap-3">
                @if(Auth::check())
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit" class="w-full text-center text-xs font-semibold text-pink-600 border border-pink-400 rounded-full py-2">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="flex-1 text-center text-xs font-semibold text-pink-600 border border-pink-400 rounded-full py-2">Log in</a>
                    <a href="{{ route('register') }}" class="flex-1 text-center text-xs font-semibold text-white bg-pink-500 rounded-full py-2">Register</a>
                @endif
            </div>
        </div>
    </header>

    <!-- Konten Utama -->
    <div class="relative isolate pt-20">
        <!-- Top Blur Effect -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="w-full">
            @yield('konten')
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
