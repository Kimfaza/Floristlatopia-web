<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('img/logo.png')}}" type="gambar/tipe ikon">
    <style>
        .slide-left-enter-active {
            transition: transform 0.5s ease-in-out;
        }
        .slide-left-enter {
            transform: translateX(100%);
        }
        .slide-left-enter-to {
            transform: translateX(0%);
        }
    </style>
</head>

<body class="bg-gray-100">


    <main class="container mx-auto mt-10 px-6 flex pb-10">
        <div class="w-2/3">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Temukan Bouquet Impian Kamu Disini</h1>
            <p class="text-gray-600 mb-6">Explore bucket menarik dari Latopia dengan bergabung bersama kami.</p>
            <button class="bg-pink-500 text-white py-2 px-6 rounded-lg text-lg font-semibold hover:bg-pink-600"><a href="/home">Back</a></button>
            <div class="mt-10">
                <img src="img/boneka.png" alt="Bouquet" class="rounded-lg shadow-lg">
            </div>
        </div>

        <div class="fixed bottom-4 right-4 w-80 bg-white rounded-lg shadow-lg">
            <div class="bg-pink-600 text-white px-4 py-2 rounded-t-lg flex justify-between items-center">
                <h2 class="text-lg font-semibold">Chat</h2>
                <button class="text-white" onclick="toggleChat()">×</button>
            </div>
            <div id="chatBody" class="p-4 h-96 overflow-y-auto">
                <div class="mb-4">
                    <p class="bg-pink-100 p-3 rounded-lg shadow-md">Selamat datang ada yang bisa kami bantu?</p>
                </div>
                <div class="mb-4 text-right">
                    <p class="bg-gray-100 p-3 rounded-lg shadow-md inline-block">Saya ingin memesan buket bunga.</p>
                </div>
            </div>
            <div class="p-4 bg-gray-100 rounded-b-lg flex items-center">
                <input type="text" id="chatInput" class="w-full border rounded-lg p-2" placeholder="Type a message here ...">
                <button class="ml-2 bg-pink-500 text-white py-2 px-4 rounded-lg hover:bg-pink-600" onclick="sendMessage()">Send</button>
            </div>
        </div>
    
        <script>
            function toggleChat() {
                const chatBody = document.getElementById('chatBody');
                if (chatBody.style.display === 'none') {
                    chatBody.style.display = 'block';
                } else {
                    chatBody.style.display = 'none';
                }
            }
    
            function sendMessage() {
                const chatInput = document.getElementById('chatInput');
                const message = chatInput.value;
                if (message.trim() !== '') {
                    const chatBody = document.getElementById('chatBody');
                    const newMessage = document.createElement('div');
                    newMessage.classList.add('mb-4', 'text-right');
                    newMessage.innerHTML = `<p class="bg-gray-100 p-3 rounded-lg shadow-md inline-block">${message}</p>`;
                    chatBody.appendChild(newMessage);
                    chatInput.value = '';
                    chatBody.scrollTop = chatBody.scrollHeight;
                }
            }
        </script>


        {{-- <div class="w-1/3 bg-pink-50 p-6 rounded-lg shadow relative">
            <div class="bg-pink-600 text-white px-4 py-2 rounded-t-lg flex justify-between items-center">
                <h2 class="text-lg font-semibold">Chat</h2>
                <button class="text-white">&times;</button>
            </div>
            <div class="p-4 h-96 overflow-y-auto">
                <div class="mb-4">
                    <p class="bg-white p-3 rounded-lg shadow-md">Selamat datang ada yang bisa kami bantu?</p>
                </div>
                <div class="mb-4 text-right">
                    <p class="bg-white p-3 rounded-lg shadow-md">Saya ingin memesan buket bunga.</p>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-white rounded-b-lg">
                <input type="text" class="w-full border rounded-lg p-2" placeholder="Type a message here ...">
            </div>
        </div> --}}
    </main>

</body>
</html>