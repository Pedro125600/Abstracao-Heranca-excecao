<?php 

function validarValor($valor)
{
    if ($valor > 5 )
    {
        throw new \Exception("Valor não pode untrapassar 5 ", 3);
    }
}

try {
    if (!is_numeric($_GET['valor']))
    {
        throw new \Exception("Valor não e numero ", 2);
    }


validarValor(($_GET['valor']));
echo "sucesso";
} catch (\Exception $e )
{
    echo "<pre>";
    print_r($e->getMessage());
    echo "<br>";
    print_r($e->getCode());
    echo "</pre>";

    exit;
}

?>