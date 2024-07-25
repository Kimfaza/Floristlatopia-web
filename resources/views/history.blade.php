<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{asset('img/logolatopia.jpg')}}" type="gambar/tipe ikon">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100"">
    @extends('app')

        <!-- Navbar -->
        <nav class="bg-white shadow-lg">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <div>
                    <img src="img/logo.png" alt="Latopia Store Logo" class="h-10">
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">About Us</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Shop</a>
                    <a href="#" class="text-pink-600 hover:text-pink-500 font-bold">Account</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Chat</a>
                </div>
            </div>
        </nav>
    
        <!-- Main Content -->
        <div class="max-w-3xl mx-auto mt-8 bg-white shadow-md rounded-lg">
            <div class="flex h-full">
                <!-- Sidebar -->
                <div class="w-1/4 bg-pink-200 p-6">
                    <ul class="space-y-4 mt-10">
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 1112.87 6.196M15 21l-2-2-2 2m2-6v6"></path>
                                </svg>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v16a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm16 0v16M3 4l6 6"></path>
                                </svg>
                                Upload Product
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V4H7v5M3 13h1l2 9h12l2-9h1M3 13h18"></path>
                                </svg>
                                Wallet
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 10l5 5 5-5M12 15V9"></path>
                                </svg>
                                Transactions
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1 0V7m0 9h.01m6.938 4.938a1.5 1.5 0 01-2.121 0l-1.366-1.366a8.001 8.001 0 01-11.314 0l-1.366 1.366a1.5 1.5 0 11-2.121-2.121l1.366-1.366a8.001 8.001 0 010-11.314l-1.366-1.366a1.5 1.5 0 012.121-2.121l1.366 1.366a8.001 8.001 0 0111.314 0l1.366-1.366a1.5 1.5 0 112.121 2.121l-1.366 1.366a8.001 8.001 0 010 11.314l1.366 1.366a1.5 1.5 0 010 2.121z"></path>
                                </svg>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 12V9m0 3v3m6-3v-3m0 3v3m6-6V6m0 0V4a1 1 0 00-1-1H4a1 1 0 00-1 1v2m18 0h-4M3 18h4m1 2h10a1 1 0 001-1v-1H4v1a1 1 0 001 1zM6 10v8a2 2 0 002 2h8a2 2 0 002-2v-8H6zm5-4h2"></path>
                                </svg>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18V6a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H8a2 2 0 01-2-2z"></path>
                                </svg>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Profile Content -->
                <div class="w-full bg-white p-6">
                    <div class="flex items-center space-x-4 mb-6">
                        <img src="img/logo.png" alt="Profile Image" class="w-24 h-24 rounded-full object-cover">
                        <div>
                            <button class="px-4 py-2 bg-pink-500 text-white rounded-lg">Upload Image</button>
                            <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Delete Image</button>
                        </div>
                    </div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input id="full_name" name="full_name" type="text" autocomplete="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input id="email" name="email" type="email" autocomplete="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="handphone" class="block text-sm font-medium text-gray-700">Handphone</label>
                            <input id="handphone" name="handphone" type="text" autocomplete="tel" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="px-4 py-2 bg-pink-500 text-white rounded-lg">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
