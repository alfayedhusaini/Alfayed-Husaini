<?php
$jenis_kamar = "VIP";
$lama_inap = 6;
if ($jenis_kamar == "biasa") {
    $harga = 150000;
}elseif ($jenis_kamar == "VIP") {
    $harga = 200000;
}elseif ($jenis_kamar == "Super VIP") {
    $harga = 400000;
}

$total = $harga * $lama_inap;
if ($lama_inap > 5) {
    $total *= 0.9;
}

echo "Total biaya: Rp " . number_format($total, 0, ',', '.');
?>