<?php
session_start();
$_SESSION["username"]="Farhan";
$_SESSION["password"]="123";
if (isset($_POST["login"])){
    if ($_POST["username"]=="farhan" && $_POST["password"]=="123"){
        header("location:tampilKontak.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>
