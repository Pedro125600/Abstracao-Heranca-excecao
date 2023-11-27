<?php 
include_once "principal4.php";


if (isset($_POST["inserir"])){
    $valor = $_POST['valor'];
    validarNulo($valor);
}


if (isset($_POST["inserir"])){
    $valor = $_POST['valor'];
    validarValor($valor);
}


if (isset($_POST["inserir"])){
    $valor = $_POST['valor'];
    ValidarNUmero($valor);
}



?>


