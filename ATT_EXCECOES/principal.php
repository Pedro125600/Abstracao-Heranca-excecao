<?php 
try {
    if (!Isset($_GET['valor']))
    {
        throw new Exception("valor não pode ser vazio",1);
    }


}
catch (\Exception $e)
{
    echo "<pre>";
    print_r($e->getMessage());
    echo "<br>";
    print_r($e->getCode());
    echo "</pre>";

    exit;
}

echo "sucesso";



?>