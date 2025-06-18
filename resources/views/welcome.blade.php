<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-pink-100 via-white to-pink-200 font-sans text-gray-900 min-h-screen flex items-center justify-center">
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-2xl rounded-2xl flex flex-col md:flex-row items-center gap-10">
        <!-- Gambar Ilustrasi -->
        <div class="w-full md:w-1/2">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Ilustrasi Perpustakaan" class="w-full h-auto">
        </div>

        <!-- Konten -->
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl font-bold mb-4 text-pink-700">Selamat Datang!</h1>
            <p class="text-lg text-gray-700 mb-6">Kelola koleksi buku perpustakaan dengan mudah, cepat, dan efisien. Akses data buku kapan pun kamu butuh.</p>

            @auth
                <a href="{{ route('dashboard') }}"
                   class="inline-block px-6 py-3 bg-pink-600 text-white rounded-full shadow hover:bg-pink-700 transition">
                   Masuk ke Dashboard
                </a>
            @else
                <div class="flex flex-col md:flex-row gap-4 justify-center md:justify-start">
                    <a href="{{ route('login') }}"
                       class="px-6 py-3 bg-pink-600 text-white rounded-full shadow hover:bg-pink-700 transition">
                       Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-6 py-3 border border-pink-600 text-pink-600 rounded-full shadow hover:bg-pink-100 transition">
                       Register
                    </a>
                </div>
            @endauth
        </div>
    </div>
</body>
</html>
