<?php
$username = $_GET['usrnm'];
$password = $_GET['pwd'];
if ($username=="admin" && $password=="admin"){
    echo"login berhasil";
}else{
    echo"login gagal";
}
?>