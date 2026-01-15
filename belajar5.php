<?php

//$arrayBuah = ['apple','orange','grape'];
$arrayBuah=['mango','apple','orange','grape'];
/*$arrayBuah[0] = 'apple';
$arrayBuah[1] = 'orange';
$arrayBuah[2] = 'grape';
$arrayBuah[3] = 'durian';
$arrayBuah[4] = 'banana';
$arrayBuah[5] = 'water melon';*/
//array numerik -> index angka
echo "<select>";
$jmlData=count($arrayBuah);//6
for ($i=0; $i < $jmlData; $i++) {
    echo "<option>". $arrayBuah [$i]. "</option>";
}
echo "</select>". "<br>";

$arrayDC = [
    "name" => "Batman",
    "age" => "45",
    "color" => "Black",
];
foreach ($arrayDC as $key => $value){
    echo $key.": ".$value."<br>";
}

//array Assosiatif -> index huruf
$arrayAvenger = [
    [
        "name" => "Iron Man",
        "age" => 45,
        "color" => "red",
    ],
    [
        "name" => "Captain America",
        "age" => 146,
        "color" => "red-bule",
    ],
    [
        "name" => "Hulk",
        "age" => 47,
        "color" => "green",
    ],
];
foreach ($arrayAvenger as $data) {
  echo "name : ".$data['name'];
  echo " -age : ".$data['age'];
  echo " -color : ".$data['color'];
}
?>
<table width="50%" border="1">
    <tr>
        <td>No</td>
        <td>name</td>
        <td>age</td>
        <td>color</td>
    </tr>
    <?php
    foreach ($arrayAvenger as $key => $value){
        $no=$key+1;
        echo "
        <tr>
            <td>$no</td>
            <td>$value[name]</td>
            <td>$value[age]</td>
            <td>$value[color]</td>
        </tr>
        ";
    }
    ?>
</table>