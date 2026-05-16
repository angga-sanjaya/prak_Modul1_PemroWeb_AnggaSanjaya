<?php
// Array asosiatif
$nilai = [
    "Andi" => 85,
    "Budi" => 70,
    "Citra" => 90,
    "Dina" => 75,
    "Eko" => 80
];

echo "<h3>Array Awal</h3>";
print_r($nilai);
echo "<br><br>";


// 1. array_keys()
// Digunakan untuk mengambil semua key/nama dari array
echo "<h3>1. array_keys()</h3>";
$nama = array_keys($nilai);
echo "Daftar nama siswa:<br>";
print_r($nama);
echo "<br><br>";


// 2. array_values()
// Digunakan untuk mengambil semua value/nilai dari array
echo "<h3>2. array_values()</h3>";
$daftar_nilai = array_values($nilai);
echo "Daftar nilai siswa:<br>";
print_r($daftar_nilai);
echo "<br><br>";


// 3. array_sum()
// Digunakan untuk menjumlahkan semua nilai dalam array
echo "<h3>3. array_sum()</h3>";
$total = array_sum($nilai);
echo "Total semua nilai siswa adalah: " . $total;
echo "<br><br>";


// 4. max()
// Digunakan untuk mencari nilai terbesar
echo "<h3>4. max()</h3>";
$nilai_terbesar = max($nilai);
echo "Nilai terbesar adalah: " . $nilai_terbesar;
echo "<br><br>";


// 5. min()
// Digunakan untuk mencari nilai terkecil
echo "<h3>5. min()</h3>";
$nilai_terkecil = min($nilai);
echo "Nilai terkecil adalah: " . $nilai_terkecil;
echo "<br><br>";

?>

<!-- Penjelasan singkat:

Fungsi	            Kegunaan
______________      _______________________________________________
array_keys()	    Mengambil semua key, misalnya nama siswa.
array_values()	    Mengambil semua value, misalnya nilai siswa.
array_sum()	        Menjumlahkan semua isi array yang berupa angka.
max()	            Mencari nilai paling besar.
min()	            Mencari nilai paling kecil. -->