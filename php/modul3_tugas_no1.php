<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

$bungaPerBulan = $saldoAwal * $bunga;
$totalBunga = $bungaPerBulan * $bulan;
$saldoAkhir = $saldoAwal + $totalBunga;

echo "Saldo awal = Rp" . $saldoAwal . ",-<br>";
echo "Bunga per bulan = 3% x Rp" . $saldoAwal . ",- = Rp" . $bungaPerBulan . ",-<br>";
echo "Total bunga selama " . $bulan . " bulan = Rp" . $bungaPerBulan . " x " . $bulan . " = Rp" . $totalBunga . ",-<br>";
echo "Saldo akhir = Rp" . $saldoAwal . " + Rp" . $totalBunga . " = Rp" . $saldoAkhir . ",-<br><br>";

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp" . $saldoAkhir . ",-";
?>