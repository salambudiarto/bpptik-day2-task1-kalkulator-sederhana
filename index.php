<!doctype html>
<!-- Deklarasi tipe dokumen HTML5 -->
<html lang="en">
  <!-- Tag pembuka HTML dengan atribut bahasa 'en' (Inggris) -->
  <head>
    <!-- Bagian head menyimpan metadata dan file CSS eksternal -->
    <meta charset="utf-8">
    <!-- Menentukan encoding karakter UTF-8 agar mendukung semua karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Membuat tampilan web responsif di berbagai ukuran layar -->
    <title>Tugas 3 - Kalkulator Sederhana</title>
    <!-- Judul halaman yang akan tampil di tab browser -->

    <!-- Memanggil file CSS Bootstrap versi lokal -->
    <link href="./style/bootstrap.min.css" rel="stylesheet">
    <!-- Atribut rel="stylesheet" menunjukkan bahwa ini adalah file CSS -->
  </head>

  <body>
    <!-- Bagian isi utama halaman (konten) -->
    <div class="container col-3 text-center">
      <!-- Membuat kontainer utama dengan lebar 3 kolom Bootstrap dan teks rata tengah -->

      <!-- Gambar logo aplikasi -->
      <img 
        class="img-fluid mb-4" 
        src="./gambar/logo.jpg" 
        width="60" 
        height="60">
      <!-- 
        class="img-fluid" → agar gambar otomatis menyesuaikan ukuran parent (responsif)
        mb-4 → margin bawah ukuran 4 (spasi antar elemen)
        src="./gambar/logo.jpg" → lokasi file gambar
        width & height → ukuran gambar 60x60 piksel
      -->

      <h3 class="mb-4">Kalkulator Sederhana</h3>
      <!-- Judul utama aplikasi, dengan margin bawah (mb-4) -->

      <!-- Form input untuk kalkulator -->
      <form action="" method="post">
        <!-- 
          action="" → form akan dikirim ke halaman yang sama
          method="post" → mengirim data menggunakan metode POST (lebih aman)
        -->

        <div class="text-start">
          <!-- Membuat area input dengan teks rata kiri -->
          <label class="mb-2">Bilangan 1</label>
          <!-- Label untuk input pertama -->
          <input 
            class="mb-4 form-control" 
            type="number" 
            name="bil1" 
            placeholder="Masukan Bilangan Pertama" 
            required>
          <!-- 
            class="form-control" → gaya input standar Bootstrap
            type="number" → hanya menerima angka
            name="bil1" → nama variabel untuk mengakses di PHP ($_POST['bil1'])
            placeholder → teks panduan dalam input
            required → wajib diisi sebelum submit
          -->
        </div>

        <div class="text-start">
          <!-- Area input kedua -->
          <label class="mb-2">Bilangan 2</label>
          <!-- Label untuk input kedua -->
          <input 
            class="mb-4 form-control" 
            type="number" 
            name="bil2" 
            placeholder="Masukan Bilangan Kedua" 
            required>
          <!-- Sama seperti input pertama, tapi dengan name="bil2" -->
        </div>

        <!-- Tombol kirim form -->
        <button class="btn btn-primary w-100">Hitung</button>
        <!-- 
          class="btn btn-primary" → tombol biru khas Bootstrap
          w-100 → lebar penuh (100%)
        -->
      </form>

      <hr>
      <!-- Garis pemisah antara form dan hasil -->

      <h1>Hasil</h1>
      <!-- Judul bagian hasil perhitungan -->

      <div class="text-start">
        <!-- Area untuk menampilkan hasil perhitungan dari PHP -->
        <?php
          // Mengimpor file fungsi.php yang berisi logika perhitungan
          include "fungsi.php"; 

          // Mengecek apakah form sudah dikirim atau belum
          if (empty($_POST)) {
              // Jika $_POST kosong (belum ada data dari form)
              echo "<div class='text-center'>Belum ada hasil.</div>";
          } else {
              // Jika form dikirim, ambil data dari input pengguna
              $a = $_POST['bil1']; // Nilai bilangan pertama
              $b = $_POST['bil2']; // Nilai bilangan kedua

              // Panggil fungsi tampilkanHasil() dari fungsi.php
              // Fungsi ini akan menampilkan hasil penjumlahan, pengurangan, dll.
              tampilkanHasil($a, $b);

              // Menghentikan eksekusi skrip setelah hasil tampil
              // Agar tidak mengeksekusi bagian bawah yang tidak perlu
              exit;
          }
        ?>
      </div>
      <!-- Penutup div hasil -->
    </div>
    <!-- Penutup container utama -->

    <!-- File JavaScript Bootstrap agar komponen interaktif (modal, alert, dll.) berfungsi -->
    <script src="./script/bootstrap.bundle.min.js"></script>
  </body>
</html>
