<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Chat Support - Latopia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{ asset('assets/logolatopia.png') }}" type="image/png">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4 md:p-8">

    <!-- Container Utama -->
    <main class="container mx-auto max-w-6xl">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 bg-white p-6 md:p-10 rounded-3xl shadow-xl">

            <!-- Banner Hero -->
            <div class="w-full lg:w-1/2 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                    Temukan Bouquet Impian Kamu Disini
                </h1>
                <p class="text-gray-600 mb-6 text-base md:text-lg">
                    Explore bouquet menarik dari Latopia dengan bergabung bersama kami.
                </p>

                <a href="{{ route('landing') }}" class="inline-flex items-center gap-2 bg-pink-500 text-white py-2.5 px-6 rounded-lg text-base font-semibold hover:bg-pink-600 transition shadow-md">
                    <i class="fas fa-arrow-left text-sm"></i> Back
                </a>

                <div class="mt-8 flex justify-center lg:justify-start">
                    <img src="{{ asset('assets/chat.jpg') }}" alt="Bouquet Latopia" class="w-full max-w-sm h-64 object-cover rounded-2xl shadow-md border-4 border-pink-50">
                </div>
            </div>

            <!-- Widget Live Chat -->
            <div class="w-full lg:w-96 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                <!-- Header Chat -->
                <div class="bg-pink-500 text-white px-5 py-4 flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <h2 class="text-lg font-bold">Latopia CS Live</h2>
                    </div>
                    <button class="text-white hover:text-pink-200 text-xl font-bold transition" onclick="toggleChat()" title="Minimize Chat">&times;</button>
                </div>

                <!-- Body Chat -->
                <div id="chatBody" class="p-4 h-80 md:h-96 overflow-y-auto space-y-4 bg-gray-50 text-left">
                    <!-- Pesan CS -->
                    <div class="flex items-start gap-2">
                        <div class="bg-white p-3 rounded-2xl rounded-tl-none shadow-sm border border-pink-100 max-w-[80%] text-sm text-gray-800">
                            Selamat datang di Latopia Store! Ada yang bisa kami bantu hari ini? 🌸
                        </div>
                    </div>

                    <!-- Pesan User -->
                    <div class="flex justify-end">
                        <div class="bg-pink-500 text-white p-3 rounded-2xl rounded-tr-none shadow-sm max-w-[80%] text-sm">
                            Saya ingin memesan buket bunga.
                        </div>
                    </div>
                </div>

                <!-- Input Footer Chat -->
                <div class="p-3 bg-white border-t border-gray-100 flex items-center gap-2">
                    <input type="text" id="chatInput" onkeypress="handleKeyPress(event)" class="w-full border border-gray-200 rounded-full px-4 py-2 text-sm focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 bg-gray-50" placeholder="Type a message here ...">
                    <button class="bg-pink-500 text-white p-2.5 rounded-full hover:bg-pink-600 transition flex items-center justify-center w-10 h-10 shrink-0 shadow-md" onclick="sendMessage()">
                        <i class="fas fa-paper-plane text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </main>

    <script>
        function toggleChat() {
            const chatBody = document.getElementById('chatBody');
            if (chatBody.style.display === 'none') {
                chatBody.style.display = 'block';
            } else {
                chatBody.style.display = 'none';
            }
        }

        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }

        function sendMessage() {
            const chatInput = document.getElementById('chatInput');
            const message = chatInput.value.trim();

            if (message !== '') {
                const chatBody = document.getElementById('chatBody');

                const newMessageContainer = document.createElement('div');
                newMessageContainer.classList.add('flex', 'justify-end');

                const newMessage = document.createElement('div');
                newMessage.classList.add('bg-pink-500', 'text-white', 'p-3', 'rounded-2xl', 'rounded-tr-none', 'shadow-sm', 'max-w-[80%]', 'text-sm');
                newMessage.innerText = message;

                newMessageContainer.appendChild(newMessage);
                chatBody.appendChild(newMessageContainer);

                chatInput.value = '';
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const chatBody = document.getElementById('chatBody');
            chatBody.scrollTop = chatBody.scrollHeight;
        });
    </script>
</body>
</html>
