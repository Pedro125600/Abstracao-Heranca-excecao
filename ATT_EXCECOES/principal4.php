<?php 

function ValidarNUlo($valor){
try {
    if (isset($_POST['valor'])) {throw new Exception("valor não pode ser vazio",1);}
}catch(Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<br>";
    print_r($e->getCode());
    echo "</pre>";

    exit;
}}

function validarValor($valor)
{
    try {
    if ($valor > 5 )
    {
        throw new \Exception("Valor não pode untrapassar 5 ", 2);
    }
}catch(Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "<br>";
    print_r($e->getCode());
    echo "</pre>";

    exit;
}}

function ValidarNUmero($valor)
{
    try{
        if (!is_numeric($_GET['valor']))
        {
            throw new \Exception("Valor não e numero ", 3);
        }
     } catch(Exception $e) {
            echo "<pre>";
            print_r($e->getMessage());
            echo "<br>";
            print_r($e->getCode());
            echo "</pre>";
        
            exit;
        }
    
}







?>