@extends('app')

@section('title')
    <title>Custom Bouquet - Latopia</title>
@endsection

@section('konten')
    <div class="container mx-auto px-4 pt-10 pb-12">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl p-6 md:p-8 border border-pink-100 text-left">
            <h1 class="text-3xl font-bold text-pink-500 mb-6 border-b border-pink-100 pb-3">Custom Your Bouquet</h1>

            <!-- Flowers Type -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Flowers Type</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                    <div class="border-2 border-pink-500 bg-pink-50/50 p-2 rounded-xl text-center cursor-pointer transition hover:shadow-sm">
                        <img src="{{ asset('assets/Rose.jpg') }}" alt="Red Rose" class="w-full h-28 object-cover rounded-lg mb-2">
                        <p class="text-xs font-semibold text-pink-600">Red Rose</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/Tulip.jpg') }}" alt="White Tulip" class="w-full h-28 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">White Tulip</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/Krisan.jpg') }}" alt="Krisan" class="w-full h-28 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Krisan</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/Daisy.jpg') }}" alt="Daisy" class="w-full h-28 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Daisy</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/peony.jpg') }}" alt="Peony" class="w-full h-28 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Peony</p>
                    </div>
                </div>
            </div>

            <!-- Wrapping Type -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Wrapping Type</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                    <div class="border-2 border-pink-500 bg-pink-50/50 p-2 rounded-xl text-center cursor-pointer transition hover:shadow-sm">
                        <img src="{{ asset('assets/organza.jpg') }}" alt="Fabric Organza" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-semibold text-pink-600">Fabric Organza</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/tile.jpg') }}" alt="Fabric Tile" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Fabric Tile</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/spunbond.jpg') }}" alt="Fabric Spunbond" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Fabric Spunbond</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/jaring.jpg') }}" alt="Fabric Jaring" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Fabric Jaring</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/cellophane.jpg') }}" alt="Paper Cellophane" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Paper Cellophane</p>
                    </div>
                </div>
            </div>

            <!-- Ribbon Type -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Ribbon Type</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                    <div class="border-2 border-pink-500 bg-pink-50/50 p-2 rounded-xl text-center cursor-pointer transition hover:shadow-sm">
                        <img src="{{ asset('assets/satin_ribbon.jpg') }}" alt="Satin Ribbon" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-semibold text-pink-600">Satin Ribbon</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/organza_ribbon.jpg') }}" alt="Organza Ribbon" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Organza Ribbon</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/metalic_ribbon.jpg') }}" alt="Metallic Ribbon" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Metallic Ribbon</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/square_ribbon.jpg') }}" alt="Square Ribbon" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Square Ribbon</p>
                    </div>

                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <img src="{{ asset('assets/velvet_ribbon.jpg') }}" alt="Velvet Ribbon" class="w-full h-24 object-cover rounded-lg mb-2">
                        <p class="text-xs font-medium text-gray-700">Velvet Ribbon</p>
                    </div>
                </div>
            </div>

            <!-- Ribbon Color -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Ribbon Color</h2>
                <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-9 gap-2">
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-pink-400 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Pink</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-gray-900 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Black</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-white mx-auto mb-1 border border-gray-300 shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">White</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-red-500 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Red</p>
                    </div>
                    <div class="border-2 border-pink-500 bg-pink-50/50 p-2 rounded-xl text-center cursor-pointer transition">
                        <div class="w-8 h-8 rounded-full bg-blue-500 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-semibold text-pink-600">Blue</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-gray-400 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Grey</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-green-500 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Green</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-yellow-400 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Yellow</p>
                    </div>
                    <div class="border border-gray-200 p-2 rounded-xl text-center cursor-pointer hover:border-pink-300 transition">
                        <div class="w-8 h-8 rounded-full bg-purple-500 mx-auto mb-1 border shadow-sm"></div>
                        <p class="text-[10px] font-medium text-gray-700">Purple</p>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                <a href="{{ route('produk') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-6 rounded-xl transition text-sm">
                    &larr; Back
                </a>

                <form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id ?? 1 }}">
                    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2.5 px-6 rounded-xl shadow-md transition text-sm flex items-center gap-2">
                        <i class="fas fa-shopping-cart text-xs"></i> Add to Cart
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
