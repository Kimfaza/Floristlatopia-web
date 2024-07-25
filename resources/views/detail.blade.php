@extends('app')

@section('title')
<title>Detail Produk</title>
@endsection

@section('konten')
<body class="bg-gray-100">

    {{-- <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="./assets/logolatopia.jpeg" alt="Logo">
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-900 font-medium hover:text-pink-500">Home</a>
                    <a href="#" class="text-gray-900 font-medium hover:text-pink-500">About Us</a>
                    <a href="#" class="text-gray-900 font-medium hover:text-pink-500">Shop</a>
                    <a href="#" class="text-gray-900 font-medium hover:text-pink-500">Account</a>
                    <a href="#" class="text-gray-900 font-medium hover:text-pink-500">Chat</a>
                </div>
            </div>
        </div>
    </nav> --}}

    <!-- Main Content -->
    <div class="max-w-3xl mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold text-pink-500 mb-6">Custom Your Bouquet</h1>

        <!-- Flowers Type -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Flowers Type</h2>
            <div class="grid grid-cols-5 gap-4">
                <div class="border-2 border-pink-500 p-2 rounded-lg">                    
                    <div class="w-full h-40">
                        <img src={{ asset("assets") . "/" . $product->image }} alt="Red Rose" class="object-cover w-full h-full rounded-lg">
                        <p class="text-center mt-2">Red Rose</p>
                        <div class="mt-4">
                        <a href={{ url( $product->id ) }} class="bg-pink-500 text-white py-2 px-4 rounded mt-4"></a>
                        </div>
                    </div>                    
                </div>
                
                <div class="p-2 rounded-lg">
                    <div class="w-full h-40">
                        <img src={{ asset("assets") . "/" . $product->image }} alt="White Tulip" class="object-cover w-full h-full rounded-lg">
                        <p class="text-center mt-2">White Tulip</p>
                        <div class="mt-4">
                        <a href={{ url( $product->id ) }} class="bg-pink-500 text-white py-2 px-4 rounded mt-4"></a>
                        </div>
                    </div>                  
                    
                </div>
                <div class="p-2 rounded-lg">
                    <div class="w-full h-40">
                        <img src="/public/assets/krisan.jpg" alt="Krisan" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <p class="text-center mt-2">Krisan</p>
                </div>
                <div class="p-2 rounded-lg">
                    <div class="w-full h-40">
                        <img src="/public/assets/daisy2.jpg" alt="Daisy" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <p class="text-center mt-2">Daisy</p>
                </div>
                <div class="p-2 rounded-lg">
                    <div class="w-full h-40">
                        <img src="/public/assets/peony.jpg" alt="Peony" class="object-cover w-full h-full rounded-lg">
                    </div>
                    <p class="text-center mt-2">Peony</p>
                </div>

<!-- Wrapping Type -->
<div class="mb-6">
    <h2 class="text-xl font-semibold mb-2">Wrapping Type</h2>
    <div class="grid grid-cols-6 gap-4">
        <div class="border-2 border-pink-500 p-2 rounded-lg">
            <img src="/public/assets/wrap1.jpg" alt="Fabric Organza" class="w-full h-auto">
            <p class="text-center mt-2">Fabric Organza</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/wrap2.jpg" alt="Fabric Tile" class="w-full h-auto">
            <p class="text-center mt-2">Fabric Tile</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/wrap3.jpg" alt="Fabric Spunbond" class="w-full h-auto">
            <p class="text-center mt-2">Fabric Spunbond</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/wrap4.jpg" alt="Fabric Jaring" class="w-full h-auto">
            <p class="text-center mt-2">Fabric Jaring</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/wrap5.jpg" alt="Paper Cellophane" class="w-full h-auto">
            <p class="text-center mt-2">Paper Cellophane</p>
        </div>
    </div>
</div>

<!-- Ribbon Type -->
<div class="mb-6">
    <h2 class="text-xl font-semibold mb-2">Ribbon Type</h2>
    <div class="grid grid-cols-6 gap-4">
        <div class="border-2 border-pink-500 p-2 rounded-lg">
            <img src="/public/assets/ribbon1.jpg" alt="Satin Ribbon" class="w-full h-auto">
            <p class="text-center mt-2">Satin Ribbon</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/ribbon2.jpg" alt="Organza Ribbon" class="w-full h-auto">
            <p class="text-center mt-2">Organza Ribbon</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/ribbon3.jpg" alt="Metallic Ribbon" class="w-full h-auto">
            <p class="text-center mt-2">Metallic Ribbon</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/ribbon4.jpg" alt="Square Ribbon" class="w-full h-auto">
            <p class="text-center mt-2">Square Ribbon</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/ribbon5.jpg" alt="Velvet Ribbon" class="w-full h-auto">
            <p class="text-center mt-2">Velvet Ribbon</p>
        </div>
    </div>
</div>

<!-- Ribbon Color -->
<div class="mb-6">
    <h2 class="text-xl font-semibold mb-2">Ribbon Color</h2>
    <div class="grid grid-cols-10 gap-4">
        <div class="p-2 rounded-lg">
            <img src="/public/assets/pink.jpg" alt="Pink" class="w-full h-auto">
            <p class="text-center mt-2">Pink</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/black.jpg" alt="Black" class="w-full h-auto">
            <p class="text-center mt-2">Black</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/white.jpg" alt="White" class="w-full h-auto">
            <p class="text-center mt-2">White</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/red.jpg" alt="Red" class="w-full h-auto">
            <p class="text-center mt-2">Red</p>
        </div>
        <div class="border-2 border-pink-500 p-2 rounded-lg text-center">
            <img src="/public/assets/blue.jpg" alt="Blue" class="w-full h-auto">
            <p class="text-center mt-2">Blue</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/grey.jpg" alt="Grey" class="w-full h-auto">
            <p class="text-center mt-2">Grey</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/green.jpg" alt="Green" class="w-full h-auto">
            <p class="text-center mt-2">Green</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/yellow.jpg" alt="Yellow" class="w-full h-auto">
            <p class="text-center mt-2">Yellow</p>
        </div>
        <div class="p-2 rounded-lg">
            <img src="/public/assets/purple.jpg" alt="Purple" class="w-full h-auto">
            <p class="text-center mt-2">Purple</p>
        </div>
    </div>
</div>

<!-- Buttons -->
<div class="flex justify-between">
    <button class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600">Back</button>
    <button class="bg-pink-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-pink-600">Add to Cart</button>
</div>
</div>

</body>

@endsection