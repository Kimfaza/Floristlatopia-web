@extends('app')

@section('title')
    <title>Product</title>
@endsection

@section('konten')
    <!-- About Us -->
  <section class="container mx-auto p-8">
    <h1 class="text-4xl font-semibold text-center text-pink-500 mb-8">About Us</h1>
    <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
      <div class="w-full lg:w-1/3">
        <img src="img/fotoabout.jpg" alt="About Us Image" class="rounded-lg shadow-lg">
      </div>
      <div class="w-full lg:w-2/3 mt-8 lg:mt-0">
        <p class="text-lg leading-relaxed">
          Latopia didirikan pada akhir 2021, usaha ini telah menjadi destinasi utama untuk pelanggan yang mencari keindahan dalam bentuk buket kreatif. Usaha ini menghadirkan beragam pilihan yang dapat dipesan, mencakup buket wisuda, buket pernikahan, ataupun buket untuk hadiah.
        </p>
        <p class="text-lg leading-relaxed mt-4">
          Latopia juga menghadirkan layanan buket by request, yang memberikan customer kebebasan untuk mengekspresikan kreativitas dan preferensi mereka sendiri. Dari kombinasi bunga eksklusif hingga gabungan unik dari bunga dan snack, buket by request memungkinkan pelanggan untuk menciptakan hadiah yang benar-benar personal dan bermakna. Dengan komitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan produk berkualitas, Latopia tidak hanya menjadi tempat untuk mendapatkan buket yang cantik, tetapi juga merupakan pilihan terbaik untuk mengabadikan momen-momen spesial dengan sentuhan keindahan yang unik.
        </p>
      </div>
    </div>
  </section>

  <!-- List Flowers -->
  <section class="bg-pink-100 py-8">
    <div class="container mx-auto">
      <h2 class="text-3xl font-semibold text-center text-pink-500 mb-8">List Flowers</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/Rose.jpg" alt="Red Rose" class="mb-2">
          <h3 class="font-semibold">Red Rose</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/Tulip.jpg" alt="White Tulip" class="mb-2">
          <h3 class="font-semibold">White Tulip</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/Krisan.jpg" alt="Krisan" class="mb-2">
          <h3 class="font-semibold">Krisan</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/Daisy.jpg" alt="Daisy" class="mb-2">
          <h3 class="font-semibold">Daisy</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- List Hampers -->
  <section class="py-8">
    <div class="container mx-auto">
      <h2 class="text-3xl font-semibold text-center text-pink-500 mb-8">List Hampers</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/mug.jpg" alt="Mug" class="mb-2">
          <h3 class="font-semibold">Mug</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/doll.jpg" alt="Doll" class="mb-2">
          <h3 class="font-semibold">Doll</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/skincare.jpg" alt="Skincare" class="mb-2">
          <h3 class="font-semibold">Skincare</h3>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/mat-prayer.jpg" alt="Mat Prayer" class="mb-2">
          <h3 class="font-semibold">Mat Prayer</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Best Seller -->
  <section class="bg-pink-100 py-8">
    <div class="container mx-auto">
      <h2 class="text-3xl font-semibold text-center text-pink-500 mb-8">Best Seller</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/Flowers-bouquet.jpg" alt="Flower Bouquet" class="mb-2">
          <h3 class="font-semibold">Flower Bouquet</h3>
          <button class="bg-pink-500 text-white py-2 px-4 rounded mt-4"><a href=""></a>Shop Now</button>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/money.jpg" alt="Money Bucket" class="mb-2">
          <h3 class="font-semibold">Money Bucket</h3>
          <button class="bg-pink-500 text-white py-2 px-4 rounded mt-4">Shop Now</button>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/hampers1.jpg" alt="Hampers" class="mb-2">
          <h3 class="font-semibold">Hampers</h3>
          <button class="bg-pink-500 text-white py-2 px-4 rounded mt-4">Shop Now</button>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src="img/hampers2.jpg" alt="Hampers" class="mb-2">
          <h3 class="font-semibold">Hampers</h3>
          <button class="bg-pink-500 text-white py-2 px-4 rounded mt-4">Shop Now</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-100 py-8 px-10">
    <div class="container mx-auto flex flex-col md:flex-row justify-between">
      <div>
        <h3 class="text-lg font-semibold mb-2">Customer Service</h3>
        <ul>
          <li><a href="#" class="text-gray-600 hover:text-pink-500">FAQ</a></li>
          <li><a href="#" class="text-gray-600 hover:text-pink-500">Privacy Policy</a></li>
          <li><a href="#" class="text-gray-600 hover:text-pink-500">Return & Refunds</a></li>
          <li><a href="#" class="text-gray-600 hover:text-pink-500">Delivery Information</a></li>
        </ul>
      </div>

      <div class="mt-8 md:mt-0">
        <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
        <p>Apakah kamu memiliki pertanyaan atau saran?</p>
        <p>Email: latopia@gmail.com</p>
        <p>Phone: +62 898-9898-9899</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-gray-600 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-600 hover:text-pink-500"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-gray-600 hover:text-pink-500"><i class="fab fa-facebook"></i></a>
        </div>
      </div>

      <div class="mt-8 md:mt-0">
        <h3 class="text-lg font-semibold mb-2">Since 2021</h3>
        <p>“Kami berkomitmen untuk kepuasan pelanggan dan juga kualitas <br> barang yang kami jual ke konsumen kami pastikan kualitas terbaik.”</p>
      </div>
    </div>
    <div class="text-center mt-8">
      <p>Copyright @ 2024 by Latopia</p>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    @endsection
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





