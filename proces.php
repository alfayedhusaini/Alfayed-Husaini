<?php
$username = $_GET['usrnm'];
$password = $_GET['pwd'];
$userType = $_GET['userType'];
if ($userType=="admin" && $username=="useradmin"){
    if($password=="123"){
        echo"selamat datang admin";
        exit();
    }else{
        echo"password anda salah";
    }
}elseif ($userType=="finance" && $username=="userfinance"){
    if($password=="1234"){
        echo"selamat datang finance";
    }else{
        echo"password anda salah";
    }
}elseif ($userType=="logistik" && $username=="userlogistik"){
    if($password=="12345"){
        echo"selamat datang logistik";
    }else{
        echo"password anda salah";
    }
}else{
    echo"login gagal";
}
?>