<?php 

//  tanggal
$tgl  = 1;
echo "<select>";
while ($tgl <= 31) {
    echo "<option>$tgl</option>";
    $tgl++;
}
echo "</select>";

// bulan
$bln = 1;
echo "<select>";
do {
    echo "<option>$bln</option>";
    $bln++;
} while ($bln <= 12);
echo "</select>"; 



// tahun
$thn = 2000;
echo "<select>";
for ($thn; $thn <= 2030; $thn++) {
    echo "<option>$thn</option>";
}
echo "</select>";

?>