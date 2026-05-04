<?php
// Program menghitung bangun ruang kerucut

$r = 7;   // jari-jari
$s = 10;  // garis pelukis
$phi = 3.14;

// Rumus
$luasAlas = $phi * $r * $r;
$luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);

// Menampilkan tahapan perhitungan
echo "Menghitung Bangun Ruang Kerucut<br><br>";

echo "Diketahui:<br>";
echo "Jari-jari (r) = " . $r . "<br>";
echo "Garis pelukis (s) = " . $s . "<br>";
echo "Phi (π) = " . $phi . "<br><br>";

echo "Luas alas = π x r x r<br>";
echo "Luas alas = " . $phi . " x " . $r . " x " . $r . "<br>";
echo "Luas alas = " . $luasAlas . "<br><br>";

echo "Luas permukaan = π x r x r + π x r x s<br>";
echo "Luas permukaan = (" . $phi . " x " . $r . " x " . $r . ") + (" . $phi . " x " . $r . " x " . $s . ")<br>";
echo "Luas permukaan = " . $luasPermukaan . "<br>";
?>