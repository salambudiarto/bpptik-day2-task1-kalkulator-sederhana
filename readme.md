# Day 2 - Tugas 1 - Kalkulator Sederhana

Proyek ini adalah aplikasi **Kalkulator Sederhana** berbasis **HTML, PHP, dan Bootstrap 5**, yang memungkinkan pengguna menghitung operasi matematika dasar seperti penjumlahan, pengurangan, perkalian, dan pembagian.

[![PHP](https://img.shields.io/badge/PHP-8%2B-blue?logo=php)](https://www.php.net/) [![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3.8-purple?logo=bootstrap)](https://getbootstrap.com/) [![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)
### DEMO
[![Demo](https://img.shields.io/badge/Live%20Demo-Click%20Here-brightgreen?style=for-the-badge)](https://iyo.biz.id/bpptik-day2-task1-kalkulator-sederhana)

---

## Deskripsi Proyek

Aplikasi ini dibuat sebagai tugas pembelajaran dasar PHP dan HTML. Program akan menerima dua input bilangan dari pengguna, kemudian menampilkan hasil dari empat operasi aritmetika dasar:

1. Penjumlahan
2. Pengurangan
3. Perkalian
4. Pembagian

Selain itu, aplikasi ini menggunakan **Bootstrap 5** agar tampilan lebih rapi dan responsif di berbagai perangkat.

---

## Fitur

* Input dua bilangan melalui form
* Validasi sederhana (cek apakah form sudah dikirim)
* Menampilkan hasil perhitungan dari empat operasi aritmetika menggunakan fungsi terpisah di `fungsi.php`
* Menggunakan Bootstrap versi lokal untuk tampilan yang bersih dan modern
* Desain responsif dan ringan

---

## Struktur Folder

```
┌── kalkulator-sederhana/           # Folder utama proyek web kalkulator sederhana
│
│   ├── readme.md                   # Dokumentasi proyek
│   │                               # Berisi deskripsi proyek, cara menjalankan, struktur folder,
│   │                               # dan penjelasan singkat fungsi tiap file.
│
│   ├── gambar/                     # Folder untuk menyimpan aset gambar
│   │   └── logo.jpg                # Logo aplikasi yang ditampilkan di bagian header (img src="./gambar/logo.jpg")
│
│   ├── script/                     # Folder untuk file JavaScript
│   │   └── bootstrap.min.js        # File JavaScript Bootstrap versi lokal
│   │                               # Digunakan untuk elemen interaktif seperti tombol dan efek responsif
│
│   └── style/                      # Folder untuk file CSS (gaya tampilan)
│       └── bootstrap.min.css       # File CSS Bootstrap versi lokal
│                                   # Memberikan tampilan profesional dan responsif pada form dan tombol
│
├── fungsi.php                      # File berisi fungsi-fungsi logika kalkulator
│                                   # Berisi fungsi: penjumlahan(), pengurangan(), perkalian(), pembagian()
│                                   # serta tampilkanHasil() untuk menampilkan seluruh hasil perhitungan
│                                   # Dipanggil di index.php menggunakan `include "fungsi.php";`
│
└── index.php                       # Halaman utama aplikasi
                                    # Berisi tampilan (HTML + Bootstrap)
                                    # Menampilkan form input dua bilangan dan hasil perhitungannya
                                    # Ketika user klik tombol "Hitung", data dikirim (POST)
                                    # lalu index.php memanggil fungsi dari fungsi.php untuk menampilkan hasil
```

---

## Teknologi yang Digunakan

| Teknologi                  | Deskripsi                                   |
| -------------------------- | ------------------------------------------- |
| **HTML5**                  | Struktur dasar halaman web                  |
| **PHP 8+**                 | Pemrosesan form dan logika kalkulator       |
| **Bootstrap 5.3.8**        | Framework CSS untuk tampilan responsif      |
| **JavaScript (Bootstrap)** | Fitur interaktif dari Bootstrap versi lokal |

---

## Cara Menjalankan

### 1. Persiapan

Pastikan kamu sudah menginstal:

* **XAMPP / Laragon / WAMP / LAMP**
* PHP versi 8 atau lebih baru

### 2. Letakkan File

Salin folder proyek ke dalam direktori:

```
C:\xampp\htdocs\
```

### 3. Jalankan Server

Buka **XAMPP Control Panel**, lalu aktifkan:

* Apache
* (Opsional) MySQL

### 4. Akses di Browser

Buka alamat berikut:

```
http://localhost/kalkulator-sederhana/
```

### 5. Masukkan Dua Bilangan

Isi bilangan pertama dan kedua, lalu tekan tombol **Hitung** untuk melihat hasil perhitungan.

---

## Catatan

* Jika salah satu input kosong, maka sistem akan menampilkan pesan *"Belum ada hasil."*
* Pembagian dibulatkan hingga **2 angka desimal** menggunakan fungsi `round()`.
* Setiap operasi (penjumlahan, pengurangan, perkalian, pembagian) memiliki fungsi tersendiri di `fungsi.php` untuk menjaga modularitas kode.
* Proyek ini bersifat latihan.

---

## Lisensi

Proyek ini dirilis di bawah lisensi **MIT License**, kamu bebas menggunakan dan memodifikasi kode ini untuk keperluan belajar.

Lisensi MIT adalah lisensi perangkat lunak "permisif" yang memungkinkan siapa saja untuk menggunakan, menyalin, memodifikasi, menggabungkan, menerbitkan, mendistribusikan, mensublisensikan, dan menjual perangkat lunak tersebut dengan sangat sedikit batasan.

---

## Pembuat

| **Keterangan** | **Detail** |
|----------------|-------------|
| **Nama**       | Salam Budiarto |
| **Kelas**      | B |
| **Tugas**      | Tugas 1 - Kalkulator Sederhana |
| **Tanggal**    | 05 Oktober 2025, 11:00 WIB |

