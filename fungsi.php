<?php
// ===============================
// Berisi kumpulan fungsi operasi aritmatika sederhana
// Untuk tugas 3 - membuat kalkulator sederhana
// ===============================

// Fungsi penjumlahan
function penjumlahan($a, $b) {
    return $a + $b;
}

// Fungsi pengurangan
function pengurangan($a, $b) {
    return $a - $b;
}

// Fungsi perkalian
function perkalian($a, $b) {
    return $a * $b;
}

// Fungsi pembagian (dengan validasi nol)
function pembagian($a, $b) {
    if ($b == 0) {
        return "Tidak dapat dibagi dengan nol";
    }
    return round($a / $b, 2);
}

// Fungsi utama untuk menampilkan semua hasil
function tampilkanHasil($a, $b) {
    echo "Bilangan 1 : {$a}<br>";
    echo "Bilangan 2 : {$b}<br>";
    echo str_repeat("=", 35) . "<br>";

    echo "Hasil <b>Penjumlahan</b> adalah : " . penjumlahan($a, $b) . "<br>";
    echo "Hasil <b>Pengurangan</b> adalah : " . pengurangan($a, $b) . "<br>";
    echo "Hasil <b>Perkalian</b> adalah : " . perkalian($a, $b) . "<br>";
    echo "Hasil <b>Pembagian</b> adalah : " . pembagian($a, $b) . "<br>";
}
?>
