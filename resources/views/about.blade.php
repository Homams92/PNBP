<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/scripts.js') }}"></script>
    <title>Dashboard</title>
</head>
<body class="h-full" class="bg-gray-100 flex items-start justify-center h-screen mt-8">
    <x-navbar></x-navbar>
    <h1 class="text-2xl font-bold mt-4 mb-6 text-center">Gedung Bale Pancawati</h1>
    {{-- <x-header></x-header> --}}
    
    {{-- <body class="bg-gray-100 flex items-start justify-center h-screen m-0"> --}}
        <div class="flex">
            <!-- Button Section -->
            <div class="flex flex-col gap-4 w-1/4 p-4 mt-20">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" id="dataGedungBtn">Data Gedung</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" id="galeriFotoBtn">Galeri Foto</button>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600" id="ulasanBtn">Ulasan</button>
            </div>
    
            <!-- Content Section -->
            <div class="w-3/4 p-4 mt-10">
                <!-- Wrapped content in white background with shadow -->
                <div id="contentWrapper" class="bg-white shadow-lg rounded-lg p-6">
                    <!-- Default Content -->
                    <div id="defaultContent" class="">
                        <h1 class="text-xl font-semibold mb-4">Silakan pilih opsi di samping</h1>
                    </div>
                    <!-- Data Gedung Content -->
                    <div id="dataGedungContent" class="hidden">
                        <h1 class="text-xl font-semibold mb-4">Data Gedung</h1>
                        <img src="https://via.placeholder.com/600x400" alt="Foto Gedung" class="w-full mb-4">
                        <p class="mb-4">
                            <strong>Deskripsi:</strong> Gedung ini memiliki arsitektur modern dengan fasilitas lengkap. Terletak di lokasi strategis dengan akses mudah.
                        </p>
                        <p class="mb-4">
                            <strong>Harga:</strong> Rp. 1.000.000.000
                        </p>
                        <p>
                            <strong>Fasilitas:</strong> AC, Wi-Fi, Ruang Meeting, Parkir
                        </p>
                    </div>
                    <!-- Galeri Foto Content -->
                    <div class="w-3/4 p-4">
                      <!-- Wrapped content in white background with shadow -->
                      <div id="contentWrapper" class="bg-white shadow-lg rounded-lg p-6">
                          <!-- Galeri Foto Content -->
                          <div id="galeriFotoContent" class="hidden">
                    <h1 class="text-xl font-semibold mb-4">Galeri Foto</h1>

                    <!-- Foto Besar -->
                    <div class="mb-4">
                        <img id="mainImage" src="https://via.placeholder.com/600x400" alt="Foto Besar" class="w-full h-auto rounded-lg">
                    </div>

                    <!-- Foto Kecil -->
                    <div class="flex gap-2">
                        <img src="https://via.placeholder.com/150" alt="Foto 1" class="w-24 h-24 rounded-lg cursor-pointer hover:opacity-80" onclick="changeMainImage('https://via.placeholder.com/600x400')">
                        <img src="https://via.placeholder.com/150/ff0000" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:opacity-80" onclick="changeMainImage('https://via.placeholder.com/600x400/ff0000')">
                        <img src="https://via.placeholder.com/150/00ff00" alt="Foto 3" class="w-24 h-24 rounded-lg cursor-pointer hover:opacity-80" onclick="changeMainImage('https://via.placeholder.com/600x400/00ff00')">
                        <img src="https://via.placeholder.com/150/0000ff" alt="Foto 4" class="w-24 h-24 rounded-lg cursor-pointer hover:opacity-80" onclick="changeMainImage('https://via.placeholder.com/600x400/0000ff')">
                    </div>
                </div>
                    <!-- Ulasan Content -->
                     <!-- Ulasan Content -->
                <div id="ulasanContent" class="hidden">
                  <h1 class="text-xl font-semibold mb-4">Ulasan</h1>
                 
                  <!-- Ulasan 1 -->
                  <div class="mb-8 p-4 bg-gray-50 rounded-lg shadow-sm">
                      <!-- Foto dan Ulasan Singkat -->
                      <div class="flex items-start mb-4">
                          <img src="https://via.placeholder.com/80" alt="User" class="rounded-full w-16 h-16 mr-4">
                          <div>
                              <p class="font-bold">Ulasan Singkat:</p>
                              <p class="text-gray-600">Gedung ini sangat baik, fasilitas lengkap dan pelayanan memuaskan.</p>
                          </div>
                      </div>
                      <!-- Ulasan Panjang -->
                      <p class="text-gray-800 mb-2">
                          Ulasan lengkap: Saya menghadiri acara pernikahan di sini dan benar-benar terkesan dengan pelayanannya. Gedung ini besar, bersih, dan stafnya sangat membantu. Saya sangat merekomendasikan tempat ini untuk acara besar.
                      </p>
                      <!-- Tanggal dan Tahun -->
                      <p class="text-sm text-gray-500"><em>Tanggal: 2024-09-01</em></p>

                      <!-- Balasan -->
                      <div class="mt-4 pl-6 border-l-4 border-blue-500">
                          <p class="font-bold text-blue-500">Balasan:</p>
                          <p class="text-gray-700">Terima kasih atas ulasannya! Kami senang Anda puas dengan layanan kami.</p>
                      </div>
                  </div>

                  <!-- Ulasan 2 -->
                  <div class="mb-8 p-4 bg-gray-50 rounded-lg shadow-sm">
                      <div class="flex items-start mb-4">
                          <img src="https://via.placeholder.com/80" alt="User" class="rounded-full w-16 h-16 mr-4">
                          <div>
                              <p class="font-bold">Ulasan Singkat:</p>
                              <p class="text-gray-600">Lokasi strategis dan nyaman, namun ada sedikit masalah dengan kebersihan.</p>
                          </div>
                      </div>
                      <p class="text-gray-800 mb-2">
                          Ulasan lengkap: Gedung ini cukup baik secara keseluruhan, tapi saya sedikit kecewa dengan kebersihannya. Beberapa area terlihat kurang bersih dan perlu perhatian lebih. Namun, lokasi gedung sangat strategis, sehingga mudah diakses.
                      </p>
                      <p class="text-sm text-gray-500"><em>Tanggal: 2024-09-05</em></p>

                      <div class="mt-4 pl-6 border-l-4 border-blue-500">
                          <p class="font-bold text-blue-500">Balasan:</p>
                          <p class="text-gray-700">Terima kasih atas feedbacknya. Kami akan memperbaiki masalah kebersihan secepatnya.</p>
                      </div>
                      <div id="addReviewForm" class="hidden mb-4">
                        <h2 class="text-lg font-semibold mb-2">Tambah Ulasan Baru</h2>
                        <form action="#" method="POST">
                            <div class="mb-4">
                                <label for="reviewTitle" class="block text-sm font-medium text-gray-700">Judul Ulasan</label>
                                <input type="text" id="reviewTitle" name="reviewTitle" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                            </div>
                            <div class="mb-4">
                                <label for="reviewShort" class="block text-sm font-medium text-gray-700">Ulasan Singkat</label>
                                <textarea id="reviewShort" name="reviewShort" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="reviewLong" class="block text-sm font-medium text-gray-700">Ulasan Panjang</label>
                                <textarea id="reviewLong" name="reviewLong" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="reviewDate" class="block text-sm font-medium text-gray-700">Tanggal Ulasan</label>
                                <input type="date" id="reviewDate" name="reviewDate" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                            </div>
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Kirim Ulasan</button>
                        </form>
                    </div>

                    <!-- Button Tambah Ulasan -->
                    <button id="toggleReviewFormBtn" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 mt-4">Tambah Ulasan</button>
                </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
