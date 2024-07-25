<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{asset('img/logolatopia.jpg')}}" type="gambar/tipe ikon">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <!-- register start -->
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="w-full flex-1 p-8">
            <img src="img/registerfoto.png" alt="Bouquet Image" class="object-cover">
        </div>
        <div class="w-1/2 p-8 bg-pink-200">
            <form class="w-full space-y-4 p-4" action="/register" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mt-5">Name</label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" autocomplete="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>
                </div><br>
                <div>
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">REGISTER</button>
                </div>
                <div class="text-sm text-center">
                    <h4>Already have an account? <a href="/login" class="font-medium text-pink-600 hover:text-pink-500">Login Here</a></h4>
                </div>
            </form>
        </div>
    </div>
    <!-- register end -->
</body>

</html>
