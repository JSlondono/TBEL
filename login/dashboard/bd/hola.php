<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

include 'login.php';



echo "<h1>".$idvendedorlog."</h1>"
?>

