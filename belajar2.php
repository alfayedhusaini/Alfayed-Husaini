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
    $diskon=$total * 0.1;
}else{
    $harga=0;
}
$bayar=$total-$diskon;
echo "Jenis kamar: $jenis_kamar <br>";
echo "lama inap: $lama_inap hari <br>";
echo "diskon: Rp $diskon <br>";
echo "Total biaya: Rp $total <br>";
echo "Total harga: Rp $bayar";
?>