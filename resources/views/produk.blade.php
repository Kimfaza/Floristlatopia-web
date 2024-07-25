<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://unpkg.com/@heroicons/react@1.0.6/outline">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{asset('img/logolatopia.jpg')}}" type="gambar/tipe ikon">
    <style>
        .icon-overlay {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .image-container:hover .icon-overlay {
            display: block;
        }
    </style>
</head>

@extends('app')

@section('konten')
<body class="bg-white text-gray-800">
  <!-- Shop Section -->
  <section class="container mx-auto p-8">
    <h1 class="text-4xl font-semibold text-center text-pink-500 mb-8">Latopia Product</h1>
    <div class="flex justify-center mb-8">
      <input type="text" placeholder="Search" class="border rounded-full py-2 px-4 w-2/3 md:w-1/2 lg:w-1/3">
    </div>
    <div class="flex justify-center space-x-4 mb-8">
      <button class="bg-pink-500 text-white py-2 px-4 rounded-full">Bouquets</button>
      <button class="bg-pink-200 text-pink-500 py-2 px-4 rounded-full">Hampers</button>
      <button class="bg-pink-200 text-pink-500 py-2 px-4 rounded-full">Gift Custom</button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach ($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
          <img src={{ asset("assets") . "/" . $product->image }} alt="Flower Bouquet" class="mb-2">
          <h3 class="font-semibold text-2xl">{{ $product->name }}</h3>
          <div class="mt-4">
            <a href={{ url("/product/" . $product->id ) }} class="bg-pink-500 text-white py-2 px-4 rounded mt-4">Shop Now</a>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-pink-200 py-8">
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
        <p>“Kami berkomitmen untuk kepuasan pelanggan dan juga kualitas barang yang kami jual ke konsumen kami pastikan kualitas terbaik.”</p>
      </div>
    </div>
    <div class="text-center mt-8">
      <p>Copyright @ 2024 by Latopia</p>
    </div>
  </footer>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>