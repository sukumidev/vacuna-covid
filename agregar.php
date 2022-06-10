<?php
require_once "config.php";
 
// Definir variables e inicializarlas como vacias
$denominacion= $primerlugarvisto = $peligrosidad = $contagios  = "";
 

// Procesar datos del formulario cuando el formulario sea subido
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nombre = trim($_POST["denominacion"]);
    $primerlugarvisto = trim($_POST["primerlugarvisto"]);
    $peligrosidad = trim($_POST["peligrosidad"]);
    $contagios = trim($_POST["contagios"]);

        // Preparar la sentencia de insert
        $sql = "INSERT INTO `variantes` (`denominacion`, `primerlugarvisto`, `peligrosidad`, `contagios`) VALUES ('$nombre','$primerlugarvisto','$peligrosidad',$contagios)";
        if(mysqli_query($link, $sql)){
		echo "Registro exitoso";
		header("location: mostrartodos.php");
        }
        else{
            echo "Oops! Algo salió mal, intentalo de nuevo";
            echo    mysqli_error($link);
        } 
    }
?>
