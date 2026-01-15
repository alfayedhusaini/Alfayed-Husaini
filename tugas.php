<?php

$_fp = fopen("php://stdin", "r");

$harga_emas_per_gram = 2100000; 
$nisab = 85 * $harga_emas_per_gram; 

echo "Masukkan Jenis Harta: ";
$jenis_harta = trim(fgets($_fp));

echo "Masukkan Nominal Harta (Rp): ";
$nominal_harta_input = trim(fgets($_fp));
$nominal_harta = floatval($nominal_harta_input);

if ($nominal_harta > $nisab) {
    $zakat = $nominal_harta * 0.025;
} else {
    $zakat = 0;
}

$zakat_formatted = number_format($zakat, 0, ',', '.');
$nisab_formatted = number_format($nisab, 0, ',', '.');
$nominal_harta_formatted = number_format($nominal_harta, 0, ',', '.');

echo "\nHasil Perhitungan:\n";
echo "Jenis Harta: $jenis_harta\n";
echo "Nominal Harta: Rp $nominal_harta_formatted\n";
echo "Nisab (85 gram emas): Rp $nisab_formatted\n";
echo "Total Harta: Rp $nominal_harta_formatted\n";

if ($zakat > 0) {
    echo "Total Zakat (2.5%): Rp $zakat_formatted\n";
} else {
    echo "Total Harta tidak mencapai nisab, tidak wajib zakat.\n";
}
?>