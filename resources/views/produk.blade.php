@extends('app')

@section('title')
    <title>Home - Product</title>
@endsection

@section('konten')
  <section class="container mx-auto px-8 pt-28 pb-12">
    <h1 class="text-4xl font-semibold text-center text-pink-500 mb-8">Latopia Product</h1>

    <!-- Form Search yang terhubung ke Controller -->
    <form action="{{ route('produk') }}" method="GET" class="flex justify-center mb-8">
      @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <input type="text" name="search" value="{{ request('search') }}" placeholder="Search product..." class="border border-pink-300 focus:outline-none focus:ring-2 focus:ring-pink-400 rounded-full py-2 px-6 w-2/3 md:w-1/2 lg:w-1/3 bg-white shadow-sm">
    </form>

    <!-- Tombol Filter Kategori -->
    <div class="flex flex-wrap justify-center gap-3 mb-8">
      <a href="{{ route('produk') }}"
         class="{{ !$activeCategory ? 'bg-pink-500 text-white' : 'bg-pink-200 text-pink-600 hover:bg-pink-300' }} py-2 px-6 rounded-full font-medium transition">
         All
      </a>
      <a href="{{ route('produk', ['category' => 'bouquet']) }}"
         class="{{ $activeCategory == 'bouquet' ? 'bg-pink-500 text-white' : 'bg-pink-200 text-pink-600 hover:bg-pink-300' }} py-2 px-6 rounded-full font-medium transition">
         Bouquets
      </a>
      <a href="{{ route('produk', ['category' => 'hampers']) }}"
         class="{{ $activeCategory == 'hampers' ? 'bg-pink-500 text-white' : 'bg-pink-200 text-pink-600 hover:bg-pink-300' }} py-2 px-6 rounded-full font-medium transition">
         Hampers
      </a>
      <a href="{{ route('produk', ['category' => 'custom']) }}"
         class="{{ $activeCategory == 'custom' ? 'bg-pink-500 text-white' : 'bg-pink-200 text-pink-600 hover:bg-pink-300' }} py-2 px-6 rounded-full font-medium transition">
         Gift Custom
      </a>
    </div>

    <!-- Grid Produk -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      @forelse ($products as $product)
        <div class="bg-white p-4 rounded-xl shadow-md text-center flex flex-col justify-between hover:shadow-lg transition">
          <div>
            <img src="{{ asset('assets/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-56 object-cover rounded-lg mb-4">
            <h3 class="font-semibold text-xl text-gray-800 mb-2">{{ $product->name }}</h3>
          </div>
          <div class="mt-4">
            <a href="{{ url('/product/' . $product->id) }}" class="bg-pink-500 hover:bg-pink-600 text-white font-medium py-2 px-6 rounded-lg inline-block w-full transition">Shop Now</a>
          </div>
        </div>
      @empty
        <div class="col-span-full text-center py-12 text-gray-500">
          Produk untuk kategori ini belum ditemukan.
        </div>
      @endforelse
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-pink-500 py-8 text-white relative z-10 -mb-10">
    <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between gap-8">
      <div>
        <h3 class="text-lg font-bold mb-3">Customer Service</h3>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline opacity-90">FAQ</a></li>
          <li><a href="#" class="hover:underline opacity-90">Privacy Policy</a></li>
          <li><a href="#" class="hover:underline opacity-90">Return & Refunds</a></li>
          <li><a href="#" class="hover:underline opacity-90">Delivery Information</a></li>
        </ul>
      </div>
      <div class="mt-6 md:mt-0">
        <h3 class="text-lg font-bold mb-3">Contact Us</h3>
        <p class="opacity-90">Apakah kamu memiliki pertanyaan atau saran?</p>
        <p class="opacity-90 mt-1">Email: latopia@gmail.com</p>
        <p class="opacity-90">Phone: +62 898-9898-9899</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="hover:opacity-80"><i class="fab fa-instagram text-xl"></i></a>
          <a href="#" class="hover:opacity-80"><i class="fab fa-twitter text-xl"></i></a>
          <a href="#" class="hover:opacity-80"><i class="fab fa-facebook text-xl"></i></a>
        </div>
      </div>
      <div class="mt-6 md:mt-0 max-w-sm">
        <h3 class="text-lg font-bold mb-3">Since 2021</h3>
        <p class="opacity-90 leading-relaxed">“Kami berkomitmen untuk kepuasan pelanggan dan juga kualitas barang yang kami jual ke konsumen kami pastikan kualitas terbaik.”</p>
      </div>
    </div>
    <div class="text-center mt-8 pt-4 border-t border-pink-400 opacity-90">
      <p>Copyright @ 2024 by Latopia</p>
    </div>
  </footer>
@endsection
