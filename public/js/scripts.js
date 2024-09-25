document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById('mainImage');
    const smallImages = document.querySelectorAll('#smallImages img');
    const photoGallery = document.getElementById('smallImages');
    const scrollLeftBtn = document.querySelector('.scroll-left');
    const scrollRightBtn = document.querySelector('.scroll-right');
    
    let currentPosition = 0;
    const imageWidth = smallImages[0].offsetWidth + 16; // Lebar gambar termasuk margin (asumsi 16px)
    let imagesPerPage = Math.floor(photoGallery.offsetWidth / imageWidth); // Jumlah gambar kecil berdasarkan ukuran layar
    const totalImages = smallImages.length;

    // Fungsi untuk scroll galeri
    function scrollGallery(direction) {
        const maxPosition = totalImages - imagesPerPage;
        currentPosition = Math.max(0, Math.min(maxPosition, currentPosition + direction));
        const offset = currentPosition * -imageWidth;
        photoGallery.style.transform = `translateX(${offset}px)`;
    }

    // Tombol scroll kiri
    scrollLeftBtn.addEventListener('click', function() {
        scrollGallery(-1);
    });

    // Tombol scroll kanan
    scrollRightBtn.addEventListener('click', function() {
        scrollGallery(1);
    });

    // Saat window di-resize, hitung ulang jumlah gambar per halaman
    window.addEventListener('resize', function() {
        imagesPerPage = Math.floor(photoGallery.offsetWidth / imageWidth);
        currentPosition = Math.min(currentPosition, totalImages - imagesPerPage);
        scrollGallery(0); // Update tampilan saat resize
    });

    // Update gambar utama saat klik gambar kecil
    smallImages.forEach(function(img) {
        img.addEventListener('click', function() {
            const newSrc = img.getAttribute('data-src');
            mainImage.setAttribute('src', newSrc);
        });
    });
});
