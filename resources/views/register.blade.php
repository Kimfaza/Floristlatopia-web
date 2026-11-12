<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register - Latopia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{ asset('assets/logolatopia.png') }}" type="image/png">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <!-- Card Container -->
    <div class="flex flex-col md:flex-row bg-white rounded-2xl shadow-xl overflow-hidden max-w-4xl w-full">

        <div class="w-full md:w-1/2 h-64 md:h-auto">
            <img src="{{ asset('assets/register.jpg') }}" alt="Register Image" class="w-full h-full object-cover">
        </div>

        <!-- Form Register -->
        <div class="w-full md:w-1/2 p-6 md:p-10 bg-pink-100 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-pink-600 mb-4 text-center">Create Account</h2>

            <form class="space-y-3" action="/register" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-sm bg-white">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-2.5 px-4 border border-transparent rounded-lg shadow-sm text-sm font-semibold text-white bg-pink-500 hover:bg-pink-600 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">REGISTER</button>
                </div>

                <div class="text-xs text-center text-gray-600 mt-3">
                    Already have an account? <a href="/login" class="font-semibold text-pink-600 hover:text-pink-500">Login Here</a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
