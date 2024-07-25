@extends('app')

@section('title')
<title>Home</title>
@endsection

@section('konten')
<!-- Hero Section -->
    <section class="bg-pink-100 py-20">
        <div class="container mx-auto px-40 flex flex-col md:flex-row items-center text-center md:text-left">
            <div class="md:w-1/2">
                <h1 class="text-5xl font-bold text-gray-800">
                Temukan Bouquet Impian Kamu Disini.
                </h1>
                <p class="mt-4 text-gray-600">
                Explore bucket menarik dari Latopia dengan bergabung bersama kami.
                </p>
                <button class="mt-8 px-8 py-3 bg-pink-500 text-white rounded-lg">
                LOGIN
                </button>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img
                src="img/cute-w.png"
                alt="Bouquet Image"
                class="max-w-xs h-auto"
                />
            </div>
        </div>
    </section>


    <section class="bg-pink-200 py-20">
            <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">
                Apa saja yang tersedia di Latopia Store?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="w-80 mx-auto">
                <img
                    src="img/cookies.jpg"
                    class="mx-auto mb-4 w-full h-80 object-cover rounded-2xl shadow-lg border-4 bg-white mt-8"
                    alt="Product 1"
                />
                </div>
                <div class="w-80 mx-auto">
                <img
                    src="img/flower-2.jpg"
                    class="mx-auto mb-4 w-full h-80 object-cover rounded-2xl shadow-lg border-4 bg-white mt-8"
                    alt="Product 2"
                />
                </div>
                <div class="w-80 mx-auto">
                <img
                    src="img/flower.jpg"
                    class="mx-auto mb-4 w-full h-80 object-cover rounded-2xl shadow-lg border-4 bg-white mt-8"
                    alt="Product 3"
                />
                </div>
                <div class="w-80 mx-auto">
                <img
                    src="img/hampers.jpg"
                    class="mx-auto mb-4 w-full h-80 object-cover rounded-2xl shadow-lg border-4 bg-white mt-8"
                    alt="Product 4"
                />
                </div>
            </div>
            <div class="max-w-3xl mx-auto">
                <p class="mt-4 text-gray-600">
                Latopia store menyediakan banyak pilihan menarik untuk kamu yang
                bingung memilih hadiah untuk orang tersayang. Salah satu hadiah cantik
                berupa bucket bunga yang menawan.
                </p>
                <button class="mt-8 px-8 py-3 bg-pink-500 text-white rounded-lg">
                SHOP NOW
                </button>
            </div>
            </div>
    </section>


    <!-- FAQ Section -->
    <section class="bg-pink-100 py-20">
        <div class="container mx-auto px-40 flex flex-col md:flex-row items-center text-center md:text-left">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Frequently Asked Questions</h2>
                <div class="mt-8">
                    <ul>
                        <li>
                            <button class="px-8 py-3 bg-pink-500 text-white rounded-lg mb-4">
                                Apa itu Latopia Store?
                            </button>

                        </li>
                        <li>
                            <button class="px-8 py-3 bg-pink-500 text-white rounded-lg mb-4">
                                Apa saja bunga yang ditawarkan?
                            </button>

                        </li>
                        <li>
                            <button class="px-8 py-3 bg-pink-500 text-white rounded-lg mb-4">
                                Apa saja jenis hampers di Latopia?
                            </button>

                        </li>
                        <li>
                            <button class="px-8 py-3 bg-pink-500 text-white rounded-lg mb-4">
                                Bagaimana cara memesan di Latopia Store?
                            </button>

                        </li>
                        <li>
                            <button class="px-8 py-3 bg-pink-500 text-white rounded-lg mb-4">
                                Apakah ada layanan pelanggan yang bisa dihubungi?
                            </button>
                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="img/3.png" alt="Bouquet Image" class="max-w-full h-auto"/>
            </div>
        </div>
    </section>
    

<!-- Quote Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Quote Of The Day</h2>
            <div class="container mx-auto text-center">
                <blockquote class="text-2xl italic mb-4 mt-12">"Jika saya mencoba yang terbaik dan gagal, setidaknya saya telah melakukan yang terbaik."</blockquote>
                <footer class="text-lg">- Steve Jobs</footer>
            </div>
        </div>
    </section>

<!-- Testimonials Section -->
    <section class="bg-pink-100 py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Testimoni</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <p class="text-gray-600">"Belanja disini gak pernah kecewa, selain pengirinya ramah produk mereka juga sempurna."</p>
                    <div class="mt-4 text-pink-500">Margareta S.</div>
                    <div class="mt-2 text-yellow-500">★★★★★</div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <p class="text-gray-600">"Sangat puas beli bucket atau hampers di toko ini karena penjualnya yang selalu memprioritaskan pembeli."</p>
                    <div class="mt-4 text-pink-500">Steven W.</div>
                    <div class="mt-2 text-yellow-500">★★★★★</div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <p class="text-gray-600">"Terima kasih seller barangnya sudah sampai dengan selamat dan next time bakal order lagi disini."</p>
                    <div class="mt-4 text-pink-500">Jasmine P.</div>
                    <div class="mt-2 text-yellow-500">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
    <footer class="bg-pink-500 py-8 text-white">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold mb-2">Customer Service</h3>
                <ul>
                    <li><a href="#" class="hover:underline">FAQ</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Return & Refunds</a></li>
                    <li><a href="#" class="hover:underline">Delivery Information</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Contact Us</h3>
                <p>Apakah kamu memiliki pertanyaan atau saran?</p>
                <p>Email: <a href="mailto:latopia@gmail.com" class="hover:underline">latopia@gmail.com</a></p>
                <p>Phone: +62 898-9898-9899</p>
                <div class="mt-2 space-x-4">
                    <a href="#" class="hover:underline">Instagram</a>
                    <a href="#" class="hover:underline">Twitter</a>
                    <a href="#" class="hover:underline">Facebook</a>
                </div>
            </div>
            <div>
                <h3 class="font-bold mb-2">Since 2021</h3>
                <p>"Kami berkomitmen untuk kepuasan pelanggan dan juga kualitas barang yang kami jual ke konsumen kami pastikan kualitas terbaik."</p>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p>&copy; 2024 by Latopia</p>
        </div>
    </footer>

@endsection