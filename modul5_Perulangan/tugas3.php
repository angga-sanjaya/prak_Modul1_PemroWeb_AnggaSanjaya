<?php
$jumlah_bilangan = 0; // Variabel counter untuk menghitung banyaknya angka

// Perulangan dari 3 sampai 127
for ($i = 3; $i <= 127; $i++) {
    // Mengecek apakah angka tersebut kelipatan 6
    if ($i % 6 == 0) {
        $jumlah_bilangan++; // Menambah hitungan jika syarat terpenuhi
    }
}

echo "Banyaknya bilangan bulat kelipatan 6 antara 3 s/d 127 adalah: " . $jumlah_bilangan;
?>