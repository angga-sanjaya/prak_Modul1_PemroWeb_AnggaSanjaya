<?php
$jumlah = 0; // Variabel penampung hasil penjumlahan

// Perulangan dari 2 sampai 50
for ($i = 2; $i <= 50; $i++) {
    $jumlah += $i; // Menambahkan nilai $i ke dalam variabel $jumlah
}

echo "Hasil penjumlahan bilangan 2 s/d 50 adalah: " . $jumlah;
