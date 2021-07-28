<?php 
session_start();

$usuarioLog = $_SESSION["s_usuario"];


//
require 'database.php';
    $db = conectarDB();


    // consultar
    $query = "SELECT id FROM vendedores WHERE usuario = '$usuarioLog'";
    
    // obtener resultado
    $resultado = mysqli_query($db, $query);
    $ides = mysqli_fetch_assoc($resultado);
    $idmaestra = implode(";",$ides);
    echo $idmaestra;
    

    



?>