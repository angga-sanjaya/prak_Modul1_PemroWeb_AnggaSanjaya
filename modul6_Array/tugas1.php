<?php
// Array asosiatif
$nilai = [
    "Andi" => 85,
    "Budi" => 70,
    "Citra" => 90,
    "Dina" => 75,
    "Eko" => 80
];

echo "Array awal:<br>";
print_r($nilai);
echo "<br><br>";


// 1. sort() - mengurutkan berdasarkan nilai, index/key diubah menjadi angka
$data = $nilai;
sort($data);
echo "sort():<br>";
print_r($data);
echo "<br><br>";


// 2. rsort() - mengurutkan nilai dari besar ke kecil, key hilang
$data = $nilai;
rsort($data);
echo "rsort():<br>";
print_r($data);
echo "<br><br>";


// 3. asort() - mengurutkan berdasarkan nilai dari kecil ke besar, key tetap
$data = $nilai;
asort($data);
echo "asort():<br>";
print_r($data);
echo "<br><br>";


// 4. arsort() - mengurutkan berdasarkan nilai dari besar ke kecil, key tetap
$data = $nilai;
arsort($data);
echo "arsort():<br>";
print_r($data);
echo "<br><br>";


// 5. ksort() - mengurutkan berdasarkan key dari A-Z
$data = $nilai;
ksort($data);
echo "ksort():<br>";
print_r($data);
echo "<br><br>";


// 6. krsort() - mengurutkan berdasarkan key dari Z-A
$data = $nilai;
krsort($data);
echo "krsort():<br>";
print_r($data);
echo "<br><br>";
?>

<!-- Fungsi	Keterangan
1. sort()	    Urut nilai kecil ke besar, key berubah jadi angka.
2. rsort()     Urut nilai besar ke kecil, key berubah jadi angka.
3. asort()		Urut nilai kecil ke besar, key tetap.
4. arsort()	Urut nilai besar ke kecil, key tetap.
5. ksort()		Urut berdasarkan key A-Z.
6. krsort()	Urut berdasarkan key Z-A. -->