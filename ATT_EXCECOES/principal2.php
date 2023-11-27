<?php 
try {
    if (!is_numeric($_GET['valor']))
    {
        throw new Exception("valor não e numero",2);
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