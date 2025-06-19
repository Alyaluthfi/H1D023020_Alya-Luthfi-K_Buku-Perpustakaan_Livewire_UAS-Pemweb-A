<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-pink-50 font-sans text-gray-800">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/logo.gif') }}" alt="Logo Buku" class="w-10 h-10 rounded-lg">
                <h1 class="text-2xl font-bold text-pink-600">Perpustakaan</h1>
            </div>
            <div class="flex gap-6">
                <a href="#home" class="text-pink-600 hover:text-pink-800 font-medium transition">Home</a>
                <a href="#kategori" class="text-pink-600 hover:text-pink-800 font-medium transition">Kategori</a>
                <a href="#kontak" class="text-pink-600 hover:text-pink-800 font-medium transition">Kontak Kami</a>
                <a href="{{ route('login') }}" class="text-pink-600 hover:text-pink-800 font-medium transition">Login</a>
                <a href="{{ route('register') }}" class="text-pink-600 hover:text-pink-800 font-medium transition">Register</a>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="py-16 px-6 text-center bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-4xl font-bold text-pink-700 mb-4">Selamat Datang di Aplikasi Perpustakaan</h2>
            <p class="text-lg text-gray-700 mb-6">Sistem ini dirancang untuk membantu mengelola koleksi buku, data anggota, serta proses peminjaman dan pengembalian secara cepat dan efisien.</p>
            <img src="{{ asset('img/welcome.jpg') }}" alt="Ilustrasi" class="mx-auto rounded-full w-60 h-60 shadow-lg">
        </div>
    </section>

    <!-- Kategori Section -->
    <section id="kategori" class="py-16 px-6 bg-pink-100">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-pink-700 mb-10">Kategori Buku</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
                    <img src="img/fiksi.gif" class="w-20 mx-auto mb-4 rounded-xl">
                    <h3 class="text-xl font-semibold mb-2">Fiksi</h3>
                    <p class="mb-4 text-gray-600">Buku-buku cerita imajinatif yang menarik dan menghibur.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
                    <img src="img/pengetahuan.gif" class="w-20 mx-auto mb-4 rounded-xl">
                    <h3 class="text-xl font-semibold mb-2">Ilmu Pengetahuan</h3>
                    <p class="mb-4 text-gray-600">Menambah wawasan dan pengetahuan dari berbagai bidang ilmu.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
                    <img src="img/biografi.gif" class="w-20 mx-auto mb-4 rounded-xl">
                    <h3 class="text-xl font-semibold mb-2">Biografi</h3>
                    <p class="mb-4 text-gray-600">Mengenal kisah hidup tokoh-tokoh inspiratif dari seluruh dunia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Kami Section -->
    <section id="kontak" class="py-16 px-6 bg-white text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-pink-700 mb-6">Hubungi Kami</h2>
            <p class="text-gray-700 mb-4">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan hubungi kami:</p>
            <p class="text-lg text-pink-600 font-medium">Email: aluth@perpustakaan.com</p>
            <p class="text-lg text-pink-600 font-medium">Telepon: (0281)54321 </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-pink-100 py-6">
        <div class="text-center text-sm text-gray-600">
            &copy; {{ date('Y') }} Aplikasi Perpustakaan - Dibuat oleh Alya Luthfi H1D023020
        </div>
    </footer>
</body>
</html>
