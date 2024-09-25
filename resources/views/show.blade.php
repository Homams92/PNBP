<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Gedung</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('/js/scripts.js') }}"></script>
</head>
<body class="h-full">
    <x-navbar></x-navbar>
    <div class="min-h-full bg-gray-300 pt-[70px] flex justify-center">
        <main>
            <div class="w-full max-w-screen-lg flex justify-end items-center mt-4">
                <button onclick="window.location.href='/'" class="flex items-center bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 mr:20">
                    Home
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
            <h1 class="text-1xl md:text-5xl font-bold mt-4 mb-6 text-center">Gedung Bale Pancawati</h1>
            <div class="flex w-full max-w-screen-lg flex-wrap justify-center">
                <div class="w-full lg:w-3/4 p-4">
                    <div id="contentWrapper" class="bg-white shadow-lg rounded-lg p-6">
                        <div id="dataGedungContent">
                            <h1 class="text-xl font-semibold mb-4 text-center">Data Gedung</h1>
                            <img id="mainImage" src="/img/background.jpg" alt="Foto Gedung" class="w-full rounded-lg shadow-lg mb-4">
                            <div class="relative w-full mt-6 overflow-hidden">
                                <!-- Tombol Scroll Kiri -->
                                <button class="scroll-left absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                                    &#8249;
                                </button>
                                <!-- Galeri gambar kecil -->
                                <div id="smallImages" class="flex space-x-4 transition-transform duration-300">
                                    <img src="/img/2.jpeg" alt="Foto 1" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/2.jpeg">
                                    <img src="/img/images (1).jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/images (1).jpeg">
                                    <img src="/img/background.jpg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/background.jpg">
                                    <img src="/img/logo-bmti.png" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/logo-bmti.png">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                                    <!-- Tambah gambar sesuai kebutuhan -->
                                </div>
                                <!-- Tombol Scroll Kanan -->
                                <button class="scroll-right absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                                    &#8250;
                                </button>
                            </div>
                            <p class="mt-10 text-justify"><strong>Deskripsi:</strong> Gedung Bale Pancawati adalah salah satu venue acara terkemuka yang terletak di lokasi strategis, menawarkan kemudahan akses dan fasilitas lengkap. Dengan desain arsitektur modern yang memadukan estetika dan fungsi, gedung ini cocok untuk berbagai acara, mulai dari pertemuan bisnis hingga acara sosial dan pernikahan.</p>
                            <p class="mt-10"><strong>Harga:</strong> Rp. 5.000.000,00 / Malam</p>
                            <p class="mt-10 text-justify"><strong>Fasilitas:</strong>
                                <ul class="list-disc list-inside">
                                    <li>Ruang Acara: Ruang yang luas dan fleksibel, dapat disesuaikan untuk berbagai jenis acara.</li>
                                    <li>AC: Sistem pendingin udara yang efisien untuk menjaga suhu ruangan tetap nyaman.</li>
                                    <li>Wi-Fi: Koneksi internet berkecepatan tinggi untuk mendukung kegiatan online.</li>
                                    <li>Ruang Meeting: Fasilitas pertemuan yang dilengkapi dengan perlengkapan modern.</li>
                                    <li>Parkir: Area parkir yang cukup untuk menampung banyak kendaraan, dilengkapi dengan pengaturan yang aman.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<div class="flex flex-col md:flex-row gap-6 mt-10">
    <!-- Bagian Fasilitas -->
    <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Fasilitas:</h2>
        <ul class="list-disc list-inside space-y-3">
            <li class="flex items-center">
                <i class="fas fa-couch fa-sm text-blue-500 mr-2"></i> Ruang Acara: Ruang yang luas dan fleksibel, dapat disesuaikan untuk berbagai jenis acara.
            </li>
            <li class="flex items-center">
                <i class="fas fa-snowflake fa-sm text-blue-500 mr-2"></i> AC: Sistem pendingin udara yang efisien untuk menjaga suhu ruangan tetap nyaman.
            </li>
            <li class="flex items-center">
                <i class="fas fa-wifi fa-sm text-blue-500 mr-2"></i> Wi-Fi: Koneksi internet berkecepatan tinggi untuk mendukung kegiatan online.
            </li>
            <li class="flex items-center">
                <i class="fas fa-users fa-sm text-blue-500 mr-2"></i> Ruang Meeting: Fasilitas pertemuan yang dilengkapi dengan perlengkapan modern.
            </li>
            <li class="flex items-center">
                <i class="fas fa-car fa-sm text-blue-500 mr-2"></i> Parkir: Area parkir yang cukup untuk menampung banyak kendaraan, dilengkapi dengan pengaturan yang aman.
            </li>
        </ul>
    </div>

    <!-- Bagian Harga -->
    <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Harga:</h2>
        <p class="text-lg font-bold">Rp. 5.000.000,00 / Malam</p>
        <p class="mt-4 text-justify">Gedung Bale Pancawati adalah salah satu venue acara terkemuka yang terletak di lokasi strategis, menawarkan kemudahan akses dan fasilitas lengkap.</p>
    </div>
</div>