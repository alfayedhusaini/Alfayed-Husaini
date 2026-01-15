<?php
$mahasiswa = [
    ["nim" =>"2023001", "Nama"=>"Burhan", "nilai" => 95],
    ["nim" =>"2023002", "Nama"=>"dewi", "nilai" => 74],
    ["nim" =>"2023003", "Nama"=>"putra", "nilai" => 85],
    ["nim" =>"2023004", "Nama"=>"sahad", "nilai" => 70],
];


?>
<table width="50%" border="1">
    <tr>
        <td>No</td>
        <td>Nim</td>
        <td>Nama</td>
        <td>Nilai</td>
        <td>Keterangan</td>
    </tr>

    <?php
    foreach ($mahasiswa as $key => $value) {
        $no = $key+1;
        if ($value["nilai"] >= 80) {
            $keterangan = "lulus";
        } 
        else {
            $keterangan = "tidak lulus";
        }
    
    echo "
    <tr>
        <td>$no</td>
        <td>$value[nim]</td> 
        <td>$value[Nama]</td>
        <td>$value[nilai]</td>
        <td>$keterangan</td>         
    </tr>
    ";
}
?>
</table>
<br>