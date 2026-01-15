<?php

//$arrayBuah = ['apple','orange','grape'];
$arrayBuah[0] = 'apple';
$arrayBuah[1] = 'orange';
$arrayBuah[2] = 'grape';
$arrayBuah[3] = 'durian';
$arrayBuah[4] = 'banana';
$arrayBuah[5] = 'water melon';
//array numerik -> index angka
$jmlData=count($arrayBuah);//6
echo "<select>";
for ($i=0; $i < $jmlData; $i++) {
    echo "<option>". $arrayBuah [$i]. "</option>";
}
echo "</select>". "<br>";

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