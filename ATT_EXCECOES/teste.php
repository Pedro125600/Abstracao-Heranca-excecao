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
    print_r($e);
    
  
    echo "</pre>";

    exit;
}

echo "sucesso";



?>