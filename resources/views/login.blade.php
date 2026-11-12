<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login - Latopia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{ asset('assets/logolatopia.png') }}" type="image/png">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <!-- Card Container -->
    <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-xl overflow-hidden max-w-4xl w-full">

        <div class="w-full md:w-1/2 h-64 md:h-auto">
            <img src="{{ asset('assets/login.jpg') }}" alt="Bouquet Image" class="w-full h-full object-cover">
        </div>

        <!-- Form Login -->
        <div class="w-full md:w-1/2 p-8 md:p-12 bg-pink-100 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-pink-600 mb-6 text-center">Welcome Back!</h2>

            <!-- Notifikasi Sukses Register -->
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2.5 rounded-lg text-xs text-center">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Notifikasi Error Login -->
            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2.5 rounded-lg text-xs text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form class="space-y-4" action="/login" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                    <div class="text-right mt-1">
                        <a href="#" class="text-xs font-medium text-pink-600 hover:text-pink-500">Forgot the password?</a>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-pink-500 hover:bg-pink-600 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">LOGIN</button>
                </div>

                <div class="text-xs text-center text-gray-600 mt-4">
                    Don't have an account yet? <a href="/register" class="font-semibold text-pink-600 hover:text-pink-500">Register</a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
